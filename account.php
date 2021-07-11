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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="icon" href="logoChat4.png">
    <title>Sign In</title>
</head>
<body>
    <main class="Account">
        <header>
            <?php
                include_once 'PHP/config.php';
                $qry = mysqli_query($con, "SELECT * from user where unique_id = {$_SESSION['unique_id']}");
                if(mysqli_num_rows($qry) > 0){
                    $row = mysqli_fetch_assoc($qry);
                }
            ?>
            <div class="Profile">
                <div class="Logo">
                    <img src="PHP/img/<?php echo $row['img']?>" alt="">
                </div>
                <div class="info">
                    <h3><?php echo ucwords($row["firstName"]) . " " . ucwords($row["lastName"]) ?></h3>
                    <p><?php echo $row['status']?></p>
                </div>
            </div>
            <a href="PHP/signout.php?userId=<?php echo $_SESSION['unique_id']?>">Logout</a>
        </header>
        <div class="search">
            <p>Search Someone To Chat</p>
            <input type="text" placeholder="Search...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="ListUser">
            <!-- <a href="#">
                <div class="ProfileUser">
                    <div class="Logo">
                        <img src="2.png" alt="">
                    </div>
                    <div class="info">
                        <h3>Youssef Elouasbi</h3>
                        <p>Online Now</p>
                    </div>
                </div>
                <div class="dot"></div>
            </a> -->
            
        </div>
        
    </main>
</body>
    <script src="js/SearchBar.js"></script>
    <script src="js/account.js"></script>
</html>