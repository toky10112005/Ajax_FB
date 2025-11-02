<?php
    session_start();

    $_SESSION['id_pub']=$_GET['id_pub'];

    header('Location: ../Pages/commenter.php');
    exit();
?>