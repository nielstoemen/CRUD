<?php 
    include('includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FREDBEAR TRAVELS: INFO</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
        if(!isset($_SESSION['userID'])) { 
            session_start(); 
        }

        if (isset($_SESSION['userID'])) {
            include('includes/usersession.php');
        }
    ?>

<div class="indexpage">
    <div class="navbar">
                <div class="headlogocont">  
                <a href="index.php">
                <img src="image/feddy.png" alt="IMAGE ERROR" height="75px" width="75px">
                </div>

                <div class="navlinks">
                    <a href="index.php">HOME</a></li>
                    <a href="contact.php">CONTACT & SERVICE</a></li>
                    <a href="reisen.php">REISEN</a></li>
                    <?php
                        

                        if (isset($_SESSION['userID'])) {
                            ?><a href="includes/logout.php">logout</a></li><?php
                        }else{
                            ?><a href="gebruikeslogin.php">login</a></li><?php
                        }
                    ?>
                </div>
            </div>
        </div>
    <div class="reisadverblok2">
        <div class="reisadvertentie2">
        <p>Freddy staat klaar om te reizen. <a href="reisen.php">BOEK NU EEN VAKANTIE MET HOGE KORTINGEN!!!</a></p>
     </div>
    </div>
    
    <div class="infointroductie1">
        <div class="sectietext1">
        <img src="image/reisburr.png" alt="IMAGE ERROR" height="400px" width="500px">
        </div>
        <div class="sectieinfo">
        <h1>HIER BIJ FAZBEAR TRAVELS STAAT KLANT ALTIJD OP NUMMER 1</h1>
        <p>onze gastvriendelijke personeel geeft tips en helpt u als u bepaalde dingen nodig heeft.</p>
        <p>kunt u ergens niet uitkomen of lukt iets niet staan wij voor u klaar!! ook als online reserveren niet lukt! </p>
        <p>wilt u contact opnemen met een van onze collega's omdat u een vraag heeft? <a href="contact.php#contactref">KLIK DAN HIER</a></li></p>

        </div>
    </div>

    <div class="infotextsectie">
        
        <div class="sectieinfoafb2">
        <img src="image/slide3.png" alt="IMAGE ERROR" height="400px" width="500px">

        </div>

        <div class="sectietext2">
        
        <h1>fredbear travels geschiedenis 1945 - heden COMPLEET</h1>
        <p>FAZBEAR Travels begon als een klein Reisbureau in Rotterdam.opgericht door mike oxlong </p>
        <p> het doel van het bedrijf was vliegen voor zo goedkoop mogelijk. en het is de .... dat er voor zoorgde dat fazbear travels zo groot is geworden</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam explicabo optio quisquam consectetur ratione dolor accusantium sint non, delectus, fugit, vitae ut? Voluptatibus quia nemo, unde magni a praesentium vero.</p>
        </div>
    </div>

    <div class="footbar">
            <div class="navlinks2">
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <p>all rights reseverd fredbear travels</p>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-facebook"></a>
            <a href="mijnaccount.php" class="fa fa-pintrest">reis</a>
         
            </div>
        </div>
</body>
</html>