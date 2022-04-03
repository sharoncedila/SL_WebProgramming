<?php
    session_start();
        
    $_SESSION['first_name_validation'] = $_SESSION['middle_name_validation'] = $_SESSION['last_name_validation'] = 
    $_SESSION['birth_place_validation'] = $_SESSION['birth_date_validation'] = $_SESSION['nationality_number_validation'] = 
    $_SESSION['nationality_validation'] = $_SESSION['email_validation'] = $_SESSION['phone_number_validation'] = 
    $_SESSION['address_validation'] = $_SESSION['postal_code_validation'] = $_SESSION['pfp_validation'] = 
    $_SESSION['username_validation'] = $_SESSION['pw1_validation'] = $_SESSION['pw2_validation'] = "";

    $_SESSION['first_name'] = $_SESSION['middle_name'] = $_SESSION['last_name'] = 
    $_SESSION['birth_place'] = $_SESSION['birth_date'] = $_SESSION['nationality_number'] = 
    $_SESSION['nationality'] = $_SESSION['email'] = $_SESSION['phone_number'] = 
    $_SESSION['address'] = $_SESSION['postal_code'] = $_SESSION['pfp'] = 
    $_SESSION['username'] = $_SESSION['pw1'] = $_SESSION['pw2'] = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>

    <?php
        $_SESSION['validation'] = 0;
    ?>
    
    <div class="title">
        <?php 
            echo "Aplikasi Pengelolaan Keuangan";
        ?>
    </div>
    
    <div class="welcome-text">
        <?php 
            echo "Selamat Datang di Aplikasi Pengelolaan Keuangan";
        ?>
    </div>

    <div class="button-login-register">
        <div class="button-login">
            <?php 
                echo "<a href='../LoginPage/login.php'>Login</a>";
            ?>
        </div>
        <div class="button-register">
            <?php 
                echo "<a href='../RegisterPage/register.php'>Register</a>";
            ?>
        </div>
    </div>

    <style>
        *{
            margin: 0;
            padding: 0;
        } 
        
        body{
            background-color: #e8ecec;
        }

        .title{
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 4em 1em;
            font-size: 2vw;
        }

        .welcome-text{
            text-align: center;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin: 4em 1em;
            font-size: 2vw;
        }

        .button-login-register{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 3em;
        }

        .button-login a,
        .button-register a{
            text-decoration: none;
            color: black;
            font-size: 2vw;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .button-login a{
            background-color: #a0d4ec;
            padding: 1.5vw 2.5vw;
        }

        .button-register a{
            background-color: #c8ec9c;
            padding: 1.5vw;
        }
    </style>
    
</body>
</html>