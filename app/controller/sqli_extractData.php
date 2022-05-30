<?php

try{
    $query = $db->query("SELECT * FROM users WHERE user_name='".$_GET['username']."'");
    $row2 = $db->query("SELECT * FROM users WHERE user_name='".$_GET['username']."'")->fetch(PDO::FETCH_ASSOC);
}catch (PDOException $e){
    $error = "Hatalı giriş yaptınız";
}

if($_GET AND !$row2){
    $error = "Hatalı giriş yaptınız";
}

require view('sqli_extractData');


//if($_GET AND !$query){
//    $error = "Hatalı giriş yaptınız";
//}

//$query = $db->query("SELECT * FROM users WHERE user_name='".$_GET['username']."'")->fetch(PDO::FETCH_ASSOC);