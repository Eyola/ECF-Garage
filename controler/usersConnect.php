<?php
session_start();
require_once "../model/usersModel.php";

try {
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $usersMail = $_POST['login'];
        $usersPassword = $_POST['password'];
        $managerUser = new UsersModel();
        $test = $managerUser->connectUser($usersMail, $usersPassword);
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "La connexion a échouée";
}
