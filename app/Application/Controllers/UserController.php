<?php

namespace App\Application\Controllers;

use App\Application\Resources\UserResource;
use App\Domain\Services\User\Ports\IUserService;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class UserController
{
    public function __construct(
        private readonly IUserService $userService
    )
    {
    }

    public function getById(int $id): UserResource
    {
        try {
            $user = $this->userService->getById($id);
            return new UserResource($user);
        } catch (\Exception $exception) {
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

    public function getByEmail(string $email): UserResource
    {
        try {
            $user = $this->userService->getByEmail($email);
            return new UserResource($user);
        } catch (\Exception $exception) {
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

    public function getByToken(string $token): UserResource
    {
        try {
            $user = $this->userService->getByToken($token);
            return new UserResource($user);
        } catch (\Exception $exception) {
            throw new BadRequestHttpException($exception->getMessage());
        }
    }
}
