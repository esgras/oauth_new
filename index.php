<?php
use app\AuthService;
use app\User;
use app\Request;
use app\Db;

session_start();

require 'vendor/autoload.php';

$user = User::findByEmail('vaynnorg@gmail.com');

$user = \app\User::loadUserFromSession();
$uri = trim($_SERVER['REQUEST_URI'], '/');
$pdo = Db::getPdo();

if ($uri == 'login' && $user == NULL) {
    $errors['email'] = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = User::findByEmail( $_POST['email']);
        if ($user != NULL) {
            $user->saveToSession();
            Request::redirect('/');
        } else {
            $errors['email'] = 'Wrong email';
        }
    }


    include_once 'templates/login.php';
    exit;
} elseif ($uri == 'oauth' && $user == NULL) {
    $data = (new \app\AuthService())->authenticate();
    $user = new \app\ User([
        'email' => $data->email,
        'photoUrl' => $data->photoURL,
        'displayName' => $data->displayName
    ]);

    if (!$user->exists()) {
        $user->save();
    }
    
    $user->saveToSession();
    Request::redirect('/');
} elseif ($uri == 'logout' && $user) {
    $user->logout();
    Request::redirect('/');
}


include_once 'templates/view.php';