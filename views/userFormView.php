<form action="" method="post">
    <label for="role">Role</label>
    <input type="text" name="role">

    <label for="name">Nom</label>
    <input type="text" name="name">

    <label for="first_name">Prénom</label>
    <input type="text" name="first_name">

    <label for="mail">Adresse mail</label>
    <input type="email" name="mail">

    <label for="password">Mot de passe</label>
    <input type="password" name="password">

    <input type="submit" value="envoyer">

</form>

<?php

require_once "../controler/usersControler.php";

?>