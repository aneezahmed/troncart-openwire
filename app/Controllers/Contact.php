<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index(): string
    {
        return view('contact');
    }

    public function submit()
    {
        $validation = \Config\Services::validation();
        
        $validation->setRules([
            'department' => 'required|in_list[it_infrastructure,smart_metering]',
            'name' => 'required|min_length[3]|max_length[100]',
            'email' => 'required|valid_email',
            'phone' => 'permit_empty|min_length[10]|max_length[15]',
            'subject' => 'required|min_length[5]|max_length[200]',
            'message' => 'required|min_length[10]|max_length[1000]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $captchaError = $this->verifyCaptcha();
        if ($captchaError !== null) {
            return redirect()->back()->withInput()->with('errors', ['captcha' => $captchaError]);
        }

        $data = $validation->getValidated();
        $department = $data['department'];
        $name = trim($data['name']);
        $email = trim($data['email']);
        $phone = trim($data['phone'] ?? '');
        $subject = trim($data['subject']);
        $message = trim($data['message']);

        // Determine recipient email based on department
        $recipientEmail = '';
        $departmentName = '';
        
        if ($department === 'it_infrastructure') {
            $recipientEmail = 'connect@troncart.com';
            $departmentName = 'IT and Infrastructure Solutions';
        } elseif ($department === 'smart_metering') {
            $recipientEmail = 'contact@troncart.com';
            $departmentName = 'Smart Utility Metering Solutions';
        }

        // Prepare email content
        $eol = PHP_EOL;
        $emailBody = "New Contact Form Submission{$eol}{$eol}";
        $emailBody .= "Department: {$departmentName}{$eol}";
        $emailBody .= "Name: {$name}{$eol}";
        $emailBody .= "Email: {$email}{$eol}";
        $emailBody .= "Phone: " . ($phone ?: 'Not provided') . "{$eol}";
        $emailBody .= "Subject: {$subject}{$eol}{$eol}";
        $emailBody .= "Message:{$eol}{$message}{$eol}";

        // Send email using AWS SES API (credentials from environment)
        $region = getenv('AWS_REGION') ?: 'us-east-1';
        $fromEmail = getenv('AWS_SES_FROM') ?: '';
        $accessKey = getenv('AWS_ACCESS_KEY_ID') ?: '';
        $secretKey = getenv('AWS_SECRET_ACCESS_KEY') ?: '';

        if ($fromEmail === '' || $accessKey === '' || $secretKey === '') {
            log_message('error', 'SES config missing: AWS_SES_FROM/AWS_ACCESS_KEY_ID/AWS_SECRET_ACCESS_KEY');
            return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        }

        try {
            $ses = new \Aws\Ses\SesClient([
                'region'      => $region,
                'version'     => '2010-12-01',
                'credentials' => [
                    'key'    => $accessKey,
                    'secret' => $secretKey,
                ],
            ]);

            $ses->sendEmail([
                'Source' => $fromEmail,
                'Destination' => [
                    'ToAddresses' => [$recipientEmail],
                ],
                'Message' => [
                    'Subject' => [
                        'Data'    => "Contact Form: {$subject}",
                        'Charset' => 'UTF-8',
                    ],
                    'Body' => [
                        'Text' => [
                            'Data'    => $emailBody,
                            'Charset' => 'UTF-8',
                        ],
                    ],
                ],
                'ReplyToAddresses' => [$email],
            ]);

            return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        } catch (\Exception $e) {
            log_message('error', 'SES send failed: ' . $e->getMessage());
            return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        }
    }

    private function verifyCaptcha(): ?string
    {
        $secret = getenv('RECAPTCHA_SECRET_KEY') ?: '';
        if ($secret === '') {
            log_message('error', 'reCAPTCHA config missing: RECAPTCHA_SECRET_KEY');
            return 'Captcha is not configured. Please try again later.';
        }

        $responseToken = $this->request->getPost('g-recaptcha-response');
        if (empty($responseToken)) {
            return 'Please complete the captcha.';
        }

        try {
            $client = \Config\Services::curlrequest();
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret' => $secret,
                    'response' => $responseToken,
                    'remoteip' => $this->request->getIPAddress(),
                ],
                'timeout' => 5,
            ]);

            $result = json_decode((string) $response->getBody(), true);
            if (!is_array($result) || empty($result['success'])) {
                return 'Captcha verification failed. Please try again.';
            }
        } catch (\Throwable $e) {
            log_message('error', 'reCAPTCHA verify failed: ' . $e->getMessage());
            return 'Captcha verification failed. Please try again.';
        }

        return null;
    }
}
