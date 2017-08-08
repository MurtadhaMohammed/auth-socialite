<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
    'client_id' => '1889156764736707',
    'client_secret' => '6ea8b5dda211faee6c775e29600068d6',
    'redirect' => 'http://localhost:8000/auth/facebook/callback',
],
    'google' => [
    'client_id' => '717560939854-5hc0mesvdi8mkr4h80pbna90lnk755t1.apps.googleusercontent.com',
    'client_secret' => 'xNtW3d8ER-yJB9R3D2eCOO8s',
    'redirect' => 'http://localhost:8000/auth/google/callback',
],

];
