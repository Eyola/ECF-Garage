<?php

class Commentary
{
    private int $commentary_id;
    private string $commentary_name;
    private string $commentary_first_name;
    private string $commentary_statut;
    private string $commentary_mail;
    private string $commentary_message;
}

class CommentaryControler
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addCommentary(
        string $commentary_name,
        string $commentary_first_name,
        string $commentary_mail,
        string $commentary_message
    ) {
        $statement = $this->pdo->prepare(
            'INSERT INTO commentary (commentary_id, commentary_name, commentary_first_name, commentary_mail, commentary_message)
            VALUES (UUID(), :commentary_name, :commentary_first_name, :commentary_mail, :commentary_message)'
        );
        $statement->bindValue('commentary_name', $commentary_name, PDO::PARAM_STR);
        $statement->bindValue('commentary_first_name', $commentary_first_name, PDO::PARAM_STR);
        $statement->bindValue('commentary_mail', $commentary_mail, PDO::PARAM_STR);
        $statement->bindValue('commentary_message', $commentary_message, PDO::PARAM_STR);
        return $statement->execute();
    }
}
