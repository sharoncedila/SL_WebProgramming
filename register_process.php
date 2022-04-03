<?php
    session_start();        

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST['counter'] = 0;

            if(empty($_POST['first_name'])) $_SESSION['first_name_validation'] = "*masukkan nama depan anda!";
            else { 
                $_SESSION['first_name'] = $_POST['first_name']; 
                $_SESSION['first_name_validation'] = "";
                $_POST['counter']++; 
            }

            if(empty($_POST['middle_name'])) $_SESSION['middle_name_validation'] = "*masukkan nama tengah anda!";
            else { 
                $_SESSION['middle_name'] = $_POST['middle_name']; 
                $_SESSION['middle_name_validation'] = "";
                $_POST['counter']++; 
            }

            if(empty($_POST['last_name'])) $_SESSION['last_name_validation'] = "*masukkan nama belakang anda!";
            else { 
                $_SESSION['last_name'] = $_POST['last_name']; 
                $_SESSION['last_name_validation'] = "";
                $_POST['counter']++; 
            }

            if(empty($_POST['birth_place'])) $_SESSION['birth_place_validation'] = "*masukkan tempat lahir anda!";
            else if (!preg_match ("/^[a-zA-z]*$/", $_POST['birth_place'])) $_SESSION['birth_place_validation'] = "*tempat lahir wajib berupa huruf";
            else { 
                $_SESSION['birth_place'] = $_POST['birth_place']; 
                $_SESSION['birth_place_validation'] = "";
                $_POST['counter']++; 
            }

            if(empty($_POST['birth_date'])) $_SESSION['birth_date_validation'] = "*masukkan tanggal lahir anda!";
            else { 
                $_SESSION['birth_date'] = $_POST['birth_date']; 
                $_SESSION['birth_date_validation'] = "";
                $_POST['counter']++; 
            }

            if(empty($_POST['nationality_number'])) $_SESSION['nationality_number_validation'] = "*masukkan NIK anda!";
            else if(!preg_match ("/^[0-9]*$/", $_POST['nationality_number'])) $_SESSION['nationality_number_validation'] = "*NIK hanya boleh berisikan angka";
            else if(strlen($_POST['nationality_number']) != 16) $_SESSION['nationality_number_validation'] = "*NIK wajib berisi 16 digit angka";
            else { 
                $_SESSION['nationality_number'] = $_POST['nationality_number']; 
                $_SESSION['nationality_number_validation'] = "";
                $_POST['counter']++; 
            }

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



            if( $_POST['counter'] == 14) {
                $_SESSION['first_name'] = $_POST['first_name'];
                $_SESSION['middle_name'] = $_POST['middle_name'];
                $_SESSION['last_name'] = $_POST['last_name'];
                $_SESSION['birth_place'] = $_POST['birth_place'];
                $_SESSION['birth_date'] = $_POST['birth_date'];
                $_SESSION['nationality_number'] = $_POST['nationality_number'];
                $_SESSION['nationality'] = $_POST['nationality'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['phone_number'] = $_POST['phone_number'];
                $_SESSION['address'] = $_POST['address'];
                $_SESSION['postal_code'] = $_POST['postal_code'];
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['pw1'] = $_POST['pw1'];
                $_SESSION['pw2'] = $_POST['pw2'];
    
                $_SESSION['pfp'] = $_FILES['pfp']['name'];
                $profile_temp_name = $_FILES['pfp']['tmp_name'];
                $destination_folder = "profile_picture/";
                $_SESSION['upload'] = move_uploaded_file($profile_temp_name, $destination_folder.$_SESSION['pfp']);
                
                echo "<script>
                    alert('Akun anda berhasil diregistrasi! Please login your account!');
                    document.location.href = 'index.php';
                    </script>";
            } else { 
                $_SESSION['validation'] = 1;
                header("location:register.php");
            }
        } 
  
    
    // if(isset($_POST['register'])){
      
        
        
    // }
?>