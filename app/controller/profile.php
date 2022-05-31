<?php

$query = $db->query("SELECT * FROM users WHERE user_name='".$_SESSION['user_name']."'")->fetch(PDO::FETCH_ASSOC);

if(post('submit')){
    $arrange = $db->prepare("UPDATE users SET
    user_about=:user_about
    WHERE user_id={$_SESSION['user_id']}");
    $update=$arrange->execute([
        'user_about' => post('user_about')
    ]);

    if($update){
        $success = 'İşlem başarılı';
    }else {
        $error = 'Bir hata oluştu';
    }

    header('Refresh:1;url=' . site_url('profile'));

}

if($_SESSION){
    require view('profile');
}
else{
    ?>
    <script>alert('Lütfen giriş yapınız!')</script>
    <?php
    header('Refresh:0;url=' . site_url('login'));
}
?>