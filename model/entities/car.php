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

    public function setBrand($car_brand)
    {
        $this->car_brand = $car_brand;
    }
}
