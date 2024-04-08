<?php

namespace SOLID\S;

class UserRepository
{
    public function getUserData(int $userId): array
    {
        return ['id' => 1];
    }
}