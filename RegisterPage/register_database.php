<?php

    session_start();
    include("../Database/config.php");

    $userProfile = "insert into user_profile values('".$_SESSION['nationality_number']."', 
                    '".$_SESSION['first_name']."', '".$_SESSION['middle_name']."', '".$_SESSION['last_name']."', 
                    '".$_SESSION['birth_place']."', '".$_SESSION['birth_date']."', '".$_SESSION['nationality']."', 
                    '".$_SESSION['email']."', '".$_SESSION['phone_number']."', '".$_SESSION['address']."', 
                    '".$_SESSION['postal_code']."', '".$_SESSION['pfp']."', '".$_SESSION['username']."', 
                    '".$_SESSION['password1']."', '".$_SESSION['password2']."')";
    
    $check = mysqli_query($check_connection_status, $userProfile);

    if($check) {
        echo "<script>
        alert('Your account is successfully registered! Please login your account!');
        document.location.href = '../WelcomePage/index.php';
        </script>";
    } else {
        echo "<script>
        alert('Your account has not successfully registered! Please re-register your account!');
        document.location.href = '../RegisterPage/register.php';
        </script>";
    }
   
?>