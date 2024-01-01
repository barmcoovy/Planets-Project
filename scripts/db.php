<?php
    $db = mysqli_connect("localhost","root","","projekt");
    function get_profile($db, $idUser) {
        $array = array();
        $sql = "SELECT * FROM `uzytkownicy` WHERE id=$idUser;";
        $result = mysqli_query($db, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            array_push($array, $row);
        }
        return $array;
    }
    function get_profile_objects($db, $id) {
        $array = array();
        $sql = "
            SELECT
            uzytkownicy.login AS Login,
            obiekty.id AS ID_Obiektu,
            obiekty.uzytkownik_id AS ID_Użytkownika,
            obiekty.nazwa AS Nazwa,
            obiekty.typ AS Typ,
            obiekty.odleglosc AS Odległość,
            obiekty.data_stworzenia AS Data,
            obiekty.obraz AS Obraz
            FROM obiekty 
            INNER JOIN uzytkownicy 
            ON obiekty.uzytkownik_id = uzytkownicy.id 
            WHERE uzytkownicy.id = $id";
        $result = mysqli_query($db, $sql);
    
        while($row = mysqli_fetch_assoc($result)) {
            array_push($array, $row);
        }
        return $array;
    }    
?>