<?php
    session_start();
    session_destroy();

    echo "<script>
        alert('Your account successfully logout!');
        document.location.href = 'index.php';
        </script>";
    
    
?>