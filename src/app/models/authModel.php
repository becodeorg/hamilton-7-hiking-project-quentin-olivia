<?php

declare(strict_types=1);

class AuthModel extends Database
{
    public function create(string $username, string $email, string $password): void
    {
        if (!$this->query(
            "INSERT INTO users(nickname, email, password) VALUES (?, ?, ?)",
            [
                $username,
                $email,
                $password
            ]
        )) {
            throw new Exception('Error during registration.');
        }
    }

    public function find(string $username): array
    {
        $user = $this->query(
            "SELECT * FROM users WHERE nickname = ?",
            [
                $username
            ]
        )->fetch();

        if (!$user) {
            throw new Exception('Failed login attempt : connection error.');
        }

        return $user;
    }
}