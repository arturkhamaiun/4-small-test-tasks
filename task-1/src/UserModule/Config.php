<?php

namespace App\UserModule;

class Config
{
    public function getMySqlConnectionString(): string
    {
        return getenv('MYSQL_CONNECTION_STRING');
    }
}
