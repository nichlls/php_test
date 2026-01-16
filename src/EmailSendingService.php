<?php

/**
 * Service for sending email notifications.
 */
class EmailSendingService implements SendingServiceInterface
{
    public function __construct(
        private NotificationValidation $validation
    ) {
    }

    // Returns true if type equals Email, false otherwise
    public function supportsNotificationType(NotificationType $type): bool
    {
        return $type === NotificationType::Email;
    }

    // Returns the outcome of sending email, using SendResult
    public function send(NotificationInterface $notification): SendResult
    {
        // Check common validation logic
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