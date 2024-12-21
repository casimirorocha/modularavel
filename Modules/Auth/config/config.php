<?php

return [
    'name' => 'Auth: Module',
    'base_url' => '/auth',
    'middleware' => ['web'],
    'namespace' => 'Modules\Auth\Http\Controllers',
    'providers' => [
        'Modules\Auth\Providers\AuthServiceProvider',
    ],
    'commands' => [
        'auth:install' => 'Modules\Auth\Console\Commands\InstallCommand',
        'auth:reset' => 'Modules\Auth\Console\Commands\ResetCommand',
        'auth:clear-resets' => 'Modules\Auth\Console\Commands\ClearResetsCommand',
    ],
];
