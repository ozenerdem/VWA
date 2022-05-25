<?php

$query = $db->query("SELECT * FROM users WHERE user_name='".$_SESSION['user_name']."'")->fetch(PDO::FETCH_ASSOC);
$query2 = $db->query("SELECT user_id FROM users WHERE user_id='".$_POST['user_id']."'")->fetch(PDO::FETCH_ASSOC);
//$query = $db->query("SELECT * FROM users WHERE user_name='".$_GET['user_name']."'");
//$row2 = $db->query("SELECT * FROM users WHERE user_name='".$_GET['user_name']."'")->fetch(PDO::FETCH_ASSOC);

//print_r($_SESSION['user_id']);

//if($_GET AND !$query){
//    $error = "Hatalı giriş yaptınız";
//}

//if($_GET AND !$row2){
//    $error = "Hatalı giriş yaptınız";
//}
if(isset($_POST['submit'])){
    $arrange = $db->prepare("UPDATE users SET
    user_about=:user_about
    WHERE user_id={$_POST['user_id']}");
    $update=$arrange->execute([
        'user_about' => $_POST['user_about']
    ]);

    if($query2){
        $success = 'İşlem başarılı';
    }else {
        $error = 'Bir hata oluştu';
    }

header('Refresh:2;url=' . site_url('idor'));

}


if($_SESSION){
    require view('idor');
}
else{
    ?>
    <script>alert('Lütfen giriş yapınız!')</script>
    <?php
    header('Refresh:0;url=' . site_url('login'));
}
?>



