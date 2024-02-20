<?php
require_once "model/usersModel.php";

try {
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        $usersName = $_POST['name'];
        $usersFirstName = $_POST['firstName'];
        $usersMail = $_POST['mail'];
        $usersPassword = $_POST['password'];
        $managerUser = new UsersModel();
        $managerUser->addUser($usersName, $usersFirstName, $usersMail, $usersPassword);
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "La connexion a échouée";
}
