<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function loginView()
    {
        // Helper for form and URL
        helper(['form', 'url']);

        $data = [
            'pageTitle' => 'Login UNPAR RPL'
        ];
        return view('auth/login_page', $data); // Assumes login_page.php is in app/Views/auth/
    }

    public function processLogin()
    {
        helper(['form', 'url']);

        // Basic validation example (implement proper validation)
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ];

        if (! $this->validate($rules)) {
            // If validation fails, show the form again with errors
            // You might want to pass back the validation errors to the view
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // If validation passes, get the POST data
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // --- Your Authentication Logic Here ---
        // Example: Check against a database, use an authentication library, etc.
        // For now, let's simulate a successful login for a specific user
        if ($email === 'mahasiswa@example.com' && $password === 'password123') {
            // Authentication successful
            // Set session, redirect to dashboard, etc.
            // Example:
            // $session = session();
            // $session->set('isLoggedIn', true);
            // $session->set('userEmail', $email);
            // return redirect()->to('/dashboard');

            // For this example, just redirect to a success page or welcome page
            // return redirect()->to(site_url('/')); // Redirect to home for now
            echo "Login Successful for " . esc($email); // Replace with actual redirect
            return;
        } else {
            // Authentication failed
            // Redirect back to login with an error message
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }
    }

    public function registerView()
    {
        helper(['form', 'url']);
        // Load your registration view, e.g., return view('auth/register_page');
        return "Registration Page Placeholder"; // Placeholder
    }
}