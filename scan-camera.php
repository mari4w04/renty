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
<div class="page" id="cameraBg">
    <nav> 
    <a href="scan"><img src="images/back-white.png" alt=""></a>
    </nav>

    <div id="unlockSection">
    <div id="chooseSection">
            <a href="scan-camera"><div id="chooseScan" class="choose"><img id="qrCodePng" src="images/qr.png" alt=""></div></a>
            <div id="choosePlate" class="choose"><img id="keyboardCode" src="images/code.png" alt=""></div>
        </div>

        <div id="plateNumber">
            <h2>Enter code </h2>
            <input type="text" name="plateNumber" id="plateNumber">
            <a href='ride-start.php'><button id="unlockBtn">Unlock</button></a>
        </div>
        
        <div id="qrCode">
            <!-- <h5>Enable camera</h5>
            <p>Renty will use your camera to scan the QR code</p>
            <a href="scan-camera"><button id="enableCamera">Enable camera access</div></a> -->
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