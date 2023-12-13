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
        <form action="scripts/register_script.php" method="POST"> 
        <label for="login">Login:</label>
        <input type="text" name="login" required>
        <label for="password">Hasło:</label>
        <input type="password" name="password" required>
        <label for="password2">Powtórz hasło:</label>
        <input type="password" name="password2" required>
        <input type="submit" value="ZAREJESTRUJ" id="log-in">
        <?php
            if (isset($_GET['err'])) {
                if ($_GET['err'] == 1) {
                    echo "<p>Hasła nie są takie same</p>";
                } if($_GET['err']==2){
                    echo "<p>Nazwa użytkownika jest zajęta</p>";
                }}
        ?>
    </div>
</body>
</html>

        