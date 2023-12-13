<?php
session_start();
include('db.php');

    $nazwa = $_POST["name"];
    $typ = $_POST["type"];
    $odleglosc = $_POST["distance"];
    $id = $_SESSION['id'];

    $sql = "INSERT INTO obiekty (uzytkownik_id, nazwa, typ, odleglosc) 
            VALUES ('$id', '$nazwa', '$typ', $odleglosc)";

    if (mysqli_query($db,$sql) === TRUE) {
        echo "Obiekt dodany pomyślnie!";
        header("Location: ../create.php");
    }else{
        header("Location: ../create.php");
    }
mysqli_close($db);
?>
