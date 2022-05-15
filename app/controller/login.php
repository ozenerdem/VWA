<?php

$meta = [
    'title' => 'Giriş Yap'
];

if (post('submit')){
    $username = post('username');
    $password = post('password');

    if(!username || !$password){
        $error = 'Lütfen boş alan bırakmayınız';
    }else{
        //üye var mı kontrol et
        $query = $db->prepare('SELECT * FROM users WHERE user_name = :username AND user_password= :password');
        $query->execute([
           'username' => $username,
           'password' => $password
        ]);
        $row = $query->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $success = 'Başarıyla giriş yaptınız, yönlendiriliyorsunuz';
            User::Login($row);
            header('Refresh:2;url=' . site_url());
            //header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER']: site_url()));
        } else {
            $error = 'Kullanıcı adı veya şifreniz hatalı!';
        }


//        if($row){
//            $password_verify = password_verify($password, $row['user_password']);
//            if($password_verify){
//                $success = 'Başarıyla giriş yaptınız, yönlendiriliyorsunuz';
//                User::Login($row);
//                header('Refresh:2;url=' . site_url());
//            }else{
//                $error = 'Kullanıcı adı veya şifreniz hatalı!';
//            }
//        }else{
//            $error = 'Kullanıcı adı veya şifreniz hatalı!';
//        }
    }
}

require view('login');