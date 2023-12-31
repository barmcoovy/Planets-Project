<?php
    session_start();
    include ('components/header.php');
        include ('components/profile_card.php');
        include ('components/object_card.php');
        include ('scripts/db.php');

        $id = $_SESSION['id'];
        $profil = get_profile($db, $id);
        $obiekty = get_profile_objects($db, $id);

        
?>
<div class="glowny-pojemnik">
        <div class='karta-profilu'>
            <?php echo profile_card($profil, $obiekty);  ?>
            <div class="ustawienia-pojemnik"><div class="ustawienia"><a href="settings.php">Ustawienia</a></div></div>
        </div>
        <div class='karta-obiektow'>
            <div class="twoje-obiekty-pojemik"><p>Twoje obiekty</p></div>
            <div class="obiekty">
                <?php
                    foreach ($obiekty as $obiekt) {
                        echo object_card($obiekt);
                    }
                ?>
            </div>
        </div>
    </div>