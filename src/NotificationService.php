<?php

class NotificationService implements NotificationServiceInterface
{
    public function sendNotification(string $channel, string $recipient, string $message): bool
    {
        $service = $this->getService($channel);
        return $service->send($recipient, $message);
    }

    protected function getService(string $channel): EmailSendingService
    {
        switch ($channel) {
            case 'email':
                return new EmailSendingService();
            default:
                throw new InvalidArgumentException("Unsupported channel: $channel");
        }
    }
}