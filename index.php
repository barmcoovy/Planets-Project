<?php
    include('components/header.php');
    session_start();

    if (isset($_SESSION['login'])) {
        echo " <div class='mainpage'><div class='logout'><a href='profile.php'><div id='nickname'><p>Witaj " .$_SESSION['login'] ." !</p>";
        echo "</div></a>";
        echo "<br>";
        echo "<div class='index-buttons'>";
        echo "<button id='create'><a id='object' href='create.php'>DODAJ OBIEKT</a></button>"; // Poprawiony link do dodaj_obiekt.php
        echo "<form action='scripts/logout.php'>"; 
        echo "<br>";
        echo"<input type='submit' id='logout' value='WYLOGUJ'/></div></div>";
        echo "</div>";                           
    }  ?>
