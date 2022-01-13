<?php
    $initController = new immovableController;
    $Calls = $initController->cibleId((int)$params['id']);
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
    <h3>Proprio: <?= $Calls['owner']?></h3>
    <h3>Numéro: <?= $Calls['tel']?></h3>
    <h3>Localisation: <?= $Calls['location']?></h3>
    <h3>Détails: <?= $Calls['details']?></h3>
    <h3>Superficie: <?= $Calls['area']?></h3>
    <h3>Prix: <?= $Calls['price']?></h3>
    <a href="/">Retour</a>
</body>
</html>