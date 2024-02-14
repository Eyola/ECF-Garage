<?php
require_once "../model/usersModel.php";

try {
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        $usersMail = $_POST['login'];
        $usersPassword = $_POST['password'];
    }
    $managerUser = new UsersModel();
    $managerUser->connectUser($usersMail, $usersPassword);
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "La connexion a échouée";
}
