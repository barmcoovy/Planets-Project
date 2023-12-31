<?php
session_start();
include('db.php');

    $nazwa = $_POST["name"];
    $typ = $_POST["type"];
    $odleglosc = $_POST["distance"];
    $id = $_SESSION['id'];
    if($_FILES['image']){
        $folderDocelowy = '../static/objects/';

        $nameFile = $_FILES['image']['name'];
        
        $source = $folderDocelowy . basename($_FILES['image']['name']);
        $rozszerzenie = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $time = time();
        $newFileName = $_SESSION['login'] . $time . "_" . $nazwa . "." . $rozszerzenie;
        $sourceWithPath = $folderDocelowy . $newFileName; 

        if (move_uploaded_file($_FILES['image']['tmp_name'], $sourceWithPath)) {
            echo "Przesłano fotkę";
        }
    }

    $sql = "INSERT INTO obiekty (uzytkownik_id, nazwa, typ, odleglosc,obraz) 
            VALUES ('$id', '$nazwa', '$typ', '$odleglosc', '$newFileName')";

    if (mysqli_query($db,$sql) === TRUE) {
        echo "Obiekt dodany pomyślnie!";
        header("Location: ../create.php");
    }else{
        header("Location: ../create.php");
    }
mysqli_close($db);
?>