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
        <a href="login"><img src="images/back-white.png" alt=""></a>
        <a href="map"></a>
    </nav>
    
        <h1>Sign up</h1>
        <div class="signup-page-wrapper">
        <div class="container">
            <form id="frmRegister">
                <h6>First name</h6>
                <input name="txtFirtstName" id="txtFirstName" type="text">
                <h6>Last name</h6>
                <input name="txtLastName" id="txtLastName" type="text">
                <h6>Email</h6>
                <input name="txtSignupEmail" id="txtSignupEmail" type="text" value="">
                <h6>Password</h6>
                <input name="password" id="password" type="password" value="">
                <h6>Confirm Password</h6>
                <input name="confirmPassword" id="confirmPassword" type="password" value="">
                <button class="frmButton">Sign up</button>
            </form>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="js/register.js"></script>

</div>
</body>
</html>