<?php
    session_start();
    include("../Database/config.php");

    if(isset($_POST['login'])){
        $query = "select * from user_profile where username='".$_POST['username']."'";
        $data_query = mysqli_query($check_connection_status, $query);
        $data = mysqli_fetch_array($data_query);
        $_SESSION['login_nik'] = $data['NIK'];

        if(($_POST['username'] == "") && ($_POST['password'] == "")){
            echo "<script>
                alert('You haven't entered your email and password!');
                document.location.href = '../LoginPage/login.php';
                </script>";
        } else if (($_POST['username'] == $data['username']) && ($_POST['password'] == $data['password1'])){
        // else if (($_POST['username'] == $_SESSION['username']) && ($_POST['password'] == $_SESSION['password1'])){
                echo "<script>
                    alert('Enjoy our application!');
                    document.location.href = '../HomePage/home.php';
                    </script>";
        } else {
            echo "<script>
                alert('Your email and password did not match. Please check your username and password again!');
                document.location.href = '../LoginPage/login.php';
                </script>";
        }
    }
?>


