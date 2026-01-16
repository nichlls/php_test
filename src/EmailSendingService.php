<?php

/**
 * Service for sending email notifications.
 */
class EmailSendingService implements SendingServiceInterface
{
    // Returns true if type equals Email, false otherwise
    public function supportsNotificationType(NotificationType $type): bool
    {
        return $type === NotificationType::Email;
    }

    // Returns the outcome of sending email, using SendResult
    public function send(NotificationInterface $notification): SendResult
    {
        // Send email here

        return new SendResult(sentAt: new DateTime(datetime: "now"), messageId: uniqid());
    }
}