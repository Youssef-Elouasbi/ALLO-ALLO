<?php
    session_start();
    include_once 'config.php';
    $nameSearch = mysqli_real_escape_string($con, $_POST['nameSearch']);
    $result = '';
    $myId = $_SESSION['unique_id'];
    $qry = mysqli_query($con, "SELECT * from user where unique_id != $myId and (firstName like '%{$nameSearch}%' or lastName like '%{$nameSearch}%')");
    if(mysqli_num_rows($qry) > 0){
        include 'info.php';
    } else {
        $result .= 'Sorry Nothing found';
    }
    echo $result;
?>