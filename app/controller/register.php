<?php

$meta = [
  'title' => 'Kayıt Ol'
];

if (post('submit')){
    $username = post('username');
    $password = post('password');
    $password_again = post('password_again');

    if(!username || !$password || !$password_again){
        $error = 'Lütfen boş alan bırakmayınız';
    }elseif($password!=$password_again){
        $error = 'Girdiğiniz şifreler birbiriyle uyuşmuyor';
    }else{
        //üyelik kontrolü
        $row = User::userExist($username);
        if($row){
            $error = 'Lütfen farklı bir kullanıcı adı seçiniz.';
        }else{
            //üyeyi ekle
            $result = User::Register([
               'username' => $username,
               'url' => permalink($username),
               'password' => password_hash($password, PASSWORD_DEFAULT)
            ]);
            if($result){
                $success = 'Üyeliğiniz başarıyla oluşturuldu';
                User::Login([
                    'user_id' => $db->lastInsertId(),
                    'user_name' => $username
                ]);
                header('Refresh:2;url=' . site_url());
            }else{
                $error = 'Bir sorun oluştu, lütfen daha sonra tekrar deneyin';
            }
        }
    }
}

require view('register');