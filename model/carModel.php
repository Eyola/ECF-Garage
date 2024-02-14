<?php

require_once "/pdoModel.php";
require_once "/entities/car.php";

class CarModel extends PDO
{

    public function addCar(
        string $car_brand,
        string $car_model,
        int $car_price,
        int $car_year,
        int $car_kilometer,
        string $car_description,
        string $car_img
    ) {
        /*  $car = new Car($car_brand...); */

        $statement = $this->pdo->prepare(
            'INSERT INTO car (car_id, car_brand, car_model, car_price, car_year, car_kilometer, car_description, car_img) 
            VALUES (UUID(), :car_brand, :car_model, :car_price, :car_year, :car_kilometer, :car_description, :car_img)'
        );
        $statement->bindValue(':car_brand', $car_brand, PDO::PARAM_STR);
        $statement->bindValue(':car_model', $car_model, PDO::PARAM_STR);
        $statement->bindValue(':car_price', $car_price, PDO::PARAM_INT);
        $statement->bindValue(':car_year', $car_year, PDO::PARAM_INT);
        $statement->bindValue(':car_kilometer', $car_kilometer, PDO::PARAM_INT);
        $statement->bindValue(':car_description', $car_description, PDO::PARAM_STR);
        $statement->bindValue(':car_img', $car_img, PDO::PARAM_STR);
        return $statement->execute();
    }

    /**
     * Get the value of car_id
     */
    public function getCar_id()
    {
        return $this->car_id;
    }

    /**
     * Set the value of car_id
     *
     * @return  self
     */
    public function setCar_id($car_id)
    {
        $this->car_id = $car_id;
    }
}
