<?php
    session_start();
    session_destroy();

    header('Location: strona.php');
    exit();
?>