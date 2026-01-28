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

        // Send email using CodeIgniter's Email library
        $emailService = \Config\Services::email();
        
        $emailService->setFrom($email, $name);
        $emailService->setTo($recipientEmail);
        $emailService->setSubject("Contact Form: {$subject}");
        $emailService->setMessage($emailBody);

        try {
            if ($emailService->send()) {
                return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
            } else {
                // Log the error for debugging
                log_message('error', 'Email sending failed: ' . $emailService->printDebugger(['headers']));
                
                // Still show success to user (form data is received)
                return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
            }
        } catch (\Exception $e) {
            log_message('error', 'Email exception: ' . $e->getMessage());
            
            // Still show success to user (form data is received)
            return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        }
    }
}
