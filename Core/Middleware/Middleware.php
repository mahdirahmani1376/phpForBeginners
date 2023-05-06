<?php

namespace Core\Middleware;

class Middleware
{
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Authenticated::class,
    ];

    public static function resolve($key)
    {
        if (!$key)
        {
            return;
        }

        $middleware = static::MAP ?? false;
        if (!$middleware){
            throw new \Exception("no middleware found for key {$key}.");
        }

        (new $middleware)->handle();
    }
}