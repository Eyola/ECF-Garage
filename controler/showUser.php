<?php
require_once "../model/usersModel.php";
require_once "../model/entities/user.php";

try {
    if (isset($_SESSION['admin']) and $_SESSION['admin'] === true) {
        $sql = 'SELECT users_name, users_first_name, users_mail FROM users';
        $users = new PDOServer();
        $res = $users->getAll('Users', $sql);
        echo "<table>";
        foreach ($res as $value) {
            echo "<tr>";
            echo "<td>" . ($value->users_first_name) . "</td>";
            echo "<td>" . ($value->users_name) . "</td>";
            echo "<td>" . ($value->users_mail) . "</td>";
        }
        echo "</table";
    } else {
        echo "Vous n'avez les droits.";
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "La connexion a échouée";
}
