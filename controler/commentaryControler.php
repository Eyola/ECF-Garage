<?php
require_once "../model/commentaryModel.php";

try {

    $pdo = new PDO('mysql:host=localhost;dbname=parrot', 'root', '');

    $managerCommentary = new CommentaryControler($pdo);
    $managerCommentary->addCommentary(
        $_POST['name'],
        $_POST['first_name'],
        $_POST['mail'],
        $_POST['message']
    );
} catch (PDOException $e) {
    echo "La connexion a échouée";
}
