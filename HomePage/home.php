<?php
    session_start();
    include("../Database/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="header">
        <div class="header-left">
            Aplikasi Pengelolaan Keuangan
        </div>

        <div class="header-center">
            <a class="home-text" href="../HomePage/home.php">Home</a>
            <a class="profile-text" href="../ProfilePage/profile.php">Profile</a>
        </div>

        <div class="header-right">
            <a href="../LogoutPage/logout.php">Logout</a>
        </div>
    </div>

    <div class="content">
        <?php
            echo "Halo"." ";
        ?>
        <?php 
            echo ", Selamat datang di Aplikasi Pengelolaan Keuangan";
        ?>
    </div>


    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .header{
            background-color: #f9ffca;
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding: 1em 0;
        }
        
        .header-left{
            margin-left: -3vw;
        }

        .header-center{
            margin-left: 40vw;
        }

        .header-center a{
            margin-left: 4vw;
            color: black;
        }

        .profile-text{
            text-decoration: none;
        }

        .header-right{
            margin-left: 20vw;
            margin-right: -3vw;
        }

        .header-right a{
            text-decoration: none;
            color: black;
        }

        body{
            background-color: #cad1ff;
        }

        .content{
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 20vw;
            font-size: 2em;
        }
    </style>
    
</body>
</html>