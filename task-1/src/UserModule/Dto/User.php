<?php

namespace App\UserModule\Dto;

readonly class User
{
    public function __construct(
        public string $id,
        public string $name,
    ) {
    }
}
