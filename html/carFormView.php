<form action="" method="post" enctype="multipart/form-data">
    <label for="brand">marque</label>
    <input type="text" name="brand">

    <label for="model">Modèle</label>
    <input type="text" name="model">

    <label for="price">Prix</label>
    <input type="text" name="price">

    <label for="year">Année de mise en circulation</label>
    <input type="text" name="year">

    <label for="kilometer">Kilometrage</label>
    <input type="text" name="kilometer">

    <label for="description">Description</label>
    <input type="text" name="description">

    <label for="img">Photo</label>
    <input type="file" name="img">

    <input type="submit" value="envoyer">
    <input type="hidden" name="action" value="add">

</form>

<?php

require_once "../controler/carControler.php";
?>