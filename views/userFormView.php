<?php

require_once "../html/head.php";
require_once "../html/header.php";


?>

<form action="" method="post">



    <label for="name">Nom</label>
    <input type="text" name="name">

    <label for="firstName">Prénom</label>
    <input type="text" name="firstName">

    <label for="mail">Adresse mail</label>
    <input type="email" name="mail">

    <label for="password">Mot de passe</label>
    <input type="password" name="password">

    <input type="submit" value="envoyer">
    <input type="hidden" name="action" value="add">

</form>

<?php

require_once "../controler/usersControler.php";
#var_dump($_POST);

require_once "../html/footer.php";
?>