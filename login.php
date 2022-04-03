<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="title">
        <?php
            echo "Login";
        ?>
    </div>

    <div class="login-form">
        <form action="login_process.php" method="post">
            <table class="formulir-container">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" id="username"></td> 
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
            </table>

            <div class="button">
                <input type="submit" name="login" value="Login">
                <a href="index.php">Kembali</a>
        </form>
    </div>

    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            background-color: #fbfdac;
        }

        .title{
            text-align: center;
            font-size: 3vw;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 3vw;
            margin-bottom: 2vw;
            margin-top: 5vw;
        }

        .login-form{
            background-color: #ace6fd;
            padding: 2vw;
            margin: 0vw 30vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        td{
            padding-right: 2vw;
            padding-bottom: 1vw;
        }

        input{
            border: none;
            border-radius: 0.2em;
        }

        .button{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2vw;
        }

        .button input{
            background-color: #adf59f;
            border: solid 1px black;
            padding: 0.2em 1.4em;
            border-radius: 0.5em;
            font-size: 0.8em;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .button a{
            text-decoration: none;
            color: black;
            background-color: #fdd7ac;
            padding: 0.2em 1.2em;
            border-color: black;
            border: solid 1px black;
            border-radius: 0.5em;
            font-size: 0.8em;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        
    </style>
</body>
</html>