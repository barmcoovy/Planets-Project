<link rel="stylesheet" href="styles/object_card_settings.css">
<?php
    function object_card_settings($obiekt){
        if($obiekt['Obraz']==null) {
            $body = <<<END
                        <div class='object-card'>
                        <div class='object-header'>
                            <p>{$obiekt['Login']}</p><br>
                            <p>{$obiekt['ID_Obiektu']}</p>
                        </div>
                        <h1 id='name'>{$obiekt['Nazwa']} <a href='edit_object.php?id={$obiekt['ID_Obiektu']}'><img src='static/assets/edit.png' height='30px' width='30px'></a></h1>
                        <img src='static/brak.png'/>
                        <p>{$obiekt['Typ']}</p>
                        <p class='distance'>{$obiekt['Odległość']} AU</p>
                        <hr><p>{$obiekt['Data']}</p>
                        </div>
                        END;
        } else {
            $body = <<<END
                        <div class='object-card'>
                        <div class='object-header'>
                            <p>{$obiekt['Login']}</p><br>
                            <p>{$obiekt['ID_Obiektu']}</p>
                        </div>
                        <h1>{$obiekt['Nazwa']} <a href='edit_object.php?id={$obiekt['ID_Obiektu']}'><img src='static/assets/edit.png' height='30px' width='30px'></a></h1>
                        <img class='img-objects' src='static/objects/{$obiekt['Obraz']}'/>
                        <p>{$obiekt['Typ']}</p>
                        <p class='distance'>{$obiekt['Odległość']} AU</p>
                        <hr><p>{$obiekt['Data']}</p>   
                       </div>
                       END;
        }
        return $body;
        
    }
?>
