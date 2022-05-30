<?php

$meta = [
    'title' => 'File Upload'
];

$getFile=$_FILES['fileUpload'];
$fileName=$getFile['name'];
$fileType=$getFile['type'];
$fileSize=$getFile['size'];
$fileTempName=$getFile['tmp_name'];


$myPath='public/easy/uploads/'.$fileName;
if($_POST['submit']) {
    if(move_uploaded_file($fileTempName, $myPath)){
        $success = "Dosya başarılı bir şekilde yüklendi.";
    }else{
        $error = 'Dosya yüklenirken bir hata oluştu';
    }
}

require view('fileUpload');

//$myPath='/Applications/MAMP/htdocs/site/public/easy/uploads/'.$fileName;