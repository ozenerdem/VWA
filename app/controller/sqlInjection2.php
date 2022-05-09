<?php


$meta = [
    'title' => 'SQL Injection2'
];

$db_host = 'localhost';
$db_username = 'root';
$db_password = 'root';
$db_database = 'sezi';

$connect = @mysqli_connect($db_host, $db_username, $db_password, $db_database) or die('Connection error: ' . mysqli_connect_error());

$username = $_POST['username'];
$password = $_POST['password'];

if ($_POST['submit']) {

    if (!username || !$password) {
        $error = 'Lütfen boş alan bırakmayınız';
    } else {
        //üye var mı kontrol et
        $query =  "SELECT * FROM users WHERE user_name='" . $username . "' AND user_password='" . $password . "'";
//        $query = "SELECT * FROM users WHERE user_name = '" . $_POST['username'] . "'";
        $result = @mysqli_query($connect, $query);
        $row = mysqli_fetch_array($result);
        //print_r($row);

        if ($row) {
            $success = 'Başarıyla giriş yaptınız, yönlendiriliyorsunuz';
            User::Login($row);
            header('Refresh:2;url=' . site_url());
        } else {
            $error = 'Kullanıcı adı veya şifreniz hatalı!';
        }
    }
}

require view('sqlInjection2');