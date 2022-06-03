<?php

if(isset($_GET['word'])){
    $filename = $_GET['word'];
    $flag = include $filename;
    if($flag){
        $success = $_GET['word'] . " site içerisinde mevcut.";
    }else{
        $error = "Kelime site içerisinde bulunamadı";
    }
}
require view('dirTraversal');


//$page = $_GET['page'];
//
//echo file_get_contents(URL . $page .'.php');
