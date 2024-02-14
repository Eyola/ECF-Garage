<?php

class Car
{
    private string $car_id;
    private string $car_brand;
    private string $car_model;
    private int $car_price;
    private int $car_year;
    private int $car_kilometer;
    private string $car_description;
    private string $car_img;
}

class CarControler
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addCar(
        string $car_brand,
        string $car_model,
        int $car_price,
        int $car_year,
        int $car_kilometer,
        string $car_description,
        string $car_img
    ) {
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
}
