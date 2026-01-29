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

        $department = $this->request->getPost('department');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

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
        $emailBody = "New Contact Form Submission\n\n";
        $emailBody .= "Department: {$departmentName}\n";
        $emailBody .= "Name: {$name}\n";
        $emailBody .= "Email: {$email}\n";
        $emailBody .= "Phone: " . ($phone ?: 'Not provided') . "\n";
        $emailBody .= "Subject: {$subject}\n\n";
        $emailBody .= "Message:\n{$message}\n";

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
}
