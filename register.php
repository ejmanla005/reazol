<?php

@include 'config.php';



if(isset( $_POST['sumbit'])){

    $Fname = mysqli_real_escape_string($conn, $_POST['Uname']);
    $Lname = mysqli_real_escape_string($conn, $_POST['Lname']);
    $email = mysqli_real_escape_string($conn, $_POST['Uemail']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = " SELECT * FROM user_form WHERE name = '$Fname' && Lname = '$Lname' && email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exsist!';
    }else{
        if($pass != $cpass){
            $error[] = 'password not matched';
        }else{
            $insert = " INSERT INTO user_form (name, Lname, email, password) VALUES ('$Fname','$Lname','$email','$pass')";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }
    }

};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Styles/Registerstyl.css">
</head>

<body>
    <section class='mainR'>

        <div class="navbar">

            <div class="menuR">
                <ul class="ulR">
                    <li class="liR"><a class="aR" href="index.php">Back</a></li>
                </ul>
            </div>

        </div>
        <div class="formR">

            <form action="" method="post" class=formRe>
                <h3>Register Now</h3>

                <?php
                  
                if(isset($error)){
                  foreach($error as $error){
                      echo '<span class="error-msg">'.$error.'</span>';
                  };
                };
              
              ?>


                <input type="name" name="Uname" placeholder="First Name" class="inputR" required>
                <input type="name" name="Lname" placeholder="Last Name" class="inputR" required>
                <input type="email" name="Uemail" placeholder="Email" class="inputR" required>
                <input type="password" name="password" placeholder="Password" class="inputR" required>
                <input type="password" name="cpassword" placeholder="Confirm Password" class="inputR" required>
                <input type="submit" value="register now" name="sumbit" class="btnI">

                <p>Already have an account? <a href="login.php">Login now</a></a></p>

            </form>
        </div>


    </section>
</body>

</html>