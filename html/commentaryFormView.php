<form action="" method="post">
    <label for="name">Nom</label>
    <input type="text" name="name" id="name">

    <label for="firstName">Prénom</label>
    <input type="text" name="firstName" id="firstName">

    <label for="mail">Adresse mail</label>
    <input type="email" name="mail" id="mail">

    <label for="message">Commentaire</label>
    <textarea name="message" cols="30" rows="10" id="message"></textarea>

    <input type="submit" value="envoyer">
    <input type="hidden" name="action" value="add">
</form>

<?php

require_once "controler/commentaryControler.php";
require_once "html/footer.php";

?>