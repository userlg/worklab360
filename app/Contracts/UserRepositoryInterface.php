<?php

namespace App\Contracts;

use App\Models\User;

interface UserRepositoryInterface
{
    public function getAllUsers(): array;

    public function findUserById(string $id): ?User;

    public function findUserByEmail(string $email): ?User;

    public function createUser(array $data): User;

    public function updateUser(string $id, array $data): bool;

    public function deleteUser(string $id): bool;

    public function getSerial(User $user): string;

    public function getRoleName(User $user): ?string;

    public function hasRoles(User $user): bool;

    public function sendVerificationEmail(User $user): void;
}
