<!DOCTYPE html>
<?php
require_once "html/head.php";
?>

<div class="container">

    <?php
    require_once "html/header.php";
    if (isset($_SESSION['admin']) and $_SESSION['admin'] === true) {
        require_once "controler/showUser.php";
        require_once "html/userFormView.php";
    } else {
        echo "Vous n'avez les droits.";
    }
    ?>

    <br>
    <?php
    require_once "html/footer.php";
    ?>