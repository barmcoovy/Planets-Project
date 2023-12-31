<?php

function profile_card($profil, $obiekty) {
    $ileObiektow = sizeof($obiekty);
    $body = "<div class='klasa'>";
                echo var_dump($profil);
                echo "<h3>{$profil['login']}TU MA BYĆ LOGIN</h3>
                <p>Ilość obiektów: $ileObiektow</p>
                <p>Data stworzenia konta: {$profil['data_stworzenia']}</p>
            </div>";
    return $body;
}

?>
