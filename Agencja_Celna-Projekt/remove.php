<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'agencjacelna');
    $usun = $_GET['rn'];
    $selected = "DELETE FROM users WHERE login LIKE '$usun'";

    $data = mysqli_query($con, $selected);

    if($data){
        header('Location: wyloguj.php');
    }else{
        "<script type='text/javascript'>alert('Nie udało się usunąć danego rekordu!');</script>";
    }
?>