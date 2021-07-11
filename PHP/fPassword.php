<?php
    include_once 'config.php';
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $newPass = mysqli_real_escape_string($con, $_POST['NewPassword']);
    if(!empty($Email) && !empty($newPass)){
        if(filter_var($Email, FILTER_VALIDATE_EMAIL)){
            $qry = mysqli_query($con, "SELECT Email from user where Email like '{$Email}'");
            if(mysqli_num_rows($qry) > 0){
                $qry2 = mysqli_query($con, "UPDATE user set Password = '{$newPass}' where Email like '{$Email}'");
                echo 'changed';
            }  else {
                echo "$email is not exist";
            }
        } else {
            echo "$email is not valid";
        }
    }
    else {
        echo 'Please fill in all fields';
    }

?>