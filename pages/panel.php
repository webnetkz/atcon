<?php

    session_start();

    if(empty($_SESSION['key'])) {
        header('Location: ../index.php');
    }


    echo 'panel';