<?php
declare(strict_types=1);

abstract class Database
{
    private PDO $pdo;

    public function __construct()
    {
        $x = 'playground-user';
        $y = 'playground-pass1234';
        $this->pdo = new PDO(
            'mysql:host=mysql;dbname=hikes;',$x,$y
        );

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    protected function query(string $query, array $params = []): false|PDOStatement
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);

        return $stmt;
    }

    public function getLastInsertId(): false|string
    {
        return $this->pdo->lastInsertId();
    }
}