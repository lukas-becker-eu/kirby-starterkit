<?php

require __DIR__ . '/kirby/bootstrap.php';

echo (new Kirby([
    'server' => [
        'SERVER_NAME' => $_SERVER['HTTP_DISGUISED_HOST'],
        'HTTPS' => $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https'
    ]
]))->render();
