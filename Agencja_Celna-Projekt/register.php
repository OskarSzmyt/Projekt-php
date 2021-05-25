<?php
    if(isset($_GET['error'])){
        if($_GET['error'] == 'taken'){
            $errorCom = 'Użytkownik zajęty!';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rejestracja</title>
    <link rel="stylesheet" href="logregstyles.css"/>
</head>
<body>
    <div id=przyciski>
    <div class="glowna">
        <button class="btn"><a href="strona.php">Strona główna</a></button>
    </div>
    </div>
    <div class="kontener">
<div class="form">
            <form action="useradd.php" method="POST">
                <h1 class="c">Rejestracja</h3>
                <label class="c">Login</label> <br>
                <input type="text" name="login" class="c"> <br>
                <label class="c">Hasło</label> <br>
                <input type="password" name="haslo" class="c"> <br>
                <label class="c">Email</label> <br>
                <input type="text" name="email" class="c"> <br>
                <label class="c">Imie</label> <br>
                <input type="text" name="Imie" class="c"> <br>
                <label class="c">Nazwisko</label> <br>
                <input type="text" name="Nazwisko" class="c"> <br>
                <div class="container-error" style="color: red;">
                    <?php
                        if(isset($errorCom) && $errorCom == 'Użytkownik zajęty!'){
                            echo $errorCom.'<br>';
                        }
                    ?>
                </div>
                <button type="submit" class="d">Rejestracja</button>
            </form>
            <p class="d">
                Masz już konto? <a href="login.php" class="d">Zaloguj się</a>
            </p>
        </div>
    </div>
</body>
</html>