<?php
    session_start();
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
            <a class="home-text" href="home.php">Home</a>
            <a class="profile-text" href="profile.php">Profile</a>
        </div>

        <div class="header-right">
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="content">
        <span>Profil Pribadi</span>
        <table class="formulir" style="width: 100%">
                <tr>
                    <th style="width: 8vw;"> </th>
                    <th style="width: 15vw;"> </th>
                    <th style="width: 8vw;"> </th>
                    <th style="width: 15vw;"> </th>
                    <th style="width: 8vw;"> </th>
                    <th style="width: 15vw;"> </th>
                </tr>
                <tr style="height: 2.5vw;">
                    <td>Nama Depan</td>
                    <td><b><?php echo $_SESSION['first_name']; ?></b></td>
                    <td>Nama Tengah</td>
                    <td><b><?php echo $_SESSION['middle_name']; ?></b></td>
                    <td>Nama Belakang</td>
                    <td><b><?php echo $_SESSION['last_name']; ?></b></td>
                </tr>
                <tr style="height: 2.5vw;">
                    <td>Tempat Lahir</td>
                    <td><b><?php echo $_SESSION['birth_place']; ?></b></td>
                    <td>Tgl Lahir</td>
                    <td><b><?php echo $_SESSION['birth_date']; ?></b></td>
                    <td>NIK</td>
                    <td><b><?php echo $_SESSION['nationality_number']; ?></b></td>
                </tr>
                <tr style="height: 2.5vw;">
                    <td>Warga Negara</td>
                    <td><b><?php echo $_SESSION['nationality']; ?></b></td>
                    <td>Email</td>
                    <td><b><?php echo $_SESSION['email']; ?></b></td>
                    <td>No HP</td>
                    <td><b><?php echo $_SESSION['phone_number']; ?></b></td>
                </tr>
                <tr style="height: 2.5vw;">
                    <td>Alamat</td>
                    <td><b><?php echo $_SESSION['address']; ?></b></td>
                    <td>Kode Pos</td>
                    <td><b><?php echo $_SESSION['postal_code']; ?></b></td>
                    <td>Foto Profil</td>
                    <td><img src="./profile_picture/<?php echo $_SESSION['pfp'];?>" width="100"></td>
                </tr>   
            </table>
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

        .home-text{
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
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content span{
            font-weight: bold;
            text-align: center;
            padding: 2vw 0;
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
        
        td{
            vertical-align: top;
        }
    </style>
    
</body>
</html>