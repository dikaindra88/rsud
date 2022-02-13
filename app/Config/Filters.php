<?php

namespace Config;

use App\Filters\Staf;
use App\Filters\Users;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'users'         => Users::class,
        'staf'          => Staf::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            // 'honeypot',
            'csrf',

            'users' => [
                'except' => [
                    'Auth/*',
                    'logout/*'
                ]
                // 'invalidchars',
            ],
            'staf' => [
                'except' => [
                    'Auth/*',
                    'logout/*'
                ]
                // 'invalidchars',
            ]

        ],

        'after' => [
            'users' => [
                'except' => [
                    'Child/*',
                    'Dashboard/*',
                    'Dewasa/*',
                    'Remaja/*',
                    'Jadwal/*',
                    'Vaccines/*',
                    'Admin/*'
                ]
                // 'invalidchars',
            ],
            'staf' => [
                'except' => [
                    'Child/*',
                    'Dashboard/*',
                    'Dewasa/*',
                    'Remaja/*',
                    'Jadwal/*',
                    'Vaccines/*'
                ]
                // 'invalidchars',
            ],
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
