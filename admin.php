<?php
    session_start();

    if(!empty($_POST['login']) && !empty($_POST['pass'])) {
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        if($login == 'admin' && $pass == 'atcon') {

            $_SESSION['key'] = $pass;

                header('Location: pages/panel.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign In Admin</title>

        <meta charset="UTF-8">
        <meta name="author" content="TOO WebNet">
        <meta name="description" content="Atcon">
        <meta name="keywords" content="Atcon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="public/css/adminStyle.css">
        <link rel="stylesheet" href="public/css/AdminMobileStyle.css">
          
    </head>

    <body>

    <form action="admin.php" method="POST">
        <input type="text" name="login" placeholder="Login" autocomplete="off">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="send" value="Connect" class="button">
    </form>
        

        <script src="public/js/main.js"></script>
    </body>
</html>