<?php

return [
    'page' => [
        'login' => [
            'title' => 'Login',
            'description' => 'Login to your account.',
            'form_fields' => [
                'email' => 'Email',
                'password' => 'Password',
                'remember_me' => 'Remember me',
                'submit' => 'Login',
            ],
        ],
        'register' => [
            'title' => 'Register',
            'description' => 'Register to your account.',
            'already_registered' => 'Already registered? Login here.',
            'form_fields' => [
                'name' => 'Name',
                'username' => 'Username',
                'email' => 'Email',
                'password' => 'Password',
                'password_confirmation' => 'Password Confirmation',
                'accept_terms' => 'Accept terms and conditions',
                'accept_terms_link' => 'Terms & Conditions',
                'captcha' => 'Captcha verification',
                'submit' => 'Register',
            ],
        ],
        'forgot_password' => [
            'title' => 'Forgot Password?',
            'description' => 'No problem! Just let us know your email address. We will send you a password reset link that will allow you to choose a new one.',
            'form_fields' => [
                'email' => 'Email',
                'submit' => 'Send Password Reset Link',
            ],
        ],
        'reset_password' => [
            'title' => 'Reset Password',
            'description' => 'Reset your password.',
            'form_fields' => [
                'token' => 'Reset Password Token',
                'email' => 'Email',
                'password' => 'Choose a new password',
                'password_confirmation' => 'Confirm new password',
                'submit' => 'Reset Password',
            ],
        ],
        'confirm_password' => [
            'title' => 'Confirm Password',
            'description' => 'Please confirm your password before continuing.',
            'form_fields' => [
                'password' => 'Current Password',
                'submit' => 'Unlock',
            ],
        ],
		 'verify_email' => [
				'title' => 'Verify Email',
				'description' => 'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.',
				'form_fields' => [
					'submit' => 'Verify Email',
					'logout' => 'Logout'
				]
		 ],
        'logout' => [
            'title' => 'Logout',
            'description' => 'You have been logged out.',
            'form_fields' => [
                'submit' => 'Logout',
            ],
        ],
    ],
    'actions' => [
        'go_back' => 'Go back',
    ],
];
