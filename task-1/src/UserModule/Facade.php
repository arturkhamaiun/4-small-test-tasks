<?php

namespace App\UserModule;

use App\UserModule\Dto\User;

class Facade
{
    private function __construct(
        protected Factory $factory
    ) {
    }

    public static function create(): self
    {
        return new Facade(new Factory());
    }

    public function addUser(User $user): void
    {
        $this->factory->createStorage()->addUser($user);
    }

    public function findUserById(string $id): User|null
    {
        return $this->factory->createStorage()->findUserById($id);
    }
}
