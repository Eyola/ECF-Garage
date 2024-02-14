<?php
require_once "../model/usersModel.php";


try {
    $managerUser = new UsersModel();
    $managerUser->addUser(
        $_POST['role'],
        $_POST['name'],
        $_POST['first_name'],
        $_POST['mail'],
        $_POST['password']
    );
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "La connexion a échouée";
}
