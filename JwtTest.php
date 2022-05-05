<?php
    // Header
    $header = [
        "alg" => "HS256",
        "typ" => "JWT"
    ];

    // payload
    $payload = [
        "username" => "Khalid004",
        "roles" => [
            "role_admin" => "FALSE",
            "role_user" => "TRUE"
        ],
    ];

    $token = new JWT();

    echo $token->generate($header, $payload, SECRET, 60);

    // echo "<br>";

    const TOKEN = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6IktoYWxpZDAwNCIsInJvbGVzIjp7InJvbGVfYWRtaW4iOiJGQUxTRSIsInJvbGVfdXNlciI6IlRSVUUifSwiaWF0IjoxNjUxNzgyNTY1LCJleHAiOjE2NTE3ODI2MjV9.MtQTrx4SA6HTzwT7sOdWO4kZ8oyhj_B8Y-rS_ceM-dU';

    var_dump($token->isExpired(TOKEN, SECRET));