<?php
require_once "../model/carModel.php";

try {

    $pdo = new PDO('mysql:host=localhost;dbname=parrot', 'root', '');

    $managerCar = new CarControler($pdo);
    $managerCar->addCar(
        $_POST['brand'],
        $_POST['model'],
        $_POST['price'],
        $_POST['year'],
        $_POST['kilometer'],
        $_POST['description'],
        $_FILES['img']['name']
    );
    var_dump($_POST);
    var_dump($_FILES);
    $uploaddir = '../img/vehicle/';
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);

    echo '<pre>';
    if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
} catch (PDOException $e) {
    echo "La connexion a échouée";
}
