<?php

namespace App\Infrastructure\Providers;

use App\Domain\Services\User\Ports\IUserService;
use App\Domain\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider
{
    public $bindings = [
        IUserService::class => UserService::class,
    ];
}
