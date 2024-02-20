<?php
require_once "model/carModel.php";
require_once "model/entities/car.php";



try {

    $sql = "SELECT car_brand, car_model, car_price, car_year, car_kilometer, car_img FROM car LIMIT 3";
    $car = new PDOServer();
    $res = $car->getAll('Car', $sql);
    foreach ($res as $value) {
        echo '<div class="car">';
        echo '<div class="brand"> Marque : ' . $value->car_brand . '</div>';
        echo '<div class="model"> Modèle : ' . $value->car_model . '</div>';
        echo '<div class="kilometer"> Kilometrage : ' . $value->car_kilometer . 'km ' . '</div>';
        echo '<div class="price"> Prix : ' . $value->car_price . '€' . '</div>';
        echo '<div><img alt="img not found" class="img_vehicle" src="/img/vehicle/' . $value->car_img . '"/></div>';
        echo '</div>';
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "La connexion a échouée";
}
