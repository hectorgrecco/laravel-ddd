<?php

namespace App\Infrastructure\Providers;

use App\Domain\Repositories\IUserRepository;
use App\Infrastructure\Repositories\EloquentUserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        IUserRepository::class => EloquentUserRepository::class,
    ];
}
