<?php

declare(strict_types=1);

namespace App\Endpoint\Web;

use Exception;
use Spiral\Prototype\Traits\PrototypeTrait;
use Spiral\Router\Annotation\Route;

final class RegisterController
{
    public function register(): string
    {
        return "Hello Worlds";
    }
}
