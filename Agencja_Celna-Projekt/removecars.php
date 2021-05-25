<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'agencjacelna');
    $usun = $_GET['rn'];
    $selected = "DELETE FROM carsinfo WHERE IDpojazd LIKE '$usun'";

    $data = mysqli_query($con, $selected);

    if($data){
        header('Location: paneladmin.php');
    }else{
        "<script type='text/javascript'>alert('Nie udało się usunąć danego rekordu!');</script>";
    }
?>