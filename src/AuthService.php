<?php

namespace app;

class AuthService
{
    private static $config = [
        "base_url" => "http://oauth.app/hybrid.php",

        "providers" => [
            "Google" => [
                "enabled" => true,
                #'redirect_uri' => 'http://oauth.my/hybrid.php',
                "keys"    => [
                    "id" => "955280419454-c299lmgdcoplfrgef77g35q1d8t4nqgu.apps.googleusercontent.com",
                    "secret" => "6UPBS1-Iie7EHZKRBquXCfeZ"
                ],
            ]
        ]
    ];

    public function authenticate()
    {
        $hybrid = new \Hybrid_Auth(self::$config);
        $provider = 'Google';

        $adapter = $hybrid->authenticate($provider);
        $user = $adapter->getUserProfile();
        return $user;
    }
}