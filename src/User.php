<?php

namespace app;

class User
{
    public $email;
    public $photoUrl;
    public $displayName;
    private $password = 111;
    private static $tableName = 'user';
    private $pdo;

    public function __construct($data)
    {
        $this->email = $data['email'];
        $this->photoUrl = $data['photoUrl'];
        $this->displayName = $data['displayName'];
        $this->pdo = Db::getPdo();
    }

    public static function loadUserFromSession()
    {
        if (isset($_SESSION['user'])) {
            return new self([
                'email' => $_SESSION['user']['email'],
                'photoUrl' => $_SESSION['user']['photoUrl'],
                'displayName' => $_SESSION['user']['displayName'],
            ]);
        }

        return false;
    }

    public function saveToSession()
    {
        $_SESSION['user'] = [
            'email' => $this->email,
            'photoUrl' => $this->photoUrl,
            'displayName' => $this->displayName
        ];
    }

    public function exists()
    {
        $sql = 'SELECT 1 FROM user WHERE email=?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$this->email]);
        return $stmt->fetch();
    }

    public function save()
    {
        $sql = 'INSERT INTO `user` (email, password, displayName, photoUrl) VALUES(?, ?, ?, ?)';
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$this->email, $this->password, $this->displayName, $this->photoUrl]);
    }

    public function logout()
    {
        unset($_SESSION['user']);
    }

    public static function findByEmail($email)
    {
        $sql = 'SELECT * FROM `' . self::$tableName . '` WHERE email = ?';
        $pdo = Db::getPdo();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);

        $data =  $stmt->fetch();
        if (empty($data)) return null;

        return new self(['email' => $data['email'], 'photoUrl' => $data['photoUrl'], 'displayName' => $data['displayName']]);
    }
}