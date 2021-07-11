<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="icon" href="logoChat4.png">
    <title>Allo Allo</title>
</head>
<body>
    <main class="signUp">
        <div class="header_form">
            <h1>Sign Up</h1>
        </div>
        <form action="#" enctype="multipart/form-data">
            <div class="error">
                <p></p>
            </div>
            <div class="input">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" placeholder="First Name">
            </div>
            <div class="input">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" placeholder="Last Name">
            </div>
            <div class="input">
                <label for="Email">Email Adress</label>
                <input type="email" name="Email" id="Email" placeholder="Email">
            </div>
            <div class="input">
                <label for="Password">Password</label>
                <input type="password" name="Password" id="Password" placeholder="Password">
                <i class="showPass far fa-eye"></i>
            </div>
            <div class="input">
                <label>Upload Image</label>
                <input type="file" name="img">
            </div>
            <input type="submit" value="Sign Up">
            <p>You have already an account ?<a href="Signin.php"> Sign in</a></p>
        </form>
    </main>
</body>
    <script src="js/app.js"></script>
    <script src="js/register.js"></script>
</html>