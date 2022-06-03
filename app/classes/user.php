<?php

class User{

    public static function Login($data){
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['user_name'] = $data['user_name'];
        $_SESSION['user_rank'] = $data['user_rank'];
        $_SESSION['user_about'] = $data['user_about'];

        // Login loglama işlemi
        $logs = $_SESSION['user_id'] . " \t\t\t- " . $_SESSION['user_name'] . " \t- " . user_ranks($_SESSION['user_rank']) .
            " \t- " . $_SERVER["REMOTE_ADDR"] . " \t\t- " . session_id() . "\t\t-" . date('Y-m-d H:i:s') . "\n";
        $addLog = fopen('logFiles/login.txt', 'a');
        fwrite($addLog, $logs);
        fclose($addLog);
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

//    public static function updatePassword($data){
//        global $db;
//        $query = $db->prepare('UPDATE users set user_password = :password WHERE user_id = :user_id');
//        return $query->execute($password);
//    }

}