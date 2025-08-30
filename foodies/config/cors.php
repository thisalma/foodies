<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:3000', 'http://127.0.0.1:8000', 'http://10.0.2.2:8000'],
    'allowed_headers' => ['*'],
    'supports_credentials' => true,
];
