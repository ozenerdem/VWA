<?php

$meta = [
    'title' => 'XSS Stored'
];

if($_POST['submit']){

    $sender_name = $_POST['name'];
    $message_subject = $_POST['subject'];
    $message = $_POST['message'];

    if(!$sender_name || !$message_subject || !$message){
        $error = 'Lütfen boş alan bırakmayınız!';
    }else{
        $query = "INSERT INTO guestbook(sender_name, message_subject, message) VALUES ('$sender_name', '$message_subject', '$message')";
        $row = $db->query($query);
        if($row){
            $success = 'Yorumunuz başarıyla gönderildi';
        }else{
            $error = 'Bir hata oluştu!';
        }
    }
}

$query = $db->from('guestbook')
    ->select('sender_name, message_subject, message, message_date')
    ->groupBy('message_id')
    ->orderBy('message_id', 'DESC')
    ->all();



//$query = "SELECT * from guestbook";
//$row = $db->query($query)->fetch(PDO::FETCH_ASSOC);



//echo '<h2>YORUMLAR</h2>';
//if($run){
//    foreach ($run as $row){
//        echo $row['message'];
//    }
//}

require view('xssStored');
