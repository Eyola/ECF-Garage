<?php

require_once "pdoModel.php";
require_once "entities/user.php";

class UsersModel extends PDOServer
{

    public function addUser(
        string $usersRole,
        string $usersName,
        string $usersFirstName,
        string $usersMail,
        string $usersPassword
    ) {
        $user = $this->pdo->prepare(
            'INSERT INTO users (users_role, users_name, users_first_Name, users_mail, users_password) 
            VALUES (:usersRole, :usersName, :usersFirstName, :usersMail, :usersPassword)'
        );
        $user->bindValue(':usersRole', $usersRole, PDO::PARAM_STR);
        $user->bindValue(':usersName', $usersName, PDO::PARAM_STR);
        $user->bindValue(':usersFirstName', $usersFirstName, PDO::PARAM_STR);
        $user->bindValue(':usersMail', $usersMail, PDO::PARAM_STR);
        $user->bindValue(':usersPassword', password_hash($usersPassword, PASSWORD_BCRYPT));
        return $user->execute();
    }

    public function connectUser(string $usersMail, string $usersPassword)
    {
        $user = $this->pdo->prepare('SELECT * FROM users WHERE users_mail = :email');
        $user->bindValue(':email', $usersMail, PDO::PARAM_STR);
        if ($user->execute()) {
            $userConnect = $user->fetch(PDO::FETCH_ASSOC);
            var_dump($userConnect);
            if ($userConnect === false) {
                echo "Identifiants invalides";
            } else {
                if ($usersPassword === $userConnect['users_password']) {
                    echo "Bonjour" . ' ' . $userConnect['users_first_name'] . ' ' . $userConnect['users_name'];
                }
            }
        }
    }
}
