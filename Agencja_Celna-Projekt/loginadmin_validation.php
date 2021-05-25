<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'agencjacelna');
    
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $email = $_POST['email'];

    $select = "SELECT * 
               FROM users WHERE 
               login LIKE '$login' &&
               haslo LIKE '$haslo' &&
               email LIKE '%zsk.poznan.pl'";
    
    $result = mysqli_query($con, $select);

    $num_rows = mysqli_num_rows($result);
    if($num_rows == 1){
        $_SESSION['login'] = $login;
        $_SESSION['haslo'] = $haslo;
        header('Location: paneladmin.php');
    }else{
        header('Location: adminlogin.php?error=pass');
    }
?>