<?php

require_once 'model/carModel.php';

try {
    $sqlBrand = 'SELECT DISTINCT car_brand FROM car';
    $sqlModel = 'SELECT DISTINCT car_model FROM car';
    $sqlYear = 'SELECT DISTINCT car_year FROM car';
    $sqlKilometer = 'SELECT DISTINCT car_kilometer FROM car';
    $sqlPrice = 'SELECT DISTINCT car_price FROM car';
    $resultsBrand = [];
    $resultsModel = [];
    $resultsYear = [];
    $resultsKilometer = [];
    $resultsPrice = [];


    $pdo = new PDOServer();
    $sth = $pdo->pdo->prepare($sqlBrand);
    $sth->execute();
    while ($obj = $sth->fetchObject('Car'))
        $resultsBrand[] = $obj;

    echo '<fieldset class="fieldsFilters"><legend>MARQUES</legend>';
    foreach ($resultsBrand as $value) {
        echo '<label for="brand' . $value->car_brand . '"><input id="brand' . $value->car_brand . '" type="radio" name="brand" value="' . $value->car_brand . '">' . $value->car_brand . '</label>';
    }
    echo '</fieldset>';

    $sth = $pdo->pdo->prepare($sqlModel);
    $sth->execute();
    while ($obj = $sth->fetchObject('Car'))
        $resultsModel[] = $obj;
    echo '<fieldset class="fieldsFilters"><legend>Modèles</legend>';
    foreach ($resultsModel as $value) {
        echo '<label for="model' . $value->car_model . '"><input id="model' . $value->car_model . '" type="radio" name="model" value="' . $value->car_model . '">' . $value->car_model . '</label>';
    }
    echo '</fieldset>';

    $sth = $pdo->pdo->prepare($sqlYear);
    $sth->execute();
    while ($obj = $sth->fetchObject('Car'))
        $resultsYear[] = $obj;
    echo '<fieldset class="fieldsFilters"><legend>Mise en circulation</legend>';
    foreach ($resultsYear as $value) {
        echo '<label for="year' . $value->car_year . '"><input id="year' . $value->car_year . '" type="radio" name="year" value="' . $value->car_year . '">' . $value->car_year . '</label>';
    }
    echo '</fieldset>';

    $sth = $pdo->pdo->prepare($sqlKilometer);
    $sth->execute();
    while ($obj = $sth->fetchObject('Car'))
        $resultsKilometer[] = $obj;
    echo '<fieldset class="fieldsFilters"><legend>Kilometrage</legend>';
    foreach ($resultsKilometer as $value) {
        echo '<label for="kilometer' . $value->car_kilometer . '"><input id="kilometer' . $value->car_kilometer . '" type="radio" name="kilometer" value="' . $value->car_kilometer . '">' . $value->car_kilometer . '</label>';
    }
    echo '</fieldset>';

    $sth = $pdo->pdo->prepare($sqlPrice);
    $sth->execute();
    while ($obj = $sth->fetchObject('Car'))
        $resultsPrice[] = $obj;
    echo '<fieldset class="fieldsFilters"><legend>Prix</legend>';
    foreach ($resultsPrice as $value) {
        echo '<label for="price' . $value->car_price . '"><input id="price' . $value->car_price . '" type="radio" name="price" value="' . $value->car_price . '">' . $value->car_price . '</label>';
    }
    echo '</fieldset>';
} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo 'La connexion a échouée';
}
