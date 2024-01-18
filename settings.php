<?php
    session_start();
    include("components/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USTAWIENIA</title>
    <link rel="stylesheet" href="styles/settings.css">
</head>
<body>
    <header>
        <h1>USTAWIENIA</h1>
        <img src="static/images/gear.png" width='50px' height="50px">
    </header>
    <main>
        <div id="left">
            <h3>ustawienia użytkownika</h3>
            <div id="user-settings-header">
                <div id="login-header">
                    <?php
                        echo "<p>Nazwa użytkownika: {$_SESSION['login']}</p>";
                    ?>
                    <input type="image" src="static/images/gear.png" id="login-change-button" onclick="changeLogin()">
                </div>
            
                <div id='change-login-div'>
                    <form action="scripts/settings_script.php" method="POST">
                    <input type="text" placeholder="Nowy login" name="change-login" id="change-login">
                    <input type="submit" value="ZMIEŃ LOGIN">
                    </form>
                </div>
            </div>
        </div>
        <div id="right">
            <h3>ustawienia obiektów</h3>
        </div>
    </main>
    <script src="javascript/settings.js"></script>
</body>
</html>