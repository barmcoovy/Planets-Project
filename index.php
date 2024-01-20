<?php
    session_start();
    include('components/header.php');
    if(isset($_GET['return'])){
        if($_GET['return'] == 1){
            echo "<h1 style='text-align: center'>ZAAKTUALIZOWANO OBIEKT POMYŚLNIE</h1>";
        }
    }
?>
