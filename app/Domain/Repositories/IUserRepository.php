<?php

namespace App\Domain\Repositories;

use App\Domain\Models\User;

interface IUserRepository
{
    public function findById(int $id): User | null;
    public function findByEmail(string $email): User | null;
    public function findByToken(string $token): User | null;
}
