<?php

require 'vendor/autoload.php';

$hybrid = new Hybrid_Auth('config.php');
$provider = 'Google';

$adapter = $hybrid->authenticate($provider);
$user_profile = $adapter->getUserProfile();
var_dump($user_profile);