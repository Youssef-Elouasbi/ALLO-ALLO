<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="icon" href="logoChat4.png">
    <title>Forget Paswword</title>
</head>
<body>
    <main class="signUp signIn fPassword">
        <div class="header_form">
            <h1>Recover Password</h1>
        </div>
        <form action="">
            <div class="error">
                <p>This is an error</p>
            </div>
            
            <div class="input">
                <label for="Email">Email Address</label>
                <input type="email" name="Email" id="Email" placeholder="Email">
            </div>
            <div class="input">
                <label for="Password">New Password</label>
                <input type="password" name="NewPassword" id="Password" placeholder="New Password">
                <i class="showPass far fa-eye"></i>
            </div>
            <input type="submit" value="Change Password">
            <p>You don't have an account ?<a href="index.php"> Sign up</a></p>
            
        </form>
    </main>
</body>
<script src="js/app.js"></script>
<!-- <script src="js/signin.js"></script> -->
<script src="js/fPassword.js"></script>
</html>