<?php

function profile_card($profil, $obiekty) {
    $ileObiektow = sizeof($obiekty);
    $body =  <<<END
                <h2>{$profil[0]['login']}</h2>
                <p>Stworzone obiekty: $ileObiektow</p>
                <p>Data stworzenia konta: {$profil[0]['data_stworzenia']}</p>
                END;
    return $body;
}

?>
