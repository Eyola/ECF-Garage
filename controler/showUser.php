<?php
require_once "model/usersModel.php";
require_once "model/entities/user.php";



try {
    $sql = "SELECT users_name, users_first_name, users_mail FROM users WHERE users_role = 'user'";
    $users = new PDOServer();
    $res = $users->getAll('Users', $sql);
    echo '<table class="userTable">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Mail</th>
                <th>selectionner utilisateur</th>
            </tr>
        </thead>';
    foreach ($res as $value) {
        echo '<td>' . ($value->users_first_name) . '</td>';
        echo '<td>' . ($value->users_name) . '</td>';
        echo '<td>' . ($value->users_mail) . '</td>';
        echo '<td><form action="" method="post"><input type="submit" value="supprimer"></form></td></tr>';
    }
    echo '</table>';
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "La connexion a échouée";
}
