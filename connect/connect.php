<?php
    $host = "localhost";
    $user = "k5249";
    $pass = "kimklh1009!%"; 
    $db = "k5249";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");
    
    // if(mysqli_connect_errno()){
    //     echo "Database Connect False";
    // } else {
    //     echo "Database Connect True";
    // }
?>