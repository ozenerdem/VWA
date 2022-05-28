<?php
$meta = [
    'title' => 'Broken Authentication - Register Form'
];

if ($_GET['submit']) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    $password_again = $_GET['password_again'];

    if (!$username || !$password || !$password_again) {
        $error = 'Lütfen boş alan bırakmayınız';
    } elseif ($password != $password_again) {
        $error = 'Girdiğiniz şifreler birbiriyle uyuşmuyor';
    } else {
        //üyelik kontrolü
        $row = User::userExist($username);
        if ($row) {
            $error = 'Lütfen farklı bir kullanıcı adı seçiniz.';
        } else {
            //üyeyi ekle
            $result = User::Register([
                'username' => $username,
                'url' => $username,
                'password' => $password
            ]);
            if ($result) {
                $success = 'Üyeliğiniz başarıyla oluşturuldu';
                User::Login([
                    'user_id' => $db->lastInsertId(),
                    'user_name' => $username
                ]);
                header('Refresh:2;url=' . site_url());
            } else {
                $error = 'Bir sorun oluştu, lütfen daha sonra tekrar deneyin';
            }
        }
    }
}

require view('brokenAuth_register');