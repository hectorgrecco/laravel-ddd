<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Models\User;
use App\Domain\Repositories\IUserRepository;

class EloquentUserRepository implements IUserRepository
{
    public function findById(int $id): User|null
    {
        $user = User::query()->find($id);
        return $user;
    }

    public function findByEmail(string $email): User|null
    {
        $user = User::query()->where('email', $email)->first();
        return $user;
    }

    public function findByToken(string $token): User|null
    {
        $user = User::query()->where('token', $token)->first();
        return $user;
    }
}
