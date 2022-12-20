<?php

class Hike extends Database
{
    public function findAll(): array|false
    {
        try {
           return $this->query(
                'SELECT * FROM hikes LIMIT 8'
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function find(string $code): array|false
    {
        try {
            return $this->query(
                "SELECT * FROM hikes WHERE hikeCode = ?",
                [
                    $code
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
}