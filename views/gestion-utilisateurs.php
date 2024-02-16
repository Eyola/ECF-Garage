<?php
require_once "../html/head.php";
?>

<div class="container">

    <?php
    require_once "../html/header.php";
    ?>
    <table class="userTable">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Mail</th>
                <th>selectionner utilisateur</th>
            </tr>
        </thead>

        <?php
        require_once "../controler/showUser.php";
        ?>


    </table>

    <?php
    require_once "../html/userFormView.php";
    ?>


    <br>
    <?php
    require_once "../html/footer.php";
    ?>