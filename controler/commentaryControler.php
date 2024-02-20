<?php
require_once "model/commentaryModel.php";

try {
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        $commentaryName = $_POST['name'];
        $commentaryFirstName = $_POST['firstName'];
        $commentaryMail = $_POST['mail'];
        $commentaryMessage = $_POST['message'];

        $managerCommentary = new CommentaryModel();
        $managerCommentary->addCommentary($commentaryName, $commentaryFirstName, $commentaryMail, $commentaryMessage);
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "La connexion a échouée";
}
