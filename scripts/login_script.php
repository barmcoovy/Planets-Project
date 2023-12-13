<?php
session_start();
include('db.php');
$login = $_POST['login'];
$password = $_POST['password'];
$id;
$checkLogin = "SELECT * FROM uzytkownicy WHERE login = '$login'";
$resultLogin = mysqli_query($db,$checkLogin);

if (mysqli_num_rows($resultLogin) > 0) {
    $row = mysqli_fetch_assoc($resultLogin);
    if (sha1($password) == $row['haslo']) {
        $_SESSION['login'] = $login;
        $_SESSION['id']  =$row['id'];
        header("Location: ../index.php");
    } else {
        header("Location: ../login.php?err=1");
    }
}
else {
    header("Location: ../login.php?err=2");
}
mysqli_close($db);
?>