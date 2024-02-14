<?php

require_once "../html/head.php";
?>
<div class="container">
    <?php
    require_once "../html/header.php";
    ?>

    <form action="" method="post">
        <label for="login">Email</label>
        <input type="email" name="login">

        <label for="password">Mot de passe</label>
        <input type="password" name="password">

        <input type="submit" value="envoyer">
        <input type="hidden" name="action" value="add">

        <?php

        require_once "../controler/usersConnect.php";;

        ?>
</div>