<?php

namespace App\UserModule;

use App\UserModule\Storage\MySqlStorage;
use App\UserModule\Storage\Storage;
use PDO;

class Factory
{
    public function createConfig(): Config
    {
        return new Config();
    }

    public function createStorage(): Storage
    {
        return new MySqlStorage($this->createPdo());
    }

    protected function createPdo(): PDO
    {
        return new PDO($this->createConfig()->getMySqlConnectionString());
    }
}
