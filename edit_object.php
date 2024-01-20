<?php   
session_start();
include 'components/header.php';
include 'scripts/db.php';

if (isset($_SESSION['login']) && $_SESSION['id']){

}else{
    header('Location: ./login.php?err=3');
}
if (isset($_GET['id'])) {
    $id_obj = $_GET['id'];
    $object = get_object_by_id($db, $id_obj);
    if ($object) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDYTUJ OBIEKT</title>
    <link rel="stylesheet" href="styles/edit_object.css">
</head>
<body>
    <div id="header-edit">
    <a href="./settings.php"><img src="static/assets/return.png"></a><h1>EDYTUJ OBIEKT O ID: <?php echo $id_obj; ?></h1>
    </div>
    <div id="form">
       <?php echo "<form action='scripts/edit_object_script.php?id={$id_obj}' method='POST' enctype='multipart/form-data'>" ?>
            <label for="login">Nazwa:</label>
            <input type="text" name="edit-name" required>
            <label for="password">Typ:</label>
            <select name="edit-type">
                <option value="Nie wiem">Nie wiem</option>
                <option value="Planeta">Planeta</option>
                <option value="Czerwony gigant">Czerwony gigant</option>
                <option value="Czarna dziura">Czarna dziura</option>
                <option value="Gwiazda">Gwiazda</option>
                <option value="Księżyc">Księżyc</option>
                <option value="Asteroida">Asteroida</option>
                <option value="Mgławica">Mgławica</option>
                <option value="Kometa">Kometa</option>
            </select>
            <br>
            <br>    
            <label for="distance">Odległość [AU]:</label>
            <input type="number" name="edit-distance" value="0" min="0" required>
            <label for="image">Dodaj zdjęcie:</label>
            <input type="file" name="image" accept=".png, .jpg">
            <div class="buttons">
            <input type="submit" value="DODAJ">
            <input type="reset" value="WYCZYŚĆ" >
            </div>
        </form>
        <?php
        if (isset($_GET['err'])){
            if(($_GET['err'])==1){
                echo "Nieprawidłowe rozszerzenie obrazu!";
                echo"<br>";
                echo "Proszę wybrać grafikę z rozszerzeniem png lub jpg.";
            }
        }
    ?>
    </div> 
</body>
</html> 
<?php
    } else {
        
        echo "Nie można znaleźć obiektu o ID: $id_obj";
    }
}