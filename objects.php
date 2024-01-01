<?php
  session_start();
  include('scripts/db.php');
  include('components/header.php');
  include('components/object_card.php');


$results = get_profile_objects($db, $_SESSION['id']);


foreach ($results as $obiekt) {

    echo object_card($obiekt);

}
  
  // echo "<h1>Wszystkie obiekty<h1><div class='result-container'>";

  // while ($row = mysqli_fetch_assoc($result)) {
  //     echo "<div class='object'>
  //             <div class='object-header'>
  //             <p>{$row['login']}</p><br>
  //             <p>{$row['id']}</p>
  //           </div>
  //             <hr>
  //             <h1 class='title'>{$row['nazwa']}</h1>
  //             <div class='object-content'>";
  //             if($row['obraz']==NULL){
  //               echo "<img src='static/objects/brak.png' height='150px' width='auto'/>";
  //             }
  //             else{
  //               echo "<img class='got-img'src='static/objects/$row[obraz]' height='150px' width='150px'/>";
  //             }
  //            echo "<strong>Typ:</strong> {$row['typ']}
  //             <strong>Odległość:</strong> {$row['odleglosc']} AU
  //             <p>{$row['data_stworzenia']}</p>";
             
  //            echo "</div>
  //           </div>";
  // }

  // echo "</div>";

  mysqli_close($db);
?>
