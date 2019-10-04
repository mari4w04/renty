<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/white-theme.css">
    <link rel="stylesheet" href="css/overall-style.css">
    <title>Renty</title>
</head>
<body>
<div class="page">

    <div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<nav>
        <a href="scan"><img src="images/back-white.png" alt=""></a>
    </nav>
    <!-- <div><img class="logo" src="images/logo.png" alt=""></div> -->
    
    <div class="login-page-wrapper">
        <h1>Log in</h1>
            <div class="container login">
            
            <form id="frmLogin" method="POST">
                <label for=""><h5>Email</h5></label>
                <input name="txtLoginEmail" type="text">
                <label for=""><h5 id="password-label">Password</h5></label>
                <input name="txtLoginPassword" type="password">
                <button id="login-btn">Login</button>
                <a class="form-link" href="signup">Sign up</a>
            </form>
        </div>
    </div>
</div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/login.js"></script>
    </div>
</body>
</html>
