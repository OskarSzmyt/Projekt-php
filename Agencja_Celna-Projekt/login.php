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
	<title>Zaloguj się</title>
    <link rel="stylesheet" href="logregstyles.css"/>
</head>
<body>
    <div id=przyciski>
    <div class="glowna">
        <button class="btn"><a href="strona.php">Strona główna</a></button>
    </div>
    <div class="admin">
        <button class="btn"><a href="adminlogin.php">Panel administratora</a></button>
    </div>
    </div>
    <div class="kontener">
        <div class="form">
            <form action="login_validation.php" method="POST">
                <h1 class="c">Logowanie</h1>
                <label class="c">Login</label> <br>
                <input type="text" name="login" class="c"> <br>
                <label class="c">Hasło</label> <br>
                <input type="password" name="haslo" class="c"> <br>
                <div class="container-error" style="color: red;">
                    <?php
                        if(isset($errorCom) && $errorCom == 'Niepoprawne hasło!'){
                            echo $errorCom.'<br>';
                        }
                    ?>
                </div>
                <button type="submit" class="d">Logowanie</button>
            </form>
        </div>
    </div>
</body>
</html>