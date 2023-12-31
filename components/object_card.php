<?php

function object_card($obiekt) {
    $body = "<div class='object-card'>
                <p>Twórca: {$obiekt['Login']}</p>
                <p>ID: {$obiekt['ID_Obiektu']}</p>
                <p>Nazwa: {$obiekt['Nazwa']}</p>
                <p>Typ: {$obiekt['Typ']}</p>
                <p>Data: {$obiekt['Data']}</p>
                <p>Odległość: {$obiekt['Odległość']} AU</p>";

    if($obiekt['Obraz'] == NULL) {
        $body .= "<img src='static/objects/brak.png' alt='Brak obrazu'/>";
    } else {
        $body .= "<img src='static/objects/{$obiekt['Obraz']}' height='50px' width='50px' alt='Obraz'/>";
    }

    $body .= "</div>";
    return $body;
}

?>
