<?php
    $initController = new adminController;
    $getValue = $initController->show();

    if (isset($_POST['upload'])) {
        $nom = $_POST['name'];
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $tel = $_POST['tel'];
        $save = $initController->update((int)$params, $nom, $pseudo, $email, $pass, $tel);
        header('location:/view/admin/');
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
            <label for="name">Nom</label>
            <input type="text" name="name" value="<?= $getValue['name']?>">
        </div>

        <div class="group">
            <label for="pseudo">Identifiant</label>
            <input type="tel" name="pseudo" value="<?= $getValue['pseudo']?>">
        </div>

        <div class="group">
            <label for="email">Email</label>
            <input type="text" name="email" value="<?= $getValue['email']?>">
        </div>

        <div class="group">
            <label for="pass">Mot de passe</label>
            <input type="text" name="pass" value="<?= $getValue['passphrase']?>">
        </div>

        <div class="group">
            <label for="tel">Contact</label>
            <input type="tel" name="tel" value="<?= $getValue['tel']?>">
        </div>

        <input type="submit" value="Modifier" name="upload">
    </form>
</body>
</html>