<form action="" method="post">
    <label for="name">Nom</label>
    <input type="text" name="name">

    <label for="firstName">Prénom</label>
    <input type="text" name="firstName">

    <label for="mail">Adresse mail</label>
    <input type="email" name="mail">

    <label for="message">Commentaire</label>
    <textarea name="message" id="" cols="30" rows="10"></textarea>

    <input type="submit" value="envoyer">
    <input type="hidden" name="action" value="add">
</form>

<?php

require_once "../controler/commentaryControler.php";
require_once "../html/footer.php";

?>