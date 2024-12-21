<?php

return [
    'title' => 'Forgot Password',
    'description' => 'Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.',
    'form' => [
        'heading' => 'Forgot Password',
        'subheading' => 'Please enter your email address to reset your password',
        'email' => 'Email',
    ],
    'actions' => [
        'submit' => 'Reset Password',
    ],
    'errors' => [
        'email_not_found' => 'Email not found',
        'unknown_error' => 'Unknown error',
        'banned_ip' => 'Banned IP address',
        'banned_email' => 'Banned email address',
        'invalid_email' => 'Invalid email address',
        'throttle' => 'Too many password reset attempts. Please try again in :seconds seconds.',
    ],
    'alerts' => [
        'success' => 'Password reset email sent',
        'failed' => 'Password reset failed',
    ],
    'seo' => [
        'title' => 'Forgot Password',
        'description' => 'Reset your password',
        'keywords' => 'forgot password,reset password',
        'canonical' => 'forgot-password',
        'og:title' => 'Forgot Password',
        'og:description' => 'Reset your password',
        'og:url' => 'forgot-password',
        'og:type' => 'website',
        'og:image' => 'https://example.com/image.jpg',
        'og:site_name' => 'Example Site',
        'og:locale' => 'en_US',
        'og:locale:alternate' => 'en_GB',
        'og:updated_time'    => '2021-01-01T00:00:00+00:00',
        'og:author' => 'https://example.com/author',
    ],
];
