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
        $user = new Users($usersRole, $usersName, $usersFirstName, $usersMail, $usersPassword);
        $user = $this->pdo->prepare(
            'INSERT INTO users (users_role, users_name, users_first_Name, users_mail, users_password) 
            VALUES (:usersRole, :usersName, :usersFirstName, :usersMail, :usersPassword)'
        );
        $user->bindValue(':usersRole', $usersRole, PDO::PARAM_STR);
        $user->bindValue(':usersName', $usersName, PDO::PARAM_STR);
        $user->bindValue(':usersFirstName', $usersFirstName, PDO::PARAM_STR);
        $user->bindValue(':usersMail', $usersMail, PDO::PARAM_STR);
        $user->bindValue(':usersPassword', $usersPassword, PDO::PARAM_STR);
        return $user->execute();
    }
}
