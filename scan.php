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
        <img src="images/back-white.png" alt="">
        <img src="images/logo.png" alt="">
        <div>Logout</div>
    </nav>

    <h1>UNLOCK BIKE</h1>
    <div id="unlockSection">

        <div id="plateNumber">
            <h2>Enter plate number</h2>
            <input type="text" name="plateNumber" id="plateNumber">
            <button id="unlockBtn">UNLOCK</button>
        </div>
        
    
        <div id="qrCode">
            <h2>Enable camera</h2>
            <p>Renty will use your camera to scan the QR code</p>
            <button id="enableCamera">Enable camera access</div>
        </div>

        <div id="chooseSection">
            <div id="chooseScan" class="choose"><img id="qrCodePng" src="images/qrcode.png" alt=""></div>
            <div id="choosePlate" class="choose">PLATE NUMBER</div>
        </div>


    </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>

        $('#plateNumber').hide();

        $('#chooseScan').on('click', function(){
            $('#plateNumber').hide();
            $('#qrCode').show();
        });

        $('#choosePlate').on('click', function(){
            $('#plateNumber').show();
            $('#qrCode').hide();
        });

        $('#unlockBtn').on('click', function(){
            console.log('clicked on unlock');
        });
    </script>

</body>
</html>