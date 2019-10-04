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
        <a href="scan"><img src="images/back-white.png" alt=""></a>
        <a href="map"><img src="images/logo.png" alt=""></a>
        <a href="map"></a>
    </nav>
    <div class="container">
        <h1>Sign up</h1>
        <form id="frmRegister">
            <input name="txtFirtstName" id="txtFirstName" type="text" placeholder="Your first name">
            <input name="txtLastName" id="txtLastName" type="text" placeholder="Your last name">
            <input name="txtSignupEmail" id="txtSignupEmail" type="text" placeholder="Email *" value="">
            <input name="password" id="password" type="password" placeholder="Password*" value="">
            <input name="confirmPassword" id="confirmPassword" type="password" placeholder="Type password again*" value="">
            <button class="frmButton">Sign up</button>
        </form>
    </div>
    <a href="signup">Signup</a>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="js/register.js"></script>

</div>
</body>
</html>