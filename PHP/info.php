<?php
    while($row = mysqli_fetch_assoc($qry)){
        $qry2 = "SELECT * from message where (incomMsg = {$row['unique_id']} or outcomMsg = {$row['unique_id']}) and (incomMsg = {$myId} or outcomMsg = {$myId}) order by id desc limit 1 ";
        $run = mysqli_query($con, $qry2);
        $row2 = mysqli_fetch_assoc($run);
        if(mysqli_num_rows($run) > 0){
            $rslt = $row2['content'];
        } else {
            $rslt = 'There are no messages';
        }
        $before = '';
        if(isset($row2['outcomMsg'])){
            if($myId == $row2['outcomMsg']){
                $before = 'You: ';
            }
        }
        (strlen($rslt) > 40) ? $message = substr($rslt, 0, 40) . '...': $message = $rslt;
        if($row['status'] == 'Offline Now'){
            $notActive = ' offline';
        } else {
            $notActive = '';
        }
        $result .= '<a href="chat.php?user_id='.$row['unique_id'].'">
                    <div class="ProfileUser">
                    <div class="Logo">
                    <img src="PHP/img/'.$row['img'].'" alt="">
                    </div>
                    <div class="info">
                    <h3>' . ucwords($row["firstName"]) . " " . ucwords($row["lastName"]) . '</h3>
                    <p>'.$before . $message .'</p>
                    </div>
                    </div>
                    <div class="dot'.$notActive.'"></div>
                    </a>';
    }
?>