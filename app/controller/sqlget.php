<?php

$query = $db->query("SELECT * FROM users WHERE user_name='".$_GET['username']."'")->fetch(PDO::FETCH_ASSOC);

if($_GET AND !$query){
    $error = "Hatalı giriş yaptınız";
}


require view('sqlget');