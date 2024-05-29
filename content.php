<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['Uemail'])){
    header('location:login.php');
    header('location:index.php');

};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Website</title>
    <link rel="stylesheet" href="Styles/content.css">

</head>
<body>
    <section class="section1">

        <header>
            <a href="#" class="logo">Motor<span>Mend</span></a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <p class ="UM">Your email : <span class="UME"><?php echo $_SESSION['Uemail'];?></span></p>
           <a href="index.php"><p>log out</p></a> 
        </header>

    </section>
   

    <!--About Page-->

    <div class="about">
        <div class="box">
            <div class="card">
                <img src="images/ConnectingRods.jpg">
            </div>
            <div class="card">
                <img src="images/Cylinder.jpg">
            </div>
            <div class="card">
                <img src="images/Pistons.jpg">
            </div>
            <div class="card">
                <img src="images/Camshaft1.jpg">
            </div>
            <div class="card">
                <img src="images/Cylinderhead.jpg">
            </div>
        </div>
        <hr>

        <div class="Clothes">
            <h1>Products</h1>
            <p>----Clothes----</p>
            <div class="clothes_box">
                <div class="clothes_card">
                    <img src="images/Motorsuit1.jpg">
                    <h1>Clothes</h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical Latin literature from 45 BC, 
                        making it over 2000 years old.
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="clothes_card">
                    <img src="images/Gloves.jpg">
                        <h1>Clothes</h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical Latin literature from 45 BC, 
                        making it over 2000 years old.
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="clothes_card">
                    <img src="images/Mmask.jpg">
                    <h1>Clothes</h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical Latin literature from 45 BC, 
                        making it over 2000 years old.
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="clothes_card">
                    <img src="images/Kneepads.jpg">
                    <h1>Clothes</h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical Latin literature from 45 BC, 
                        making it over 2000 years old.
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>
        <div class="Food">
            <p>----Accesories----</p>
            <div class="food_box">
                <div class="food_card">
                    <img src="images/Helmet.jpg">
                    <h1>Food</h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical Latin literature from 45 BC, 
                        making it over 2000 years old.
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="food_card">
                    <img src="images/Seat1.jpg">
                    <h1>Food</h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical Latin literature from 45 BC, 
                        making it over 2000 years old.
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="food_card">
                    <img src="images/rim.jpg">
                    <h1>Food</h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical Latin literature from 45 BC, 
                        making it over 2000 years old.
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="food_card">
                    <img src="images/Titaniumbolts.jpg">
                    <h1>Food</h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical Latin literature from 45 BC, 
                        making it over 2000 years old.
                    </p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </div>




    <!--fotter-->

    <footer class="footer">
        <div class="main">
            <div class="row">
                <div class="footer_col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shiping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Online</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Follower us</h4>
                    <div class="social">
                        <a href="#"><img src="images/facebook.png"></a>
                        <a href="#"><img src="images/Googlell.png"></a>
                        <a href="#"><img src="images/twitter.png"></a>
                        <a href="#"><img src="images/instagram.png"></a>
                    </div>               
                        
                        
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>