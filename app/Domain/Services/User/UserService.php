<?php

namespace App\Domain\Services\User;

use App\Domain\Models\User;
use App\Domain\Repositories\IUserRepository;
use App\Domain\Services\User\Ports\IUserService;

class UserService implements IUserService
{

    public function __construct(
        private readonly IUserRepository $userRepository
    )
    {
    }

    public function getById(int $id): User
    {
        $user = $this->userRepository->findById($id);
        if(!$user) {
            throw new \Exception("User not found");
        }
        return $user;
    }

    public function getByEmail(string $email): User
    {
        $user = $this->userRepository->findByEmail($email);
        if(!$user) {
            throw new \Exception("User not found");
        }
        return $user;
    }

    public function getByToken(string $token): User
    {
        $user = $this->userRepository->findByToken($token);
        if(!$user) {
            throw new \Exception("User not found");
        }
        return $user;
    }
}
