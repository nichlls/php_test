<?php

/**
 * Service for sending email notifications.
 */
class EmailSendingService implements SendingServiceInterface
{
    /**
     * @param NotificationValidation $validation Validation for common notification logic
     */
    public function __construct(
        private NotificationValidation $validation
    ) {
    }

    /**
     * Checks if the notification type is Email, returns false otherwise.
     * 
     * @param NotificationType $type Notification type to check
     * @return bool True if notification type is Email, false otherwise
     */
    public function supportsNotificationType(NotificationType $type): bool
    {
        return $type === NotificationType::Email;
    }

    /**
     * Sends an email notification.
     * 
     * @param NotificationInterface $notification The notification to send
     * @throws SendingException If sending fails
     * @return SendResult The result of the send operation
     */
    public function send(NotificationInterface $notification): SendResult
    {
        $this->validation->validate($notification);

        // Send email
        try {
            // Sending logic

            return new SendResult(sentAt: new DateTime(), messageId: uniqid());
        } catch (Exception $e) {
            throw new SendingException($e->getMessage(), $e->getCode(), $e);
        }
    }
}