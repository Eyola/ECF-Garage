<form action="" method="post">
    <label for="name">Nom</label>
    <input type="text" name="name">

    <label for="first_name">Prénom</label>
    <input type="text" name="first_name">

    <label for="mail">Adresse mail</label>
    <input type="email" name="mail">

    <label for="message">Commentaire</label>
    <textarea name="message" id="" cols="30" rows="10"></textarea>

    <input type="submit" value="envoyer">

</form>

<?php

require_once "../controler/commentaryControler.php";

?>