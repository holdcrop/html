<?php

return array(
    // Rate Limiting
    'rate_limiter'      => array(
        'limit'             => 1000,                        // Number of requests
        'duration'          => 60,                          // Duration for limit in seconds
        'storage_directory' => '/../../storage/rate_limits' // Directory to write rate limit counters
    ),
    // Accepted Request Methods
    'request_methods'   => array(
        'POST',
        'GET'
    ),
    // Headers
    'headers'           => array(
        'content-type'      => 'application/x-www-form-urlencoded'
    ),
    // Daft
    'daft'              => array(
        'api_key'           => '7a4783e30239df2f94befde667ebbb508c24abfb',
        'soap_client'       => array(
            'url'       => 'http://api.daft.ie/v3/wsdl.xml',
            'features'  => SOAP_SINGLE_ELEMENT_ARRAYS
        )
    )
);