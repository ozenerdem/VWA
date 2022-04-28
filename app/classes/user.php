<?php

class User{

    public static function Login($data){
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['user_name'] = $data['user_name'];
    }

    public static function userExist($username){
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE user_name = :username');
        $query->execute([
            'username' => $username
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function Register($data){
        global $db;
        $query = $db->prepare('INSERT INTO users SET user_name = :username, user_url = :url, user_password = :password');
        return $query->execute($data);
    }
}