<?php
// session_start();
// include('db.php');

//     $nazwa = $_POST["name"];
//     $typ = $_POST["type"];
//     $odleglosc = $_POST["distance"];
//     $id = $_SESSION['id'];
//     if(isset($_FILES['image'])and !empty($_FILES['image']['name'])){
//         $folderDocelowy = '../static/objects/';

//         $nameFile = $_FILES['image']['name'];
        
//         $source = $folderDocelowy . basename($_FILES['image']['name']);
//         $rozszerzenie = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
//         $time = time();
//         $newFileName = $_SESSION['login'] . $time . "_" . $nazwa . "." . $rozszerzenie;
//         $sourceWithPath = $folderDocelowy . $newFileName; 
//         if($rozszerzenie !=".png" || $rozszerzenie !=".jpg" || $rozszerzenie !=".jpeg"){
//             header("Location: ../create.php?err=1");
//         }
//         else{
//         if (move_uploaded_file($_FILES['image']['tmp_name'], $sourceWithPath)) {
//             echo "Przesłano fotkę";
//         }
//     }
//     $sql = "INSERT INTO obiekty (uzytkownik_id, nazwa, typ, odleglosc,obraz) 
//             VALUES ('$id', '$nazwa', '$typ', '$odleglosc', '$newFileName')";

//     if (mysqli_query($db,$sql) === TRUE) {
//         echo "Obiekt dodany pomyślnie!";
//         header("Location: ../create.php");
//     }else{
//         header("Location: ../create.php");
//     }
//         }
// mysqli_close($db);
?>
<?php
session_start();
include('db.php');

$nazwa = $_POST["name"];
$typ = $_POST["type"];
$odleglosc = $_POST["distance"];
$id = $_SESSION['id'];



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
        $sql = "INSERT INTO obiekty (uzytkownik_id, nazwa, typ, odleglosc, obraz) 
        VALUES ('$id', '$nazwa', '$typ', '$odleglosc', '$newFileName')";
        } else {
        header("Location: ../create.php?err=1");
    }
}   else{
    $sql = "INSERT INTO obiekty (uzytkownik_id, nazwa, typ, odleglosc, obraz) 
        VALUES ('$id', '$nazwa', '$typ', '$odleglosc', '')";
}
    mysqli_query($db, $sql); 
    header("Location: ../create.php");

    header("Location: ../create.php");


mysqli_close($db);
?>
