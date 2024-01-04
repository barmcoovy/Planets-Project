    <?php
    function object_card($obiekt) {
        if($obiekt['Obraz']==null) {
            $body = <<<END
                        <div class='object-card'>
                        <div class='object-header'>
                            <p>{$obiekt['Login']}</p><br>
                            <p>{$obiekt['ID_Obiektu']}</p>
                        </div>
                        <h1>{$obiekt['Nazwa']}</h1>
                        <img src='static/objects/brak.png'/>
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
                        <h1>{$obiekt['Nazwa']}</h1>
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
