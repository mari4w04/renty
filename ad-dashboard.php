<?php
    session_start();
    if( !isset($_SESSION['sUserId']) ){
        header('Location: login.php');
    }

$sUserId = $_SESSION['sUserId'];

$sData = file_get_contents('bikes.json');
$jData = json_decode($sData);

if( $jData == null ){
    echo 'Error, check the database';
}

$jInnerData = $jData->data;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/white-theme.css">
    <link rel="stylesheet" href="css/overall-style.css">
</head>
<body class="ad-dashboard">

<!-- Add changing the type of the bike -->
    <div id="overlay-form">
        <div class="form-card">
            <div class="close-btn">X</div>
            <form action="" id="frmAddBike">
                <h1>Add a bike</h1>
                <label for="bike-id">Enter bike id</label>
                <input type="text" id="bike-id" name="bike-id">
                <input type="submit">
            </form>
        </div>
        
    </div>

<!-- Editing doesn't work properly -->
    <div id="overlay-edit-form">
        <div class="form-card">
            <div class="close-btn">X</div>
            <form action="" id="frmEditBike">
                <h1>Edit bike <span id="bikeidforediting"></span></h1>

                <?php

                foreach($jInnerData as $jBike){

                }
                
                ?>

                <label for="status">Change the status</label>
                <br />
                <select name="status" id="status">
                    <option disabled>Choose a status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="inrepair">In repair</option>
                </select>
                <input type="submit">
            </form>
        </div>
        
    </div>


    <div>
        <button id="add-bike"><i class="fas fa-plus"></i>Add bike</button>
    </div>
    <div class="bike-container">

        <?php
            foreach($jData as $sBikeIds){
                $keysFromObject = array_keys(get_object_vars($sBikeIds));
                // print_r($keysFromObject[4]);
            }
            $i=-1;
            
            foreach($jInnerData as $jBike){
                // foreach($keysFromObject as $key => $sBikeId){
                    $i++;
                    echo "<div class='bike-card'>
                    <img class='bike-img' src='$jBike->imageurl'>
                    <h6 class='id'>ID: $keysFromObject[$i]</h6>
                    <h5 class='status'>Status: $jBike->status</h5>
                    <div class='bike-buttons'>
                        <button class='edit-bike' data-id='$keysFromObject[$i]'><i class='fas fa-pencil-alt'></i></button>
                        <button class='delete-bike' data-id='$keysFromObject[$i]'><i class='far fa-trash-alt'></i></button>
                    </div>
                </div>";
                
            }

        ?>

    </div>

    <script src="https://kit.fontawesome.com/22eaa1461b.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/ad-dashboard.js"></script>
</body>
</html>