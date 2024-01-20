<?php
    session_start();
    include('db.php');
    $id_object = $_GET['id'];

    $nazwa = $_POST["edit-name"];
    $typ = $_POST["edit-type"];
    $odleglosc = $_POST["edit-distance"];

if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
    $folderDocelowy = '../static/objects/';
    $nameFile = $_FILES['image']['name'];
    $source = $folderDocelowy . basename($_FILES['image']['name']);
    
    
    $rozszerzenie = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    
    
    if ($rozszerzenie === 'png' || $rozszerzenie === 'jpg' || $rozszerzenie === 'jpeg') {
        $time = time();
        $newFileName = $_SESSION['login'] . $time . "_" . $nazwa . "." . $rozszerzenie;
        $sourceWithPath = $folderDocelowy . $newFileName;

        move_uploaded_file($_FILES['image']['tmp_name'], $sourceWithPath);
        $sql = "UPDATE obiekty SET nazwa = '$nazwa', typ = '$typ', 
        odleglosc = '$odleglosc', obraz = '$newFileName' WHERE id=$id_object";
        } else {
        header("Location: ../edit_object.php?id={$id_object}&err=1");
    }
}   else{
    $sql = "UPDATE obiekty SET nazwa = '$nazwa',typ = '$typ',
    odleglosc = '$odleglosc', obraz = '' WHERE id=$id_object";
}
    mysqli_query($db, $sql); 
    header("Location: ../index.php?return=1");

mysqli_close($db);
?>