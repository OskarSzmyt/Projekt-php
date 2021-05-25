<?php
    $con = mysqli_connect('localhost', 'root', '', 'agencjacelna');
    $Miejsce_nad = $_POST['Miejsce_nad'];
    $Miejsce_doc = $_POST['Miejsce_doc'];
    $dl = $_POST['dl'];
    $szer = $_POST['szer'];
    $wys = $_POST['wys'];
    $status = $_POST['Status'];
    $pojazd_ID = $_POST['pojazd_ID'];
    $UserLogin = $_POST['UserLogin'];
    $waga=$_POST['waga'];
   

    $select = "SELECT * 
               FROM zlecenia WHERE 
               UserLogin LIKE '$UserLoginl' && Miejsce_nad LIKE $Miejsce_nad && Miejsce_doc LIKE $Miejsce_doc && dl LIKE $dl && szer LIKE $szer
               && wys LIKE $wys && status LIKE $status && pojazd_ID LIKE $pojazd_ID && waga LIKE $waga";
               
    $result = mysqli_query($con, $select);
    $num_rows = mysqli_num_rows($result);

    if($num_rows == 1){
        header('Location: konto.php?error=taken');
    }else{
        $select_true = "INSERT INTO zlecenia values(default,'$Miejsce_nad', '$Miejsce_doc', '$dl', '$szer', '$wys', '$waga', '$status', '$pojazd_ID', '$UserLogin')";
        mysqli_query($con, $select_true);

        header('Location: konto.php');
    }

?>