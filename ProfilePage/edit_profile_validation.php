<?php
    session_start();        
    include("../Database/config.php");

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST['counter'] = 0;

            if(empty($_POST['nationality'])) $_SESSION['nationality_validation'] = "*masukkan kewarganegaraan anda!";
            else if (!preg_match ("/^[a-zA-z]*$/", $_POST['nationality'])) $_SESSION['nationality_validation'] = "*kewarganegaraan hanya berisikan huruf";
            else { 
                $_SESSION['nationality'] = $_POST['nationality']; 
                $_SESSION['nationality_validation'] = "";
                $_POST['counter']++; 
            }

            if(empty($_POST['email'])) $_SESSION['email_validation'] = "*masukkan email anda!";
            else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@gmail.com^", $_POST['email'])) $_SESSION['email_validation'] = "*email hanya berdomain @gmail.com";
            else { 
                $_SESSION['email'] = $_POST['email']; 
                $_SESSION['email_validation'] = "";
                $_POST['counter']++; 
            }

            if(empty($_POST['phone_number'])) $_SESSION['phone_number_validation'] = "*masukkan nomor telepon anda!";
            else if(!preg_match ("/^[0-9]*$/", $_POST['phone_number'])) $_SESSION['phone_number_validation'] = "*nomor telepon hanya boleh berisikan angka";
            else { 
                $_SESSION['phone_number'] = $_POST['phone_number']; 
                $_SESSION['phone_number_validation'] = "";
                $_POST['counter']++; 
            }

            if(empty($_POST['address'])) $_SESSION['address_validation'] = "*masukkan alamat anda!";
            else { 
                $_SESSION['address'] = $_POST['address'];
                $_SESSION['address_validation'] = ""; 
                $_POST['counter']++; 
            }

            if(empty($_POST['postal_code'])) $_SESSION['postal_code_validation'] = "*masukkan kode pos anda!";
            else if(!preg_match ("/^[0-9]*$/", $_POST['postal_code'])) $_SESSION['postal_code_validation'] = "*kode pos hanya boleh berisikan angka";
            else if(strlen($_POST['postal_code']) != 5) $_SESSION['postal_code_validation'] = "*kode pos terdiri dari 5 angka";
            else { 
                $_SESSION['postal_code'] = $_POST['postal_code']; 
                $_SESSION['postal_code_validation'] = "";
                $_POST['counter']++; 
            }

            if(empty($_POST['username'])) $_SESSION['username_validation'] = "*masukkan username anda!";
            else { 
                $_SESSION['username'] = $_POST['username']; 
                $_SESSION['username_validation'] = "";
                $_POST['counter']++; 
            }

            if(empty($_POST['pw1'])) $_SESSION['pw1_validation'] = "*masukkan password1 anda!";
            else { 
                $_SESSION['pw1'] = $_POST['pw1']; 
                $_SESSION['pw1_validation'] = "";
                $_POST['counter']++; 
            }

            if(empty($_POST['pw2'])) $_SESSION['pw2_validation'] = "*masukkan password2 anda!";
            else if($_POST['pw1'] != $_POST['pw2']) $_SESSION['pw2_validation'] = "*password2 harus sama dengan password1";
            else { 
                $_SESSION['pw2'] = $_POST['pw2']; 
                $_SESSION['pw2_validation'] = "";
                $_POST['counter']++; 
            }

            $_SESSION['pfp'] = $_FILES['pfp']['name'];
            $profile_temp_name = $_FILES['pfp']['tmp_name'];
            $destination_folder = "profile_picture/";
            $_SESSION['upload'] = move_uploaded_file($profile_temp_name, $destination_folder.$_SESSION['pfp']);

            $query = "update user_profile set
                        nationality='".$_SESSION['nationality']."', email='".$_SESSION['email']."',
                        phone_number='".$_SESSION['phone_number']."', address='".$_SESSION['address']."',
                        postal_code='".$_SESSION['postal_code']."', username='".$_SESSION['username']."', 
                        password1='".$_SESSION['pw1']."', password2='".$_SESSION['pw2']."', 
                        pfp='".$_SESSION['pfp']."' where NIK='".$_SESSION['login_nik']."'";
            $data_query = mysqli_query($check_connection_status, $query);
                
            if ($data_query){
                echo "<script>
                    alert('Congratulations! Your account successfully updated!')
                    document.location.href = '../ProfilePage/profile.php';
                    </script>";
            } else {
                echo "<script>
                    document.location.href = '../ProfilePage/EditProfile.php';
                    </script>";
            }
                
        } 
?>