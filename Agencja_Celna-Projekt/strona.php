<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'agencjacelna');

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Agencja celna</title>
    <link rel="stylesheet" href="styl.css"/>
</head>
<body>
    <div id="start">
        <div id=naglowek>
        <div id=logo class="kontener"> 
            <img src="logo.png" alt="logo" displayed=block id="logo" class="ruch"/>
        </div>
            <div id="menu">
                <div class="m">
                    <a href="#start"> Start </a> 
                </div>
                <div class="m">
                    <a href="#O-nas">O nas</a> 
                </div>
                <div class="m" >
                    <a href="#uslugi">Usługi</a> 
                </div>
                 <div class="m">
                    <a href=#pojazdy>Nasze auta</a> 
                </div>
                <div class="m">
                    <a href=#mapa>Mapa dojazdu</a> 
                </div>
                <div class="m">
                    <a href=#kontakt>Kontakt</a> 
                </div>
                <div class="m">
                    <a href=#pytanie>Zadaj pytanie</a> 
                </div>
                <div class="m">
               <?php
                if(isset($_SESSION['login'])){
                    echo "
                    <a href='wyloguj.php'>Wyloguj się</a>
                    ";
                }
            ?>
                <?php
                    if(!isset($_SESSION['login'])){
                    echo <<<LOGIN
                    <a href='login.php'>Zaloguj się</a>
LOGIN;
}
            ?>
                </div>
                <div class="m">
                <?php
                if(isset($_SESSION['login'])){
                    $aktyw=$_SESSION['login'];
                    echo <<<ACC
                    <a href='Konto.php'>Zalogowano jako: $aktyw</a>
                    
ACC;
                    
                }
            ?>
                    
                    
                <?php
                    if(!isset($_SESSION['login'])){
                    echo <<<REG
                    <a href='register.php'>Zarejestruj się</a>
REG;
                }
            ?>
            </div>
            </div>
        </div>
            <div id=zdj_1>
                <img src="zdj_1.jpg" alt="autostrada" displayed=block id="autostrada"/>
            </div>
        <div id=grid>
            <div id="A_C" class="kafelki">
                <h2>Agencja celna</h2>
                <a> Agencja celna powstała w wyniku nowelizacji Kodeksu celnego z 1991r. Warto zaznaczyć, że agencja celna jest instytucją typowo usługową, która zajmuje się pośredniczeniem między podmiotami gospodarczymi.</a>
                <br>
                <b>Godziny pracy: 7:00-15:00</b>
            </div>
            <div id="T_S" class="kafelki">
                <h2>Transport i spedycja</h2>
                <a> Spedycją będzie zaś każda działalność gospodarcza polegająca na organizowaniu przewozu ładunków na zlecenie osoby prawnej lub fizycznej i na wykonaniu niezbędnej grupy czynności dodatkowych, wynikających ze specyfiki zlecenia. </a>
                <br>
                <b>Godziny pracy: 9:00-17:00</b>
            </div>
            <div id="LOGISTYKA" class="kafelki">
                <h2>Logistyka</h2>
                <a> Logistyka – proces planowania, realizowania i kontrolowania sprawnego i efektywnego ekonomicznie przepływu surowców, materiałów, wyrobów gotowych oraz odpowiedniej informacji z punktu pochodzenia do punktu konsumpcji w celu zaspokojenia wymagań klienta.</a>
                <br>
                <b>Godziny pracy: 6:00-14:00</b>
            </div>
            <div id="D_F" class="kafelki">
                <h2>Dane firmy</h2>
                <a> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
                <br>
                <b>Telefon:123456789</b>
            </div>
        </div>
    </div>
    <div id="O-nas">
        <div id="opis" class="on">
            <h2>O nas</h2>
            <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </a>
        </div>
        <div id="zdj_2" class="on">
            <img src="zdj_2.jpg" alt="o_nas" displayed=block id="o_nas"/>
        </div>
    </div>
    <div id="uslugi">
        <div id="AC2">
            <div id="opisAC" class="AC">
                <h2>Agencja celna</h2>
                <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </a></div>
            <div id="zdj_3" class="AC">
                <img src="zdj_3.jpg" alt="Agencja celna" displayed=block id="celna"/>
            </div>
        </div>
        <div id="TIS">
            <div id="opisTIS">
                <h2>Transport i spedycja</h2>
                <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a>
            </div>
            <div id="panele">
            <div id="MN" class="tis">
                <h2>Międzynarodowy</h2>
                <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a></div>
            <div id="KRAJ" class="tis">
                <h2>Krajowy</h2>
                <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a></div>
           </div>
             <div id="panele2">
            <div id="SPED" class="tis">
                <h2>Spedycja</h2>
                <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a></div>
            <div id="DROB" class="tis">
                <h2>Drobnica</h2>
                <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a></div>
           </div>
        <div id="LOG">
            <div id="zdj_4" class="logis">
                 <img src="zdj_4.jpg" alt="Logistyka" displayed=block id="logi"/>
            </div>
            <div id="opisLOG" class="logis">
                <h2>Logistyka</h2>
            <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </a></div>
        </div>
    </div>
    </div>
    <div id=pojazdy>
        <table id=naszepojazdy>
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
                 </tr>
                
                ";                  
        }
    ?>
    
    </table>
    </div>
    <div id="mapa">
        <h2>Mapa dojazdu do naszej firmy</h2>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2433.899256366083!2d16.92173539274074!3d52.40850203795981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x47045b3635665f11%3A0xc210b0ba32f3da44!2sFredry%2013%2C%2061-714%20Pozna%C5%84!3m2!1d52.4086522!2d16.921690899999998!5e0!3m2!1spl!2spl!4v1604600458592!5m2!1spl!2spl" width=100% height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
        <h2 class="contackt">KONTAKT I DANE TELEADRESOWE</h2>
        <div id="kontakt">
        <div id="adres" class="contact">
            <h3>Adres:</h3>
            <a>Projekt ZSK
            <br>ul Fredry 13
            <br>61-714 Poznan Poland
            <br><h3>NIP:1234123412</h3>
            </a>
        </div>
        <div id="serwisy" class="contact">
        <h3>Teleroute ID:</h3>
        <a>120983</a>
        <h3>TimoCom ID:</h3>
        <a>123456</a>
        <h3>Trans ID:</h3>
        <a>0987</a>
        </div>
        <div id="telefon" class="contact">
            <h3>Telefon:</h3>
        
            <h3>Agencja celna</h3>
            <a>987654321</a>
            <h3>Transport i spedycja</h3>
            <a>123456789</a>
            
        </div>
        <div id="ekontakt" class="contact">
        <h3>E-mail</h3>
        <a>oskar.szmyt@uczen.zsk.poznan.pl</a>
        <h3>Drobnica</h3>
        <a>(61)7126354</a>
        <h3>Fax</h3>
        <a>(61)2115987</a>
        </div>
    </div>
     <div id="pytanie">
     <div id=panel>
        <h2>Zadaj nam pytanie!</h2>
        <div id=form>
            <p>
            
            <input type="text" id="imie" name="imie"  placeholder="Imie" class="c"/>
            </p>
            <p>
            
            <input type="text" id="nazwisko" name="nazwisko" placeholder="Nazwisko" class="c"/>
            </p>
            <p>
            
            <input type="text" id="mail" name="email" placeholder="Email" class="c"/>
            </p>
            <p>
            <textarea name="opis" rows="9" cols="12" placeholder="Wpisz wiadomosc" class="c" id="opis"></textarea>
            </p>
            <p>
                <input type="checkbox" id="regulamin" name="regulamin" value="regulamin">
                Zapoznalem sie z regulaminem
            </p>
            <p>
                <button  value="Wyczysc" name="btt" class="d" onclick="wyczysc()">wyczyść</button>
                <button value="Wyślij" name="bttn" class="d" onclick="formularz()">wyślij</button>
            </p>
        
        </div>
            <div id="result">
    
            </div>
        </div>
    </div>
    <script>
     function formularz(){
     var imie = document.getElementById("imie").value;
     var nazwisko = document.getElementById("nazwisko").value;
     var mail = document.getElementById("mail").value;
     var  opis = document.getElementById("opis").value;
     var result=  document.getElementById("result");
     var regulamin = document.getElementById("regulamin");
     if (regulamin.checked){
         result.classList.remove("red")
         result.innerHTML=imie.toUpperCase()+" "+nazwisko.toUpperCase()+"</br><br>"+"Odpowiedź na Twoją wiadomość zostanie przesłana na podany adres: "+mail ;
         
     }
         else{
             result.classList.add("red")
             result.innerHTML="Musisz zapoznac się z regulaminem"
         }
 }
        function wyczysc(){
            var imie = document.getElementById("imie");
            var nazwisko = document.getElementById("nazwisko");
            var mail = document.getElementById("mail");
            var  opis = document.getElementById("opis");
            imie.value=null;
            nazwisko.value=null;
            mail.value=null;
            opis.value=null;
        }
    
    
    </script>
    
    </div>
      <footer>Oskar Szmyt, Zespół Szkół Komunikacji im. Hipolita Cegielskiego</footer>
 