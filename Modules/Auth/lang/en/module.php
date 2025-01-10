<?php

return [
    'page' => [
        'login' => include_once __DIR__.'/pages/login.php',
        'register' => include_once __DIR__.'/pages/register.php',
        'forgot_password' => include_once __DIR__.'/pages/forgot_password.php',
        'logout' => include_once __DIR__.'/pages/logout.php',
    ],
	'actions'	=> [
		'go_back'		=> 'Go back',
	]
];
