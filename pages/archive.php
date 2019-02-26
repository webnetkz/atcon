<?php

    require_once '../application/database.php';
    $pdo = new DataBase();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Услуги Atcon</title>

        <meta charset="UTF-8">
        <meta name="author" content="TOO WebNet">
        <meta name="description" content="Atcon">
        <meta name="keywords" content="Atcon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="../miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="../public/css/style.css">
        <link rel="stylesheet" href="../public/css/mobileStyle.css">
          
    </head>

    <body>

        <div id="menu">
            <nav class="menu">
                <a href="../index.php"><button class="menuButton first">Главная</button></a>
                <a href="service.php"><button class="menuButton">Услуги</button></a>
                <a href="contact.php"><button class="menuButton">Контакты</button></a>
                <a href="archive.php"><button class="menuButton last">Архив</button></a>
            </nav>
        </div>

        <main>
            <?php var_dump($pdo);?>
        </main>

        <footer>
            <p>©
                <?php echo date('Y');?>
                Алматытелефонстрой.<br> Все права защищены.
            </p>
        </footer>
    

        <script src="public/js/main.js"></script>
    </body>
</html>