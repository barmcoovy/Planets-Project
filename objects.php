<?php
session_start();
include('scripts/db.php');
include('components/header.php');


$sql = "SELECT obiekty.*, uzytkownicy.login FROM obiekty INNER JOIN uzytkownicy ON obiekty.uzytkownik_id = uzytkownicy.id";
$result = mysqli_query($db, $sql);

echo "<div class='result-container'>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='object'>
            <div class='object-header'>
             <p>{$row['login']}</p><br>
             <p>{$row['id']}</p>
            </div>
            <hr>
            <p class='title'>{$row['nazwa']}</p>
            <div class='object-content'>
            <strong>Typ:</strong> {$row['typ']}
            <strong>Odległość:</strong> {$row['odleglosc']} AU
            <p>{$row['data_stworzenia']}</p>
            </div>
          </div>";
}

echo "</div>";

mysqli_close($db);
?>
