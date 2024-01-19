<?php
    session_start();
    include("components/header.php");
    if(isset($_SESSION["login"]) and isset($_SESSION['id'])){
    }else{
        header('Location: ./login.php?err=3');
    }
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
        <img src="static/assets/gear.png" width='50px' height="50px">
    </header>
    <main>
        <div id="left">
            <h3>ustawienia użytkownika</h3>
            <div id="user-settings-login">
                <div id="login-header">
                    <?php
                        echo "<p>Obecna nazwa użytkownika: <i>{$_SESSION['login']}</i></p>";
                    ?>
                    <input type="image" src="static/assets/edit.png" id="login-change-button" onclick="changeLogin()">
                </div>
                    
                <div id='change-login-div'>
                    <form action="scripts/changelogin_script.php" method="POST">
                    <input type="text" placeholder="Nowy login" name="change-login" id="change-login" required >
                    <input type="submit" value="ZMIEŃ LOGIN">
                    </form>
                </div>
            </div>
            <?php
                        if(isset($_GET["err"])){
                            if($_GET["err"] == 1){
                                echo "<p id='error'>Podany login jest zajęty</p>";
                            }
                        }
                    ?>
            <div id="user-settings-password">
                <div id="change-password-header">
                    <p>Zmień swoje hasło</p>
                    <input type="image" src="static/assets/edit.png" id="login-change-button" onclick="changePassword()">
                </div>
                <div id="change-password-div">
                    <form action="scripts/changepassword_script.php" method="POST">
                        <input type="password" name="change-password" id="change-password" placeholder="Nowe hasło" required>
                        <input type="password" name="change-password-verify" id="change-password" placeholder="Powtórz nowe hasło" required>
                        <input type="submit" value="ZMIEŃ HASŁO">
                    </form>
                </div>
            </div>
            <?php
                        if(isset($_GET["err"])){
                            if($_GET["err"] == 2){
                                echo "<p id='error'>Podane hasła nie są takie same</p>";
                            }
                        }
                    ?>
        </div>
        <div id="right">
            <h3>ustawienia obiektów</h3>
        </div>
    </main>
    <script src="javascript/settings.js"></script>
</body>
</html>