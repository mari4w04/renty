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
    <title>Renty</title>
</head>
<body>
<div class="page">

    <div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<nav>
        <a href="login">Login</a>
        <div class="line-separator"></div>
        <a href="signup">Signup</a>
    </nav>
    <div><img class="logo" src="images/logo.png" alt=""></div>
    <div class="container login">

        <h1>Login</h1>
        
        <form id="frmLogin" method="POST">
            <input name="txtLoginEmail" type="text" placeholder="Your Email" >
            <input name="txtLoginPassword" type="password" placeholder="password">
            <button>Login</button>
        </form>
    </div>
</div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/login.js"></script>
    </div>
</body>
</html>
