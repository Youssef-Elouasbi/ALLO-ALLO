<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once 'config.php';
        $userId = mysqli_real_escape_string($con, $_GET['userId']);
        if(isset($userId)){
            $sts = 'Offline Now';
            $qry = mysqli_query($con, "UPDATE user set status = '{$sts}' where unique_id = {$userId}");
            if($qry){
                session_unset();
                session_destroy();
                header('Location: ../Signin.php');
                // $t = mysqli_query($con, "SELECT * from user where unique_id = {$userId}");
                // $tt = mysqli_fetch_assoc($t);
                // echo  $tt['status'];
            }
        } else {
            header('Location: ../account.php');
        }
    } else {
        header('Location: ../Signin.php');
        echo mysqli_error($con);
    }
    

?>