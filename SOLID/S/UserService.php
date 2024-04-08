<?php

namespace SOLID\S;

class UserService
{
    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly UserActivityRepository $userActivityRepository,
        private readonly EmailService $emailService
    ) {
    }

    public function getUserData(int $userId): array
    {
        return $this->userRepository->getUserData($userId);
    }

    public function logActivity(int $userId, string $action): void
    {
        $this->userActivityRepository->logActivity($userId, $action);
    }

    public function sendEmail(string $email, string $message): void
    {
        $this->emailService->sendEmail($email, $message);
    }
}