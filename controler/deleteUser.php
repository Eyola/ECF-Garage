<?php
require_once "model/usersModel.php";

try {
    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        echo "coucou";
        $usersMail = $_POST['mail'];
        $managerUser = new UsersModel();
        $managerUser->deleteUser($usersMail);
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "La connexion a échouée";
}
