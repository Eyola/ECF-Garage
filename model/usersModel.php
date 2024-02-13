<?php

class Users
{
    private int $users_id;
    private string $users_role;
    private string $users_name;
    private string $users_first_name;
    private string $users_mail;
    private string $users_password;
}


class UsersControler
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addUser(string $users_role, string $users_name, string $users_first_name, string $users_mail, string $users_password)
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO users (users_role, users_name, users_first_name, users_mail, users_password) 
            VALUES (:users_role, :users_name, :users_first_name, :users_mail, :users_password)'
        );
        $statement->bindValue(':users_role', $users_role, PDO::PARAM_STR);
        $statement->bindValue(':users_name', $users_name, PDO::PARAM_STR);
        $statement->bindValue(':users_first_name', $users_first_name, PDO::PARAM_STR);
        $statement->bindValue(':users_mail', $users_mail, PDO::PARAM_STR);
        $statement->bindValue(':users_password', $users_password, PDO::PARAM_STR);
        return $statement->execute();
    }
}
