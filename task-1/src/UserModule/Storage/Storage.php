<?php

namespace App\UserModule\Storage;

use App\UserModule\Dto\User;

interface Storage
{
    public function addUser(User $user): void;

    public function findUserById(string $id): User|null;
}
