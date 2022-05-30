<?php
$meta = [
    'title' => 'Broken Authentication - Login Form'
];

if ($_POST['submit']) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!$username || !$password) {
        $error = 'Lütfen boş alan bırakmayınız';
    } else {
        $query = $db->prepare('SELECT * FROM users WHERE user_name = :username AND user_password= :password');
        $query->execute([
            'username' => $username,
            'password' => $password
        ]);
        if($query){
            $username = trim($username);
            $query2 = $db->prepare('SELECT * FROM users WHERE user_name = :username ');
            $query2->execute([
                'username' => $username
            ]);
        }

        $row = $query2->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $success = 'Başarıyla giriş yaptınız, yönlendiriliyorsunuz';
            User::Login($row);
            header('Refresh:2;url=' . site_url());

        } else {
            $error = 'Kullanıcı adı veya şifreniz hatalı!';
        }
    }
}

require view('brokenAuth');


//header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER']: site_url()));