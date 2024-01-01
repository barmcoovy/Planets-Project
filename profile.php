<?php
    session_start();
    include ('components/header.php');
        include ('components/profile_card.php');
        include ('components/object_card.php');
        include ('scripts/db.php');
        if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        $profil = get_profile($db, $id);
        $obiekty = get_profile_objects($db, $id);
        }else{
            header('Location: login.php?err=3');
        }
?>
<div class="main">
        <div class='left'>
            <div class='left-profile'>
            <?php echo profile_card($profil, $obiekty);?>
            </div>
            <br>
            <div class="settings"><a href="settings.php" class="link">USTAWIENIA</a></div>
        </div>
        <div class="right">
            <div class="objects-header"><h1>OBIEKTY:</h1></div>
            <div class="objects">
                <?php
                    foreach($obiekty as $obiekt){
                        echo object_card($obiekt);
                    }
                ?>
            </div>
        </div>
</div>