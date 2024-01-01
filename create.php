<?php
    session_start();
    include('components/header.php');
    

    if (isset($_SESSION['login']) and isset($_SESSION['id'])) {
    }
    else{
        header("Location: login.php?err=3");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STWÓRZ OBIEKT</title>
</head>
<body>
    <div id="form">
        <form action="scripts/create_script.php" method="POST" enctype="multipart/form-data"> 
            <label for="login">Nazwa:</label>
            <input type="text" name="name" required>
            <label for="password">Typ:</label>
            <select name="type">
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
            <input type="number" name="distance" value="0" min="0" required>
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
