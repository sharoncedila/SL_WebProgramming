<?php
    session_start();

    if(isset($_POST['login'])){
        if(($_POST['username'] == $_SESSION['username']) &&
            ($_POST['password'] == $_SESSION['pw1'])){
                echo "<script>
                    alert('Akun anda berhasil diregistrasi! Please login your account!');
                    document.location.href = 'home.php';
                    </script>";
        } else {
            echo "<script>
                alert('Your email and password did not match. Please check your username and password again!');
                document.location.href = 'login.php';
                </script>";
        }
    }
?> 