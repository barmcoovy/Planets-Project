<?php
    include("./db.php");
    session_start();
    $oldLogin = $_SESSION["login"];
    $newLogin = $_POST['change-login'];
    $checkLogin = "SELECT login FROM uzytkownicy WHERE login = '$newLogin'";
    $checkResult = mysqli_query($db,$checkLogin);
    $loginChecked = mysqli_num_rows($checkResult);
    if($loginChecked > 0){
        header("Location: ../settings.php?err=1");
    }else{
    $sql = "UPDATE uzytkownicy SET login = '$newLogin' WHERE login = '$oldLogin'";
    mysqli_query($db, $sql);
    $_SESSION['login'] = $newLogin;
    header("Location: ../settings.php");}
    mysqli_close($db);
?>