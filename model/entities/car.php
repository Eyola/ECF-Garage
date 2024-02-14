<?php

class Car
{
    private string $carId;
    private string $carBrand;
    private string $carModel;
    private int $carPrice;
    private int $carYear;
    private int $carKilometer;
    private string $carDescription;
    private string $carImg;

    public function __construct(string $carBrand, string $carModel, int $carPrice, int $carYear, int $carKilometer, string $carDescription, string $carImg)
    {
        $this->setCarBrand($carBrand);
        $this->setCarModel($carModel);
        $this->setCarPrice($carPrice);
        $this->setCarYear($carYear);
        $this->setCarKilometer($carKilometer);
        $this->setCarDescription($carDescription);
        $this->setCarImg($carImg);
    }

    /**
     * Get the value of carId
     */
    public function getCarId()
    {
        return $this->carId;
    }

    /**
     * Set the value of carId
     *
     * @return  self
     */
    public function setCarId($carId)
    {
        $this->carId = $carId;
    }

    /**
     * Get the value of carBrand
     */
    public function getCarBrand()
    {
        return $this->carBrand;
    }

    /**
     * Set the value of carBrand
     *
     * @return  self
     */
    public function setCarBrand($carBrand)
    {
        $this->carBrand = $carBrand;
    }

    /**
     * Get the value of carModel
     */
    public function getCarModel()
    {
        return $this->carModel;
    }

    /**
     * Set the value of carModel
     *
     * @return  self
     */
    public function setCarModel($carModel)
    {
        $this->carModel = $carModel;
    }

    /**
     * Get the value of carPrice
     */
    public function getCarPrice()
    {
        return $this->carPrice;
    }

    /**
     * Set the value of carPrice
     *
     * @return  self
     */
    public function setCarPrice($carPrice)
    {
        $this->carPrice = $carPrice;
    }

    /**
     * Get the value of car
     Year
     */
    public function getCarYear()
    {
        return $this->carYear;
    }

    /**
     * Set the value of car
     Year
     *
     * @return  self
     */
    public function setCarYear($carYear)
    {
        $this->carYear = $carYear;
    }

    /**
     * Get the value of carKilometer
     */
    public function getCarKilometer()
    {
        return $this->carKilometer;
    }

    /**
     * Set the value of carKilometer
     *
     * @return  self
     */
    public function setCarKilometer($carKilometer)
    {
        $this->carKilometer = $carKilometer;
    }

    /**
     * Get the value of carDescription
     */
    public function getCarDescription()
    {
        return $this->carDescription;
    }

    /**
     * Set the value of carDescription
     *
     * @return  self
     */
    public function setCarDescription($carDescription)
    {
        $this->carDescription = $carDescription;
    }

    /**
     * Get the value of carImg
     */
    public function getCarImg()
    {
        return $this->carImg;
    }

    /**
     * Set the value of carImg
     *
     * @return  self
     */
    public function setCarImg($carImg)
    {
        $this->carImg = $carImg;
    }
}
