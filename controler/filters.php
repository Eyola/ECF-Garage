<?php
require_once "../model/carModel.php";
require_once "../model/entities/car.php";

$sql = 'SELECT * FROM cars';

try {

    if (isset($_POST['action']) && $_POST['action'] == 'filter') {
        $filters = [];
        $params = [];

        if (isset($_POST['brand']) && $_POST['brand']) {
            $filters[] = 'car_brand = :brand';
            $params['car_brand'] = $_POST['brand'];
        }

        if (isset($_POST['model']) && $_POST['model']) {
            $filters[] = 'model = :model';
            $params['model'] = $_POST['model'];
        }

        if (isset($_POST['color']) && $_POST['color']) {
            $filters[] = 'color = :color';
            $params['color'] = $_POST['color'];
        }

        if (isset($_POST['priceLow']) && $_POST['priceLow'] && isset($_POST['priceHigh']) && $_POST['priceHigh']) {
            $filters[] = '(:priceLow <= price AND price <= :priceHigh)';
            $params['priceLow'] = $_POST['priceLow'];
            $params['priceHigh'] = $_POST['priceHigh'];
        }
        echo "In filter.php : \$params";
        var_dump($params);
        echo "In filter.php : \$filters";
        var_dump($filters);

        $pdo = new PDOServer();
        $res = $pdo->filters($filters, $sql, $params);
        /* if ($filters)
            // SELECT * FROM cars WHERE brand = :brand AND model = :model
            $sql .= ' WHERE ' . implode(' AND ', $filters);
        var_dump($sql);
        $pdo = new PDOServer();
        $sth = $pdo->getAll('CarModlel', $sql, $params);
        $sth->execute($params);

        // retourne que la 1ere ligne des résultats de la BDD
        $sth->fetchObject('Car');

        // retourne toutes les lignes des résultats de la BDD
        $results = [];
        while ($obj = $sth->fetchObject('Car'))
            $results[] = $obj;
    } */

        // $results
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "La connexion a échouée";
}
