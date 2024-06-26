<?php

declare(strict_types=1);

namespace App\Helper;

class Client
{

    public function __construct(
        private readonly string $apiUrl
    )
    {
    }

    public function send(... $args): void
    {

    }

}