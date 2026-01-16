<?php

class NotificationService implements NotificationServiceInterface
{
    public function __construct(
        private NotificationValidation $validation
    ) {
    }

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
                return new EmailSendingService($this->validation);
            case NotificationType::SMS:
                return new SmsSendingService($this->validation);
            default:
                throw new InvalidArgumentException("Unsupported type: $type->name");
        }
    }
}