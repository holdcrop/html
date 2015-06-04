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
        'content-type'      => 'application/json'
    )
);