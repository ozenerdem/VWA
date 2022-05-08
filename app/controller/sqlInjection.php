<?php


$meta = [
    'title' => 'SQL Injection'
];

$username = $_POST['username'];
$password = $_POST['password'];

if ($_POST['submit']) {

    if (!username || !$password) {
        $error = 'Lütfen boş alan bırakmayınız';
    } else {
        //üye var mı kontrol et
        $query = $db->prepare("SELECT * FROM users WHERE user_name='$username' AND user_password='$password'");
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
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

//if ($_POST['submit']) {
//
//    if (!username || !$password) {
//        $error = 'Lütfen boş alan bırakmayınız';
//    } else {
//        //üye var mı kontrol et
//        $query = $db->prepare("SELECT * FROM users WHERE user_name='$username' AND user_password='$password'");
//        $query->execute();
//        $row = $query->fetch(PDO::FETCH_ASSOC);
//        print_r($row);
//
//        if ($row) {
//            $success = 'Başarıyla giriş yaptınız, yönlendiriliyorsunuz';
//            User::Login($row);
//            header('Refresh:2;url=' . site_url());
//        } else {
//            $error = 'Kullanıcı adı veya şifreniz hatalı!';
//        }
//    }
//}

require view('sqlInjection');

?>