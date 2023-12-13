<?php
    include('components/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="form">
        <form action="scripts/login_script.php" method="POST"> 
        <label for="login">Login:</label>
        <input type="text" name="login" required>
        <label for="password">Hasło:</label>
        <input type="password" name="password" required>
        <input type="submit" value="ZALOGUJ" id="log-in">
        </form>
        <?php
            if (isset($_GET['err'])) {
                if ($_GET['err'] == 1) {
                    echo "<p>Nieprawidłowe hasło</p>";
                } if($_GET['err']==2){
                    echo "<p>Nieprawidłowy login</p>";
                }if($_GET['err']==3){
                    echo "<p>Musisz być zalogowany</p>";
                }}
        ?>
        </div>

    </div>            
</body>
</html>
            