<?php
    include("./db.php");
    session_start();

    $changePassword = sha1($_POST['change-password']);
    $changePasswordVerify = sha1($_POST['change-password-verify']);
    $login = $_SESSION['login'];
    if ($changePassword == $changePasswordVerify) {
        $sql = "UPDATE uzytkownicy SET haslo = '$changePassword' WHERE login = '$login'";
        mysqli_query($db,$sql);
        header("Location: ../settings.php");
    }else{
        header("Location: ../settings.php?err=2");
    }
?>