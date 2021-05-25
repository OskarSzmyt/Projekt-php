<?php
    $con = mysqli_connect('localhost', 'root', '', 'agencjacelna');
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $email = $_POST['email'];
    $Imie = $_POST['Imie'];
    $Nazwisko = $_POST['Nazwisko'];
   

    $select = "SELECT * 
               FROM users WHERE 
               email LIKE '$email' OR login LIKE '$login'";
               
    $result = mysqli_query($con, $select);
    $num_rows = mysqli_num_rows($result);

    if($num_rows >= 1){
        header('Location: register.php?error=taken');
    }else{
        $select_true = "INSERT INTO users(login, haslo, Imie, Nazwisko, email) values('$login', '$haslo', '$Imie','$Nazwisko', '$email')";
        mysqli_query($con, $select_true);

        header('Location: login.php');
    }

?>