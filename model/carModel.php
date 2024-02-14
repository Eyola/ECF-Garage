<?php

require_once "pdoModel.php";
require_once "entities/car.php";

class CarModel extends PDOServer
{

    public function addCar(
        string $carBrand,
        string $carModel,
        int $carPrice,
        int $carYear,
        int $carKilometer,
        string $carDescription,
        string $carImg
    ) {
        $car = $this->pdo->prepare(
            'INSERT INTO car (car_id, car_brand, car_model, car_price, car_year, car_kilometer, car_description, car_img) 
            VALUES (UUID(), :carBrand, :carModel, :carPrice, :carYear, :carKilometer, :carDescription, :carImg)'
        );
        $car->bindValue(':carBrand', $carBrand, PDO::PARAM_STR);
        $car->bindValue(':carModel', $carModel, PDO::PARAM_STR);
        $car->bindValue(':carPrice', $carPrice, PDO::PARAM_INT);
        $car->bindValue(':carYear', $carYear, PDO::PARAM_INT);
        $car->bindValue(':carKilometer', $carKilometer, PDO::PARAM_INT);
        $car->bindValue(':carDescription', $carDescription, PDO::PARAM_STR);
        $car->bindValue(':carImg', $carImg, PDO::PARAM_STR);
        return $car->execute();
    }
}
