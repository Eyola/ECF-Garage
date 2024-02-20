<?php
require_once "../html/head.php";
?>
<div class="container">

    <?php
    require_once "../html/header.php";
    ?>
    <div class="filter">
        <form action="" method="post" class="formFilters">
            <fieldset class="grpFilters">
                <?php require_once "../controler/filters.php"; ?>


            </fieldset>

            <input type="submit" value="Filtrer">
            <input type="hidden" name="action" value="filter">


        </form>
    </div>


    <section class="vehicle">
        <?php
        require_once "../controler/filtered.php";
        ?>


    </section>

    <?php
    require_once "../html/footer.php";
