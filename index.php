<!DOCTYPE html>
<?php
require_once "html/head.php";
?>

<div class="container">

    <?php
    require_once "html/header.php";
    ?>

    <div class="modele">
        <div class="title">Nos derniers modèles...</div>
        <?php
        require_once "controler/showCarIndex.php";
        ?>
    </div>

    <div class="commentary">
        <div class="title">Ils nous ont fait confiance</div>

    </div>

</div>

<?php
require_once "html/footer.php";
