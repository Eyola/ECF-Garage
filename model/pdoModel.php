<?php

class PDOServer
{
    protected PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=parrot', 'root', '');
    }

    public function getAll(string $classname = '', ?string $sql, ?array $params = []): bool|array
    {
        if (!$sql)
            return false;

        $sth = $this->pdo->prepare($sql);
        $sth->execute($params);

        // retourne toutes les lignes des résultats de la BDD
        $results = [];
        while ($obj = $sth->fetchObject($classname))
            $results[] = $obj;

        return $results;
    }

    public function filters($filters, $sql, $params)
    {
        if ($filters)
            // SELECT * FROM cars WHERE brand = :brand AND model = :model
            $sql .= ' WHERE ' . implode(' AND ', $filters);

        echo "\$sql : ";
        var_dump($sql);
        echo "\$params : ";
        var_dump($params);

        $sth = $this->pdo->prepare($sql);
        echo "\$sth : ";
        var_dump($sth);

        $sth->execute(array(':brand' => 'Citroen'));
        echo "3 : ";
        var_dump($sth);
        var_dump($sql);

        // retourne que la 1ere ligne des résultats de la BDD
        $sth->fetchObject('Car');
        var_dump($sql);

        // retourne toutes les lignes des résultats de la BDD
        $results = [];
        while ($obj = $sth->fetchObject('Car')) {
            $results[] = $obj;
            var_dump($sql);
        }
        return $results;
    }
}
