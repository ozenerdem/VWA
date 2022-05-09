<?php

$db_host = 'localhost';
$db_username = 'root';
$db_password = 'root';
$db_database = 'sezi';

$connect = @mysqli_connect($db_host, $db_username, $db_password, $db_database) or die('Connection error: ' . mysqli_connect_error());

if (isset($_GET['submit'])) {

    // Retrieve data

    $id = $_GET['id'];
    $getid = "SELECT user_name, user_rank FROM users WHERE user_id = '$id'";
    $result = mysqli_query($connect, $getid); // Removed 'or die' to suppres mysql errors
    $exists = false;
    if ($result !== false) {
        try {
            $exists = (mysqli_num_rows( $result ) > 0);
        } catch(Exception $e) {
            $exists = false;
        }
    }

    $num = @mysqli_numrows($result); // The '@' character suppresses errors making the injection 'blind'

//    $i = 0;
//
//    while ($i < $num) {
//
//        $first = mysqli_result($result,$i,"user_name");
//        $last = mysqli_result($result,$i,"user_rank");
//
//        echo '<pre>';
//        echo 'ID: ' . $id . '<br>First name: ' . $first . '<br>Surname: ' . $last;
//        echo '</pre>';
//
//        $i++;
//    }
}


require view('blindsql');

?>