<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('Location: strona.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moje konto</title>
    <link rel="stylesheet" href="adminstyl.css"/>
    
</head>
<body>
<div class="container">
    <div id=przyciski>
    <div class="glowna">
        <button class="btn"><a href="strona.php">Strona główna</a></button>
    </div>
    
    </div>
<div class="tabela">
        <table>
        <tr>
            <th>Login</th>
            <th>email</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Usuń konto</th>
        </tr>
        <?php
            $con = mysqli_connect('localhost', 'root', '', 'agencjacelna');
            $login = $_SESSION['login'];

            $select = "SELECT *
                       FROM users
                       ";

            $result = mysqli_query($con, $select);

            while($polaczony = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                <td>".$polaczony['login']."</td>
                 <td>".$polaczony['email']."</td>
                 <td>".$polaczony['Imie']."</td>
                 <td>".$polaczony['Nazwisko']."</td>
                <td><a href='remove.php?rn=$polaczony[login]'>Usuń</a></td>
                <td><a href='zmienhaslo.php'>Zmień hasło</a></td>
                </tr>
                ";
            }
        ?>
        </table>
    
</div>
<div id=formularz>
    <h2 class="c">Dodaj pojazd</h2>
    <form action="pojazdy.php" method="POST">
                
                <label class="c">IDpojazd</label> <br>
                <input type="text" name="IDpojazd" class="c"> <br>
                <label class="c">Marka</label> <br>
                <input type="text" name="Marka" class="c"> <br>
                <label class="c">Model</label> <br>
                <input type="text" name="Model" class="c"> <br>
                <label class="c">Rocznik</label> <br>
                <input type="text" name=Rocznik class="c"> <br>
                <label class="c">Przebieg</label> <br>
                <input type="text" name="Przebieg" class="c"> <br>
                <label class="c">Nr_rej</label> <br>
                <input type="text" name="Nr_rej" class="c"> <br><br>
                <select name=Status class="d">
                    <option>DOSTEPNY</option>
                    <option>NIEDOSTEPNY</option>
                </select><br>
                <button type="submit" class="d">Dodaj</button>
    </form>
</div>
<div id="pojazdy" class=tabela>
    <table>
        <tr>
            <th>IDpojazd</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Rocznik</th>
            <th>Przebieg</th>
            <th>Numer rejestracyjny</th>
            <th>Status</th>
        </tr>
    <?php
        $lista="SELECT *
                                FROM carsinfo";
        $pojazdy= mysqli_query($con, $lista);
        while($pojazd=mysqli_fetch_assoc($pojazdy)){
          echo "
                <tr>
                <td>".$pojazd['IDpojazd']."</td>
                 <td>".$pojazd['Marka']."</td>
                 <td>".$pojazd['Model']."</td>
                 <td>".$pojazd['Rocznik']."</td>
                 <td>".$pojazd['Przebieg']."</td>
                 <td>".$pojazd['Nr_rej']."</td>
                 <td>".$pojazd['Status']."</td>
                 <td><a href='removecars.php?rn=$pojazd[IDpojazd]'>Usuń</a></td>
                 </tr>
                
                ";                  
        }
    ?>
    
    </table>
</div> 
    <div id=formularz>
    <h2 class="c">Utwórz zlecenie</h2>
    <form action="adminzlecenie.php" method="POST">
                <h3 class="c">Zlecenie</h3>
                <label class="c">Twój login</label> <br>
                <input type="text" name="UserLogin" class="c"> <br>
                <label class="c">Miejscowość nadania</label> <br>
                <input type="text" name="Miejsce_nad" class="c"> <br>
                <label class="c">Miejsce docelowe</label> <br>
                <input type="text" name="Miejsce_doc" class="c"> <br>
                <label class="c">Długość</label> <br>
                <input type="text" name="dl" class="c"> <br>
                <label class="c">Szerokość</label> <br>
                <input type="text" name="szer" class="c"> <br>
                <label class="c">Wysokość</label> <br>
                <input type="text" name="wys" class="c"> <br>
                <label class="c">Waga</label> <br>
                <input type="text" name="waga" class="c"> <br><br>
                <select name=Status class="d">
                    <option>Oczekujący</option>
                    <option>W trasie</option>
                    <option>Dostarczony</option>
                </select><br>
                <select name='pojazd_ID' class="d">
                    <?php
                        $lista="SELECT *
                                FROM carsinfo";
                            
                        $pojazdy= mysqli_query($con, $lista);
                        while($pojazd=mysqli_fetch_assoc($pojazdy)){
                            if($pojazd['Status']=='DOSTEPNY')
                                echo "
                                <option>$pojazd[IDpojazd]</option>
                                ";
                        }
                    ?>
                    
                </select><br>
                <button type="submit" class="d">Utwórz</button>
        
    </form>
    <div class="container-error" style="color: red;">
                    <?php
                        if(isset($errorCom) && $errorCom == 'Użytkownik zajęty!'){
                            echo $errorCom.'<br>';
                        }
                    ?>
</div>
    </div>
</div>
<div id= zlecenia class="tabela">
    <table>
        <tr>
            <th>IDzlecenia</th>
            <th>Miejsce_nad</th>
            <th>Miejsce_doc</th>
            <th>Długość</th>
            <th>Szerokość</th>
            <th>Wysokość</th>
            <th>Waga</th>
            <th>status</th>
            <th>pojazd_ID</th>
            <th>UserLogin</th>
            
        </tr>
    <?php
        $listazlecen="SELECT *
                                FROM zlecenia";
        $zlecenia= mysqli_query($con, $listazlecen);
        while($zlecenie=mysqli_fetch_assoc($zlecenia)){
          echo "
                <tr>
                <td>".$zlecenie['IDzlecenia']."</td>
                 <td>".$zlecenie['Miejsce_nad']."</td>
                 <td>".$zlecenie['Miejsce_doc']."</td>
                 <td>".$zlecenie['dl']."</td>
                 <td>".$zlecenie['szer']."</td>
                 <td>".$zlecenie['wys']."</td>
                 <td>".$zlecenie['waga']."</td>
                 <td>".$zlecenie['status']."</td>
                 <td>".$zlecenie['pojazd_ID']."</td>
                 <td>".$zlecenie['UserLogin']."</td>
                 <td><a href='usunzlecenie.php?rn=$zlecenie[IDzlecenia]'>Usuń</a></td>
                 </tr>
                
                ";                  
        }
    ?>
    
    </table>
</div>
</body>
</html>