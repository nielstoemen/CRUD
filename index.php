<?php 
    include('includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FREDBEAR TRAVELS:Home</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap');
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/icons.js"></script>
   
    
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
                    <a href="contact.php">CONTACT & SERVICE</a></li>
                    <a href="info.php">INFO</a></li>
                    <a href="reisen.php">REISEN</a></li>
                    <?php
                        


                        if (isset($_SESSION['userID'])) {
                            ?><a href="includes/logout.php">logout</a></li><?php
                        }else{
                            ?><a href="gebruikeslogin.php">login</a></li><?php
                        }
                    ?>
                </div>

            <div class="navlinks">
                <a href="contact.php">SERVICE EN CONTACT</a></li>
                <a href="info.php">INFO</a></li>
                <a href="reisen.php">REIZEN</a></li>
                <a href="gebruikeslogin.php">Login</a></li>
               
                

            </div>
        </div>
   

        <div class="introductiesectie">
    
            <h1>BOEK HIER DE IDEALE VAKANTIE</h1>

        </div>

        <div class="wereldtextsectie">
        
            <div class="sectie2img">
            <p>FAZBEAR TRAVELS TRAVELT OVER DE HELE WERELD</p>

            </div>

            <div class="sectie3"> 
            <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="image/portugal.jpg" style="width:400px" height="400px">
    <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="image/vakantieintro.jpg" style="width:400px" height="400px">
    <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="image//griekeland.jpg" style="width:400px"height="400px">
    <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    </div>
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