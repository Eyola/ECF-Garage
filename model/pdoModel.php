<?php



class PDOServer
{
    public PDO $pdo;

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
}
