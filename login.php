<?php

require_once __DIR__.'/top.php'; 
?>
<div class="login-page">

    <div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div id='title'>
    <div><img class="logo" src="images/logo.png" alt=""></div>
    <div class="form-container login">

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
</body>
</html>
