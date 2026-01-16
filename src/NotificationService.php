<?php

/**
 * Service for sending notifications to appropriate channels.
 */
class NotificationService implements NotificationServiceInterface
{
    /**
     * @param NotificationValidation $validation Common validation logic for notification data
     */
    public function __construct(
        private NotificationValidation $validation
    ) {
    }

    /**
     * Summary of sendNotification
     * 
     * @param NotificationInterface $notification Notification to send
     * @return SendResult Result of the send operation
     */
    public function sendNotification(NotificationInterface $notification): SendResult
    {
        $service = $this->getService($notification->getType());
        return $service->send($notification);
    }

    /**
     * Gets the appropriate sending service for the given notification type.
     * 
     * @param NotificationType $type Notification type
     * @throws InvalidArgumentException If type is not supported
     * @return EmailSendingService|SmsSendingService Sending service instance
     */
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