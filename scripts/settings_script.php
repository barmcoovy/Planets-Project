<?php
    include("./db.php");
    session_start();
    $oldLogin = $_SESSION["login"];
    $newLogin = $_POST['change-login'];
    $sql = "UPDATE uzytkownicy SET login = '$newLogin' WHERE login = '$oldLogin'";
    mysqli_query($db, $sql);
    $_SESSION['login'] = $newLogin;
    mysqli_close($db);
    header("Location: ../settings.php");
?>