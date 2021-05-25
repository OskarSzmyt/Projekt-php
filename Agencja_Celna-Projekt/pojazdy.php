<?php
    $con = mysqli_connect('localhost', 'root', '', 'agencjacelna');
    $IDpojazd = $_POST['IDpojazd'];
    $Marka = $_POST['Marka'];
    $Model = $_POST['Model'];
    $Rocznik = $_POST['Rocznik'];
    $Przebieg = $_POST['Przebieg'];
    $Nr_rej = $_POST['Nr_rej'];
    $Status = $_POST['Status'];

    $select = "SELECT * 
               FROM zlecenia WHERE 
               IDpojazd LIKE $IDpojazd
               Marka LIKE $Marka
                Model LIKE $Model
                Rocznik LIKE $Rocznik
                Przebieg LIKE $Przebieg
                Nr_rej LIKE $Nr_rej
                Status LIKE $Status";
               
    $result = mysqli_query($con, $select);
        $select_true = "INSERT INTO carsinfo values('$IDpojazd','$Marka', '$Model', '$Rocznik', '$Przebieg', '$Nr_rej', '$Status')";
        mysqli_query($con, $select_true);

        header('Location: paneladmin.php');
   

?>