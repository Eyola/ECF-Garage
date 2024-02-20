<?php

require_once '../model/pdoModel.php';
require_once '../model/carModel.php';

try {
    $sql = 'SELECT DISTINCT car_brand, car_model, car_year, car_kilometer, car_price FROM car';
    $results = [];
    $params = [];

    $pdo = new PDOServer();
    $sth = $pdo->pdo->prepare($sql);
    $sth->execute();
    while ($obj = $sth->fetchObject('Car'))
        $results[] = $obj;

    echo '<fieldset class="fieldsFilters"><legend>MARQUES</legend>';
    foreach ($results as $value) {
        echo '<label for="brand">' . $value->car_brand . '<input type="checkbox" name="brand"' . $value->car_brand . '></label>';
    }
    echo '</fieldset>';

    echo '<fieldset class="fieldsFilters"><legend>Modèles</legend>';
    foreach ($results as $value) {
        echo '<label for="model">' . $value->car_model . '<input type="checkbox" name="model"' . $value->car_model . '></label>';
    }
    echo '</fieldset>';

    echo '<fieldset class="fieldsFilters"><legend>Mise en circulation</legend>';
    foreach ($results as $value) {
        echo '<label for="year">' . $value->car_year . '<input type="checkbox" name="year"' . $value->car_year . '></label>';
    }
    echo '</fieldset>';

    echo '<fieldset class="fieldsFilters"><legend>Kilometrage</legend>';
    foreach ($results as $value) {
        echo '<label for="kilometer">' . $value->car_kilometer . '<input type="checkbox" name="kilometer"' . $value->car_kilometer . '></label>';
    }
    echo '</fieldset>';

    echo '<fieldset class="fieldsFilters"><legend>Prix</legend>';
    foreach ($results as $value) {
        echo '<label for="model">' . $value->car_model . '<input type="checkbox" name="model"' . $value->car_model . '></label>';
    }
    echo '</fieldset>';
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo 'La connexion a échouée';
}
