<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Google Analytics
    |--------------------------------------------------------------------------
    |
    | These options configure Google Analytics. Set your personal analytics
    | tracking id. You may also make use of the anonymize ip functionality.
    |
    */

    'google_analytics' => [
        'tracking_id' => env('GOOGLE_ANALYTICS_TRACKING_ID'),
        'anonymize_ip' => env('GOOGLE_ANALYTICS_ANONYMIZE_IP', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Iubenda Privacy Policy
    |--------------------------------------------------------------------------
    |
    | These options configure Iubenda. This service provides a privacy policy
    | based on all services which are used in your application.
    |
    */
    'iubenda' => [
        'privacy_policy_id' => env('IUBENDA_PRIVACY_POLICY_ID'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Convertkit Landing Page
    |--------------------------------------------------------------------------
    |
    | This id is the landing page id of the convertkit form which you created
    | on convertkit.com. This form is being used on the start landingpage
    | to get some email addresses in an early access phase.
    |
    */

    'convertkit' => [
        'landingpage_id' => env('CONVERKIT_LANDINGPAGE_ID')
    ],

];
