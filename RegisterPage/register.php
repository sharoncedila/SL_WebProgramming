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
    <title>Register</title>
</head>
<body>
    <!-- register title -->
    <div class="title">
        <?php
            echo "Register";
        ?>
    </div>

    <?php
        if($_SESSION['validation'] == 0) {
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
        }        
    ?>

     <!-- formulir container -->
     <div class="formulir-container">
        <form action="register_process.php" method="post" enctype="multipart/form-data">
            <table class="formulir" style="width: 100%">
                <tr>
                    <th style="width: 8vw;"> </th>
                    <th> </th>
                    <th style="width: 8vw;"> </th>
                    <th> </th>
                    <th style="width: 8vw;"> </th>
                    <th> </th>
                </tr>
                <tr style="height: 1vw;">
                    <td>Nama Depan</td>
                    <td><input type="text" name="first_name" id="first_name" value="<?php echo $_SESSION['first_name']; ?>"></td>
                    <td>Nama Tengah</td>
                    <td><input type="text" name="middle_name" id="middle_name" value="<?php echo $_SESSION['middle_name']; ?>"></td>
                    <td>Nama Belakang</td>
                    <td><input type="text" name="last_name" id="last_name" value="<?php echo $_SESSION['last_name']; ?>"></td>
                </tr>
                <tr style="height: 2vw;">
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['first_name_validation']?></td>
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['middle_name_validation']?></td>
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['last_name_validation']?></td>
                </tr>
                <tr style="height: 1vw;">
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="birth_place" id="birth_place" value="<?php echo $_SESSION['birth_place']; ?>"></td>
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="birth_date" id="birth_date" value="<?php echo $_SESSION['birth_date']; ?>"></td>
                    <td>NIK</td>
                    <td><input type="text" name="nationality_number" id="nationality_number" value="<?php echo $_SESSION['nationality_number']; ?>"></td>
                </tr>
                <tr style="height: 2vw;">
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['birth_place_validation']?></td>
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['birth_date_validation']?></td>
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['nationality_number_validation']?></td>
                </tr>
                <tr style="height: 1vw;">
                    <td>Warga Negara</td>
                    <td><input type="text" name="nationality" id="nationality" value="<?php echo $_SESSION['nationality']; ?>"></td>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email" value="<?php echo $_SESSION['email']; ?>"></td>
                    <td>No HP</td>
                    <td><input type="text" name="phone_number" id="phone_number" value="<?php echo $_SESSION['phone_number']; ?>"></td>
                </tr>
                <tr style="height: 2vw;">
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['nationality_validation']?></td>
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['email_validation']?></td>
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['phone_number_validation']?></td>
                </tr>
                <tr style="height: 1vw;">
                    <td>Alamat</td>
                    <td><textarea name="address" id="address" cols="20" rows="4"><?php echo $_SESSION['address']; ?></textarea></td>
                    <td>Kode Pos</td>
                    <td><input type="text" name="postal_code" id="postal_code" value="<?php echo $_SESSION['postal_code']; ?>"></td>
                    <td>Foto Profil</td>
                    <td><input type="file" name="pfp" id="pfp"></td>
                </tr>
                <tr style="height: 2vw;">
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['address_validation']?></td>
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['postal_code_validation']?></td>
                </tr>
                <tr style="height: 1vw;">
                    <td>Username</td>
                    <td><input type="text" name="username" id="username" value="<?php echo $_SESSION['username']; ?>"></td>
                    <td>Password 1</td>
                    <td><input type="password" name="pw1" id="pw1" value="<?php echo $_SESSION['pw1']; ?>"></td>
                    <td>Password 2</td>
                    <td><input type="password" name="pw2" id="pw2" value="<?php echo $_SESSION['pw2']; ?>"></td>
                </tr>  
                <tr style="height: 2vw;">
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['username_validation']?></td>
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['pw1_validation']?></td>
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['pw2_validation']?></td>
                </tr>  
            </table>

            <div class="button">
                <a href="../WelcomePage/index.php">Kembali</a>
                <input type='submit' name='register' value='Register'>
            </div>
        </form>
    </div>

    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            background-color: #c8f4f4;
        }

        .title{
            text-align: center;
            font-size: 3vw;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            padding: 3vw;
        }

        .formulir{
            display: flex;
            justify-content: center;
        }

        input[type="text"], input[type="password"], input[type="date"], textarea{
            border: none;
            margin-right: 4vw;
            width: 17vw;
        }

        td{
            vertical-align: top;
        }

        .button{
            display: flex;
            justify-content: right;
            gap: 2em;
            margin-right: 10vw;
            margin-top: 2vw;
            font-size: 0.8em;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        .button a{
            text-decoration: none;
            color: black;
            background-color: #ffd4ac;
            padding: 0.2em 3.5em;
            border-color: black;
            border: solid 1px black;
            border-radius: 0.5em;
        }

        .button input{
            background-color: #b0f49c;
            border: solid 1px black;
            padding: 0.2em 3.5em;
            border-radius: 0.5em;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        .error{
            color: red;
            font-size: small;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</body>
</html>