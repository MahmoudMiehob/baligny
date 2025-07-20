<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'paypal' => [
        'mode'    => env('PAYPAL_MODE', 'sandbox'),
        'sandbox' => [
            'client_id'     => env('PAYPAL_SANDBOX_CLIENT_ID'),
            'client_secret' => env('PAYPAL_SANDBOX_CLIENT_SECRET'),
            'app_id'        => 'APP-80W284485P519543T',
        ],
        'live' => [
            'client_id'     => env('PAYPAL_LIVE_CLIENT_ID'),
            'client_secret' => env('PAYPAL_LIVE_CLIENT_SECRET'),
            'app_id'        => '',
        ],
        'payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'),
        'currency'       => env('PAYPAL_CURRENCY', 'USD'),
        'notify_url'     => env('PAYPAL_NOTIFY_URL', ''),
        'locale'         => env('PAYPAL_LOCALE', 'en_US'),
        'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
