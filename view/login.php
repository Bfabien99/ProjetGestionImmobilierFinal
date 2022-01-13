<?php
    $initController = new adminController();
    $Calls = $initController->show();
    var_dump($Calls);
    if (isset($_POST['connect'])) {
        if (($_POST['pseudo'] == $Calls['pseudo']) && ($_POST['pass'] == $Calls['passphrase'])) {
            header('location:/view/admin/');
        }
        else {
            echo "Error";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="group">
            <label for="pseudo">Identifiant</label>
            <input type="text" name="pseudo">
        </div>
        <div class="group">
            <label for="pseudo">Mot de passe</label>
            <input type="text" name="pass">
        </div>

        <input type="submit" value="se Connecter" name="connect">
    </form>
</body>
</html>