<?php
    session_start();
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
                echo "<a href='login.php'>Login</a>";
            ?>
        </div>
        <div class="button-register">
            <?php 
                echo "<a href='register.php'>Register</a>";
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