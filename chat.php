<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header('Location: Signin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="icon" href="logoChat4.png">
    <title>Chat</title>
</head>
<body>
    <main class="Chat">
        <header>
            <?php
                include_once 'PHP/config.php';
                $id = mysqli_real_escape_string($con, $_GET['user_id']);
                $qry = mysqli_query($con, "SELECT * from user where unique_id = {$id}");
                if(mysqli_num_rows($qry) > 0){
                    $row = mysqli_fetch_assoc($qry);
                }
            ?>
            <a href="account.php"><i class="fas fa-arrow-left"></i></a>
            <div class="Profile">
                <div class="Logo">
                    <img src="PHP/img/<?php echo $row['img']?>" alt="">
                </div>
                <div class="info">
                    <h3><?php echo ucwords($row["firstName"]) . " " . ucwords($row["lastName"]) ?></h3>
                    <p><?php echo $row['status']?></p>
                </div>
            </div>
        </header>
        <div class="box">
            <!-- <div class="out">
            <button class="delete">Delete</button>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, tenetur.</p>
            </div>
            <div class="incom">
                <div class="logo_chat">
                    <img src="2.png">
                </div>
                <p>test</p>
            </div>
            <div class="out">
            <button class="delete">Delete</button>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, tenetur.</p>
            </div>
            <div class="out">
                <button class="delete">Delete</button>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, tenetur.</p>
            </div> -->
        </div>
        <form action="#" class="send">
            <input type="text" name="sentMessage" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
            <input type="text" name="receiveMessage" value="<?php echo $id; ?>" hidden>
            <input type="text" name="message" placeholder="Send a message..." class="inputSent">
            <button><i class="fab fa-telegram-plane"></i></button>
        </form>
    </main>
</body>
<script src="js/chat.js"></script>
</html>