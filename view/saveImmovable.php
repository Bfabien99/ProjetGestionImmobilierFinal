<?php

    $initController = new immovableController;

    if(isset($_POST['submit']))
    {
        if(!empty($_POST['name']) && !empty($_POST['tel']) && !empty($_POST['location']) && !empty($_POST['area']) && !empty($_POST['details']) && !empty($_POST['price'])){
            $name = $_POST['name'];
            $tel = $_POST['tel'];
            $location = $_POST['location'];
            $area = $_POST['area'];
            $details = $_POST['details'];
            $price = $_POST['price'];
            $Call = $initController->save($name, $tel, $location, $area, $details, $price);
        }
        else
        {
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
    <h3>Enregistrer une nouvelle propriété</h3>
    <form action="" method="post" enctype="multipart/form">
        <div class="group">
            <label for="owner">Nom Propriétaire</label>
            <input type="text" name="name">
        </div>

        <div class="group">
            <label for="tel">Contact Propriétaire</label>
            <input type="tel" name="tel">
        </div>

        <div class="group">
            <label for="location">Localisation de l'immobilier</label>
            <input type="text" name="location">
        </div>

        <div class="group">
            <label for="area">Superficie de l'immobilier</label>
            <input type="text" name="area">
        </div>

        <div class="group">
            <label for="details">Détails de l'immobilier</label>
            <input type="text" name="details">
        </div>

        <div class="group">
            <label for="price">Prix de l'immobilier</label>
            <input type="text" name="price">
        </div>
        <input type="submit" value="Sauvegarder" name="submit">
    </form>
    <a href="/view/admin/">retour</a>
</body>
</html>