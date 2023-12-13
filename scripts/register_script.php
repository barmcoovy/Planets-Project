<?php
session_start();
include('db.php');

$login = $_POST['login'];
$password = sha1($_POST['password']);
$password2 = sha1($_POST['password2']); 
$checkLogin =  "SELECT login FROM uzytkownicy WHERE login = '$login'";
$result = mysqli_query($db,$checkLogin);
$login2 = mysqli_fetch_assoc($result);

if ($password == $password2 && $login !=  $login2) {
    $sql = "INSERT INTO uzytkownicy (`login`, `haslo`) VALUES ('$login', '$password')";
    if (mysqli_query($db,$sql) === TRUE) {
        header("Location: ../register.php");
    }
} elseif($password != $password2) {
    header("Location: ../register.php?err=1");
}elseif($login == $login2['login']){
    header("Location: ../register.php?err=2"); 
}


mysqli_close($db);
?>
