<?php
    if(isset($_GET['error'])){
        if($_GET['error'] == 'pass'){
            $errorCom = 'Niepoprawne hasło!';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Zmiana hasła</title>
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
            <form action="chpasswd.php" method="POST">
                <h1 class="c">Zmiana hasła</h1>
                <label class="c">obecne hasło</label> <br>
                <input type="password" name="haslo" class="c"> <br>
                <label class="c">nowe hasło</label> <br>
                <input type="password" name="nowehaslo" class="c"> <br>
                <div class="container-error" style="color: red;">
                    <?php
                        if(isset($errorCom) && $errorCom == 'Niepoprawne hasło!'){
                            echo $errorCom.'<br>';
                        }
                    ?>
                </div>
                <button type="submit" class="d">Zmień</button>
            </form>
        </div>
    </div>
</body>
</html>