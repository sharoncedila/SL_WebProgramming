<?php
    session_start();
    include("../Database/config.php");

    $query = "select * from user_profile where NIK='".$_SESSION['login_nik']."'";
    $data_query = mysqli_query($check_connection_status, $query);
    $data = mysqli_fetch_array($data_query);

    $_SESSION['first_name']=$data['first_name'];
    $_SESSION['middle_name']=$data['middle_name'];
    $_SESSION['last_name']=$data['last_name'];
    $_SESSION['birth_place']=$data['birth_place'];
    $_SESSION['birth_date']=$data['birth_date'];
    $_SESSION['nationality_number']=$data['NIK'];
    $_SESSION['nationality']=$data['nationality'];
    $_SESSION['email']=$data['email'];
    $_SESSION['phone_number']=$data['phone_number'];
    $_SESSION['address']=$data['address'];
    $_SESSION['postal_code']=$data['postal_code'];
    $_SESSION['pfp']=$data['pfp'];
    $_SESSION['username']=$data['username'];
    $_SESSION['pw1']=$data['password1'];
    $_SESSION['pw2']=$data['password2'];;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <div class="header">
        <div class="header-left">
            Aplikasi Pengelolaan Keuangan
        </div>

        <div class="header-center">
            <a class="home-text" href="../HomePage/home.php">Home</a>
            <a class="profile-text" href="../ProfilePage/profile.php">Profile</a>
            <a class="edit-text" href="../ProfilePage/EditProfile.php">Edit Profile</a>
        </div>

        <div class="header-right">
            <a href="../LogoutPage/logout.php">Logout</a>
        </div>
    </div>

    <?php
        $query = "select * from user_profile";
        $data_query = mysqli_query($check_connection_status, $query);
        $data = mysqli_fetch_array($data_query);
    ?>

    <div class="content">
        <span>Edit Profil Pribadi</span>
        <form action="edit_profile_validation.php" method="post" enctype="multipart/form-data">
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
                    <td><?php echo $_SESSION['first_name']; ?></td>
                    <td>Nama Tengah</td>
                    <td><?php echo $_SESSION['middle_name'];; ?></td>
                    <td>Nama Belakang</td>
                    <td><?php echo $_SESSION['last_name'];; ?></td>
                </tr>
                <tr style="height: 2vw;">
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr style="height: 1vw;">
                    <td>Tempat Lahir</td>
                    <td><?php echo $_SESSION['birth_place']; ?></td>
                    <td>Tgl Lahir</td>
                    <td><?php echo $_SESSION['birth_date']; ?></td>
                    <td>NIK</td>
                    <td><?php echo $_SESSION['nationality_number']; ?></td>
                </tr>
                <tr style="height: 2vw;">
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
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
                    <td>
                        <img src="../profile_picture/<?php echo $_SESSION['pfp'];?>" width="100"><br>
                        <input type="file" name="pfp" id="pfp">
                    </td>
                </tr>
                <tr style="height: 2vw;">
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['address_validation']?></td>
                    <td> </td>
                    <td class="error"><?php echo $_SESSION['postal_code_validation']?></td>
                    <td></td>
                    <td></td>
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
                <input type='submit' name='update' value='Update'>
                <a href="../ProfilePage/profile.php">Cancel</a>
            </div>
        </form>
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
            margin-left: 2vw;
        }

        .header-center{
            margin-left: 40vw;
        }

        .header-center a{
            margin-left: 4vw;
            color: black;
        }

        .home-text{
            text-decoration: none;
        }

        .profile-text{
            text-decoration: none;
        }

        .header-right{
            margin-left: 15vw;
            margin-right: 2vw;
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
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content span{
            font-weight: bold;
            text-align: center;
            padding: 1vw 0;
            font-size: 1.5em;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin-top: 2vw;
            margin-bottom: 1vw;
        }

        .content table{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
            margin-top: 1vw;
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