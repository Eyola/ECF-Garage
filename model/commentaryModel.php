<?php

require_once "pdoModel.php";
require_once "entities/commentary.php";

class CommentaryModel extends PDOServer
{

    public function addCommentary(
        string $commentaryName,
        string $commentaryFirstName,
        string $commentaryMail,
        string $commentaryMessage
    ) {
        $commentary = $this->pdo->prepare(
            'INSERT INTO commentary (commentary_id, commentary_name, commentary_first_name, commentary_mail, commentary_message)
            VALUES (UUID(), :commentaryName, :commentaryFirstName, :commentaryMail, :commentaryMessage)'
        );
        $commentary->bindValue('commentaryName', $commentaryName, PDO::PARAM_STR);
        $commentary->bindValue('commentaryFirstName', $commentaryFirstName, PDO::PARAM_STR);
        $commentary->bindValue('commentaryMail', $commentaryMail, PDO::PARAM_STR);
        $commentary->bindValue('commentaryMessage', $commentaryMessage, PDO::PARAM_STR);
        return $commentary->execute();
    }
}
