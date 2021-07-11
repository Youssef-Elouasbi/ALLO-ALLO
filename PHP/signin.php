<?php
    session_start();
    include_once 'config.php';
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);
    if(!empty($Email) && !empty($Password)){
        $qeury = mysqli_query($con, "SELECT * from user where Email = '{$Email}' and Password = '{$Password}'");
        if(mysqli_num_rows($qeury) > 0){
                $row = mysqli_fetch_assoc($qeury);
                $sts = 'Online Now';
                $qry = mysqli_query($con, "UPDATE user set status = '{$sts}' where unique_id = {$row['unique_id']}");
                if($qry){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo 'OK';
                }
            }
        else {
            echo 'Email or Password is wrong';
        }
    } else {
        echo 'Please fill in all fields';
    }
?>