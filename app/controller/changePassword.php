<?php

$meta = [
    'title' => 'Şifre Değiştir'
];

if (post('submit')){
    //$current_password = $_GET['current_password'];
    $password = post('password');
    $password_again = post('password_again');
    $user_id = $_SESSION['user_id'];

    //kullanıcı bilgilerini getir
//    $query = $db->prepare('SELECT * FROM users WHERE user_id = :user_id');
//    $query->execute([
//        'user_id' => $user_id
//    ]);
//    $result = $query->fetch(PDO::FETCH_ASSOC);

//    if(!$current_password || !$password || !$password_again){
//        $error = 'Lütfen boş alan bırakmayınız';
    if(!$password || !$password_again){
        $error = 'Lütfen boş alan bırakmayınız';
    }elseif($password!=$password_again){
        $error = 'Girdiğiniz şifreler birbiriyle uyuşmuyor';
//    }elseif($current_password!=$result['user_password']){
//        $error = 'Girdiğiniz parola hatalı!';
    }else{
        //parolayı güncelle
//            $result = User::updatePassword([
//               'password' => $password
//            ]);
        $query = $db->prepare('UPDATE users set user_password = ? WHERE user_id = ?');
        $result = $query->execute([$password, $user_id]);
        if($result){
            $success = 'Şifreniz başarıyla değiştirildi.';
            //header('Refresh:2;url=' . site_url());
        }else{
            $error = 'Bir sorun oluştu, lütfen daha sonra tekrar deneyin';
        }
    }

}
if($_SESSION){
    require view('changePassword');
}
else{
    ?>
    <script>alert('Lütfen giriş yapınız!')</script>
    <?php
    header('Refresh:0;url=' . site_url('login'));
}

?>