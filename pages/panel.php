<?php

    require_once '../application/database.php';
    $pdo = new DataBase();

    session_start();

    if(empty($_SESSION['key'])) {
        header('Location: ../index.php');
    }

    if(!empty($_POST['text'])) {
        $chapter = 'Извещание ' . date('d.m.Y');
        $text = $_POST['text'];

            $textX = addcslashes($text, '\'');
            $sql = "INSERT INTO archive(title, content) VALUES('$chapter', '$textX')";
            
            $result = $pdo->pdo->query($sql);
    
            if($result != false) {
                 echo '<p style="color: white; margin: 10px;">Добавлено</p>';
            }
    }

?>

<form action="panel.php" method="POST">
    <textarea name="text" id="text" cols="100" rows="20">
    </textarea>
        <br>
    <button name="send" type="submin">Append</button>
</form>