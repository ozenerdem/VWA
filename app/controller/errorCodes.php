<?php

try {
    $query = $db->query("SELECT * FROM users WHERE user_name='" . $_GET['username'] . "'")->fetch(PDO::FETCH_ASSOC);
    if($query){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
} catch (PDOException $e) {
    $fault = $e->getMessage();
}



if ($_GET and !$query and !$fault) {
    $error = "Hatalı giriş yaptınız";
}

//if($_GET){
//    ini_set('display_errors', 1);
//    ini_set('display_startup_errors', 1);
//    error_reporting(E_ALL);
//}

//$number1=10;
//$number2=0;
//echo $number1/$number2;
//
//print_r(error_get_last());

require view('errorCodes');