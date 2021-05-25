<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'agencjacelna');

    $login = $_SESSION['login'];
    $haslo = $_POST['haslo'];
    $nowehaslo = $_POST['nowehaslo'];

    $select = "SELECT * 
               FROM users WHERE 
               login LIKE '$login' &&
               haslo LIKE '$haslo'";
    
    $result = mysqli_query($con, $select);

    $num_rows = mysqli_num_rows($result);
    if($num_rows == 1){
        $chpass="UPDATE users SET haslo = '$nowehaslo' WHERE login= '$login'";
        header('Location: strona.php');
        mysqli_query($con, $chpass);
        header('Location: strona.php');
    }else{
        header('Location: login.php?error=pass');
    }
?>