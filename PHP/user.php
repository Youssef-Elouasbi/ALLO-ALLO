<?php
    session_start();
    include_once 'config.php';
    $result = "";
    $myId = $_SESSION['unique_id'];
    $qry = mysqli_query($con, "SELECT * from user where unique_id != $myId");
    if(mysqli_num_rows($qry) == 1){
        $result .= "No one to chat with it";
    } else if(mysqli_num_rows($qry) > 0){
        include 'info.php';
    }
    echo $result;
?>