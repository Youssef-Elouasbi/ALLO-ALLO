<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once 'config.php';
        $sent = mysqli_real_escape_string($con, $_POST['sentMessage']);
        $receivesage = mysqli_real_escape_string($con, $_POST['receiveMessage']);
        $result = '';
        $qry = mysqli_query($con, "SELECT * from message where (incomMsg = {$receivesage} and outcomMsg = {$sent}) or (outcomMsg = {$receivesage} and incomMsg = {$sent}) order by id");
        $qry2 = mysqli_query($con, "SELECT * from user where unique_id = {$receivesage}");
        $row2 = mysqli_fetch_assoc($qry2);
        if(mysqli_num_rows($qry) > 0){
            while($row = mysqli_fetch_assoc($qry)){
                if($row['incomMsg'] === $receivesage){
                    $result .= '<div class="out">
                                <button class="delete remove">Delete</button>
                                <p id="'.$row['id'].'">'.$row['content'].'</p>
                                </div>';
                } else {
                    $result .= '<div class="incom">
                                <div class="logo_chat">
                                <img src="PHP/img/'. $row2['img'].'" alt="">
                                </div>
                                <p>'.$row['content'].'</p>
                                </div>';
                                
                }
            }
        }
    } else {
        header('Location: Signin.php');
    }
    echo $result;

?>