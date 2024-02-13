<?php
require_once "../model/usersModel.php";

try {

    $pdo = new PDO('mysql:host=localhost;dbname=parrot', 'root', '');

    $managerUser = new UsersControler($pdo);
    $managerUser->addUser(
        $_POST['role'],
        $_POST['name'],
        $_POST['first_name'],
        $_POST['mail'],
        $_POST['password']
    );
} catch (PDOException $e) {
    echo "La connexion a échouée";
}
