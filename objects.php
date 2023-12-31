<?php
// session_start();
// include('scripts/db.php');
// include('components/header.php');


// $sql = "SELECT obiekty.*, uzytkownicy.login FROM obiekty JOIN uzytkownicy ON obiekty.uzytkownik_id = uzytkownicy.id";
// $result = mysqli_query($db, $sql);

// echo "<div class='result-container'>";

// // Pętla po wynikach
// while ($row = mysqli_fetch_assoc($result)) {
//     echo "<div class='object'>
//             <strong>Nazwa:</strong> {$row['nazwa']}<br>
//             <strong>Typ:</strong> {$row['typ']}<br>
//             <strong>Odległość:</strong> {$row['odleglosc']} AU<br>
//             <strong>Użytkownik:</strong> {$row['login']}<br>
//             <strong>ID Użytkownika:</strong> {$row['uzytkownik_id']}<br>
//             <strong>Data Stworzenia:</strong> {$row['data_stworzenia']}<br>";
//             if($row['obraz']==NULL){
//               echo "<div id='img'><img src='static/objects/brak.png'></div>";
//             }
//             else{
//               echo "<img src='static/objects/$row[obraz]' height='50px' width='50px'/>";
//             }
//             echo "<strong>Typ:</strong> {$row['typ']}
//             <strong>Odległość:</strong> {$row['odleglosc']} AU
//             <p>{$row['data_stworzenia']}</p>";
//          echo "</div>";
// }

// echo "</div>";

// mysqli_close($db);
?>
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
              <div class='object-content'>";
              if($row['obraz']==NULL){
                echo "<img src='static/objects/brak.png'/>";
              }
              else{
                echo "<img src='static/objects/$row[obraz]' height='50px' width='50px'/>";
              }
             echo "<strong>Typ:</strong> {$row['typ']}
              <strong>Odległość:</strong> {$row['odleglosc']} AU
              <p>{$row['data_stworzenia']}</p>";
             
             echo "</div>
            </div>";
  }

  echo "</div>";

  mysqli_close($db);
?>