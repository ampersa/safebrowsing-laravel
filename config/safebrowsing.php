<?php

return [

    /*
    * Valid Google SafeBrowsing API key
    */
    'api_key' => env('SAFEBROWSING_API_KEY', ''),

    /*
     * An array of options to fom the API payload
     */
    'options' => [
        'threatTypes' => [
            'MALWARE',
            'SOCIAL_ENGINEERING',
            'UNWANTED_SOFTWARE',
            'POTENTIALLY_HARMFUL_APPLICATION',
        ],
        'platformTypes' => [
            'ANY_PLATFORM',
        ],
    ],

];
