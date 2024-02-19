<?php
require_once "../html/head.php";
?>
<div class="container">

    <?php
    require_once "../html/header.php";
    ?>
    <div class="filter">
        <form action="" method="post">
            <?php require_once "../controler/filters.php"; ?>
            <fieldset>
                <legend>MARQUES</legend>
                <label for="brand">Citroen</label>
                <input type="checkbox" name="brand" id="brandbox" value="Citroen">

                <label for="Renault">Renault</label>
                <input type="checkbox" name="brand" id="brandbox" value="Renault">

                <label for="Peugeot">Peugeot</label>
                <input type="checkbox" name="brand" id="brandbox" value="Peugeot">

                <label for="Dacia">Dacia</label>
                <input type="checkbox" name="brand" id="brandbox" value="Dacia">

                <label for="Nissan">Nissan</label>
                <input type="checkbox" name="brand" id="brandbox" value="Nissan">

                <input type="submit" formmethod="post" value="Filtrer">
                <input type="hidden" name="action" value="filter">
            </fieldset>



        </form>
    </div>
    <section class="vehicle">
        <?php
        require_once "../controler/showCar.php";
        ?>


    </section>

    <?php
    require_once "../html/footer.php";
