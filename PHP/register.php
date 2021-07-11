<?php
    session_start();
    include_once 'config.php';
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);

    if(!empty($firstName) && !empty($lastName) && !empty($Email) && !empty($Password)){
        if(filter_var($Email, FILTER_VALIDATE_EMAIL)){
            $qry = mysqli_query($con, "SELECT Email from user where Email = '{$Email}'");
            if(mysqli_num_rows($qry) > 0){
                echo "$Email is already exist";
            } else {
                if(isset($_FILES["img"])){
                    $imageName = $_FILES["img"]["name"];
                    $imageType = $_FILES["img"]["type"];
                    $imageTmpName = $_FILES["img"]["tmp_name"];
                    $imageExplode = explode('.', $imageName);
                    $imageExt = end($imageExplode);
                    $enxantions = ["png", "jpeg", "jpg"];
                    if(in_array($imageExt, $enxantions) === true){
                        $time = time();
                        $imageNewName = $time.$imageName;
                        if(move_uploaded_file($imageTmpName, 'img/'.$imageNewName)){
                            $status = 'Online Now';
                            $unique_id = rand(time(), 10000000);
                            $qry2 = mysqli_query($con, "INSERT into user(unique_id, firstName, lastName, Email, Password, img, status) values({$unique_id}, '{$firstName}', '{$lastName}', '{$Email}', '{$Password}', '{$imageNewName}', '{$status}')");
                            if($qry2){
                                $qry3 = mysqli_query($con, "SELECT * from user where Email = '{$Email}'");
                                if(mysqli_num_rows($qry3) > 0){
                                    $row = mysqli_fetch_assoc($qry3);
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo 'OK';
                                }
                            } else {
                                echo 'Error !!!';
                            }
                        }

                    } else{
                        echo "image must be 'jpg' or 'png' or 'jpeg'";
                    }
                } else {
                    echo "upload an image please";
                }
            }
        } else {
            echo "$Email is not valid Email";
        }


    } else {
        echo 'Please fill in all fields';
    }





?>