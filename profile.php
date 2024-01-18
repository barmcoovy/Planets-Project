<?php
    session_start();
    include ('components/header.php');
    include ('components/profile_card.php');
    include ('components/object_card.php');
    include ('scripts/db.php');
    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        $profile = get_profile($db, $id);
        $objects = get_profile_objects($db, $id);
    }else{
            header('Location: login.php?err=3');
        }
?>
<div class="main">
        <div class='left'>
            <div class='left-profile'>
            <?php echo profile_card($profile, $objects);?>
            </div>
            <br>
            <div class="settings"><a href="settings.php" class="link">USTAWIENIA</a></div>
        </div>
        <div class="right">
            <div class="objects-header"><h1>TWOJE OBIEKTY:</h1></div>
            <div class="objects">
                <?php
                    foreach($objects as $object){
                        echo object_card($object);
                    }
                ?>
            </div>
        </div>
</div>