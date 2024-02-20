    <form action="" method="post" class="userForm">



        <label for="name">Nom

            <input type="text" name="name" id="name">
        </label>

        <label for="firstName">Prénom

            <input type="text" name="firstName" id="firstName">
        </label>

        <label for="mail">Adresse mail

            <input type="email" name="mail" id="mail">
        </label>

        <label for="password">Mot de passe

            <input type="password" name="password" id="password">
        </label>

        <input type="submit" value="ajouter">
        <input type="hidden" name="action" value="add">

    </form>

    <?php
    require_once "controler/usersControler.php";
    ?>