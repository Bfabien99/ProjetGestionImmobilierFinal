<?php
    $initController = new adminController;
    $admin = $initController->show();
    $initController2 = new immovableController;
    $immovables = $initController2->getAll();
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
        <nav>
            <ul>
                <li><a href="/">Déconnexion</a></li>
                <li><a href="/view/enregistrement/">Ajouter</a></li>
                <li><a href="/view/admin/update&name_<?= $admin['id']; ?>/">Mettre à jour mes informations</a></li>
            </ul>
        </nav>
        <h1><?= $admin['name']; ?></h1>
        <div class="box">
            <?php foreach ($immovables as $immovable):?>
            <div class="content">
                <a href="/view/admin/viewdetails&property_<?=$immovable['id']?>/">
                    <h3><?=$immovable['owner']?></h3>
                    <h3><?=$immovable['tel']?></h3>
                </a>
                <a href="/view/admin/update&property_<?=$immovable['id']?>/">modif</a><a href="/view/admin/delete&property_<?=$immovable['id']?>/">supp</a>
            </div>
            <?php endforeach?>
        </div>
</body>
</html>