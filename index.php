<?php

@include 'config.php';

session_start();

if(isset( $_POST['sumbit'])){

    $email = mysqli_real_escape_string($conn, $_POST['Uemail']);
    $pass = md5($_POST['password']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn,$select);

    if(mysqli_num_rows($result) > 0){
      $_SESSION['Uemail'] = $email;
      header('location:content.php');
    }else{
        $error[] = 'Incorrect Email or Password.';
    }

};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>MotorMend</title>
    <link rel="stylesheet" href="Styles/style.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">MotorMend</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">DESIGN</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div>

        <div class="content">

            <h1> Reviving rides<br><span>One</span> <br>Part at a time.</h1>
            <p class="par">Business Idea: MotorMend is an innovative online marketplace dedicated to </br>
                connecting buyers and sellers of motor parts seamlessly. It serves as a digital hub </br>
                where individuals and businesses can find, buy, and sell a wide range of new, used,</br>
                and refurbished motor parts across different categories and brands.</p>

            <button class="cn"><a href="#">JOIN US</a></button>

            <form action="" method="post" class="form">


                <h2>Login Here</h2>

                <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                        }
                      }
                    
                    ?>

                <input type="email" name="Uemail" placeholder="Enter Email Here" required>
                <input type="password" name="password" placeholder="Enter Password Here" required>
                <input type="submit" value="Login Now" name="sumbit" class="btnn">

                <p class="link">Don't have an account<br>
                    <a href="Register.php">Sign up </a> here</a>
                </p>
                <p class="liw">Log in with</p>

                <div class="icons">
                    <a href="www.facebook.com">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-skype"></ion-icon>
                    </a>
                </div>

            </form>
        </div>


    </div>
    </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>