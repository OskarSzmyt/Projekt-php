<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'agencjacelna');

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $select = "SELECT * 
               FROM users WHERE 
               login LIKE '$login' &&
               haslo LIKE '$haslo'";
    
    $result = mysqli_query($con, $select);

    $num_rows = mysqli_num_rows($result);
    if($num_rows == 1){
        $_SESSION['login'] = $login;
        $_SESSION['haslo'] = $haslo;
        header('Location: strona.php');
    }else{
        header('Location: login.php?error=pass');
    }
?>