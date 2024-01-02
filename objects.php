<?php
  session_start();
  include('scripts/db.php');
  include('components/header.php');
  include('components/object_card.php');
?>
  <h1 class='title'>WSZYSTKIE OBIEKTY</h1>
  <div class='result-container'>
<?php
$objects = array();
        $sql = "
        SELECT uzytkownicy.login AS Login,obiekty.id AS ID_Obiektu,obiekty.uzytkownik_id AS ID_Użytkownika,obiekty.nazwa AS Nazwa,
        obiekty.typ AS Typ,obiekty.odleglosc AS Odległość,obiekty.data_stworzenia AS Data,obiekty.obraz AS Obraz FROM obiekty 
        INNER JOIN uzytkownicy ON obiekty.uzytkownik_id = uzytkownicy.id";
        $result = mysqli_query($db, $sql);
    
        while($row = mysqli_fetch_assoc($result)) {
            array_push($objects, $row);
        }
        echo "<div class='result-container'>";
        foreach ($objects as $object) {
          
          echo object_card($object);
          
      }
      echo "</div>";
      mysqli_close($db);
?>
</div>