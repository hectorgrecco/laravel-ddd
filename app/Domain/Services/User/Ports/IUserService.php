<?php

namespace App\Domain\Services\User\Ports;

use App\Domain\Models\User;

interface IUserService
{
    public function getById(int $id): User;
    public function getByEmail(string $email): User;
    public function getByToken(string $token): User;
}
