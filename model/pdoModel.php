<?php

class PDO
{
    protected PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=parrot', 'root', '');
    }
}
