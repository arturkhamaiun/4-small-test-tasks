<?php

namespace App\UserModule\Storage;

use App\UserModule\Dto\User;

class MySqlStorage implements Storage
{
    public function __construct(
        protected \PDO $pdo,
    ) {
    }

    public function addUser(User $user): void
    {
        $id = $user->id;
        $name = $user->name;

        $stmt = $this->pdo->prepare("INSERT INTO users (id, name) VALUES (:id, :name)");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    }

    public function findUserById(string $id): User|null
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $result ? new User($result['id'], $result['name']) : null;
    }
}
