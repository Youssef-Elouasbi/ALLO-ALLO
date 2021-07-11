<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once 'config.php';
        $sent = mysqli_real_escape_string($con, $_POST['sentMessage']);
        $receivesage = mysqli_real_escape_string($con, $_POST['receiveMessage']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
        if(!empty($message)){
            $qry = mysqli_query($con, "INSERT into message (incomMsg, outcomMsg, content) values({$receivesage}, {$sent}, '{$message}')") or die();
        }
    } else {
        header('Location: Signin.php');
    }

?>