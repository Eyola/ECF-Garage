<?php
require_once "../model/carModel.php";

/* class CarControler
{
    public function index()
    {
    }

    public function addCar()
    {
    }

    public function modifyCar()
    {
    }

    public function deleteCar()
    {
    }
} */

try {
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $price = $_POST['price'];
        $year = $_POST['year'];
        $kilometer = $_POST['kilometer'];
        $description = $_POST['description'];
        $img = $_FILES['img']['name'];

        $managerCar = new CarModel();
        $managerCar->addCar($brand, $model, $price, $year, $kilometer, $description, $img);

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
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "La connexion a échouée";
}
