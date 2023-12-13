<?php
session_start();
include('scripts/db.php');
include('components/header.php');


$sql = "SELECT obiekty.*, uzytkownicy.login FROM obiekty JOIN uzytkownicy ON obiekty.uzytkownik_id = uzytkownicy.id";
$result = mysqli_query($db, $sql);

echo "<div class='result-container'>";

// Pętla po wynikach
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='object'>
            <strong>Nazwa:</strong> {$row['nazwa']}<br>
            <strong>Typ:</strong> {$row['typ']}<br>
            <strong>Odległość:</strong> {$row['odleglosc']} AU<br>
            <strong>Użytkownik:</strong> {$row['login']}<br>
            <strong>ID Użytkownika:</strong> {$row['uzytkownik_id']}<br>
            <strong>Data Stworzenia:</strong> {$row['data_stworzenia']}<br>
          </div>";
}

echo "</div>";

mysqli_close($db);
?>
