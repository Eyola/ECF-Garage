<?php
require_once "html/head.php";
?>

<div class="container">

    <?php
    require_once "html/header.php";
    ?>

    <section class="modele">
        <div class="title">Nos derniers modèles...</div>
        <?php
        require_once "controler/showCarIndex.php";
        ?>
    </section>

    <section class="commentary">
        <div class="title">Ils nous ont fait confiance</div>

    </section>

</div>
<img src="" alt="">
<?php
require_once "html/footer.php";
