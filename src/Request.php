<?php

namespace app;

class Request
{
    public static function redirect($uri)
    {
        header('Location: ' . $uri);
        die;
    }
}