<?php

class NotificationService implements NotificationServiceInterface
{
    public function sendNotification(NotificationInterface $notification): SendResult
    {
        $service = $this->getService($notification->getType());
        return $service->send($notification);
    }

    // Returns appropriate service for required type
    // Otherwise it will throw an exception
    protected function getService(NotificationType $type): SendingServiceInterface
    {
        switch ($type) {
            case NotificationType::Email:
                return new EmailSendingService();
            case NotificationType::SMS:
                return new SmsSendingService();
            default:
                throw new InvalidArgumentException("Unsupported type: $type->name");
        }
    }
}