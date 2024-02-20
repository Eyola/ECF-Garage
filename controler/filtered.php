<?php
require_once "../model/carModel.php";
require_once "../model/entities/car.php";



try {
    $sql = 'SELECT * FROM car';
    $results = [];
    $params = [];

    if (isset($_POST['action']) && $_POST['action'] == 'filter') {
        $filters = [];

        if (isset($_POST['brand']) && $_POST['brand']) {
            $filters[] = 'car_brand = :brand';
            $params['brand'] = $_POST['brand'];
        }

        if (isset($_POST['model']) && $_POST['model']) {
            $filters[] = 'car_model = :model';
            $params['model'] = $_POST['model'];
        }

        if (isset($_POST['year']) && $_POST['year']) {
            $filters[] = 'car_year = :year';
            $params['year'] = $_POST['year'];
        }

        if (isset($_POST['kilometer']) && $_POST['kilometer']) {
            $filters[] = 'car_kilometer = :kilometer';
            $params['kilometer'] = $_POST['kilometer'];
        }

        if (isset($_POST['priceLow']) && $_POST['priceLow'] && isset($_POST['priceHigh']) && $_POST['priceHigh']) {
            $filters[] = '(:priceLow <= price AND price <= :priceHigh)';
            $params['priceLow'] = $_POST['priceLow'];
            $params['priceHigh'] = $_POST['priceHigh'];
        }


        if ($filters) {
            // SELECT * FROM cars WHERE brand = :brand AND model = :model
            $sql .= ' WHERE ' . implode(' AND ', $filters);
        }

        $pdo = new PDOServer();
        $sth = $pdo->pdo->prepare($sql);
        $sth->execute($params);

        // retourne toutes les lignes des résultats de la BDD
        while ($obj = $sth->fetchObject('Car'))
            $results[] = $obj;
        var_dump($results);


        foreach ($results as $value) {
            echo '<div class="car">';
            echo '<div classe="brand"> Marque : ' . $value->car_brand . '</div>';
            echo '<div classe="model"> Modèle : ' . $value->car_model . '</div>';
            echo '<div classe="kilometer"> Kilometrage : ' . $value->car_kilometer . 'km ' . '</div>';
            echo '<div classe="price"> Prix : ' . $value->car_price . '€' . '</div>';
            if ($value->car_img) {
                echo '<div><img class="img_vehicle" src="/img/vehicle/' . $value->car_img . '"/></div>';
            }
            echo '</div>';
        }
    }
    // $results
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "La connexion a échouée";
}
