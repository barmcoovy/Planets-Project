<!DOCTYPE html>
<html lang="pl">
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/root.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="styles/objects.css">
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="stylesheet" href="styles/profile_card.css">
    <link rel="stylesheet" href="styles/object_card.css">
    
    
</head>
<body>
    <div id="container">
        <div id="header">
            <div id="header-left">
            <a href="index.php" id="omega">Ω</a>
            <button><a class="link" href="objects.php">Przeglądaj</a></button>
            </div>
            
            <?php
            if(isset($_SESSION['login'])){   
                echo "<div id='header-right'><a  href='profile.php'><div id='nickname'><p class='link-nickname'>Witaj " .$_SESSION['login'] ."!</p></a></div>
                <button type='submit' class='button-index'><a id='object' class='link' href='create.php'>Dodaj obiekt</a></button>
                <button type='submit' class='button-index'><a class='link' id='log-out' href='scripts/logout.php'>Wyloguj</a></button>";
                
            }else{
                echo "<div id='header-right'><button type='submit' ><a class='link' href='register.php'>Zarejestruj</a></button>
                <button type='submit'><a class='link' href='login.php'>Zaloguj</a></button></div>";
            }
            ?>
            
        </div>
            
    </div>
</body>
</html>