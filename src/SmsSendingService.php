<?php

/**
 * Service for sending text notifications to mobile phone numbers.
 */
class SmsSendingService implements SendingServiceInterface
{
    // Returns true if type equals SMS, false otherwise
    public function supportsNotificationType(NotificationType $type): bool
    {
        return $type === NotificationType::SMS;
    }

    // Returns the outcome of sending SMS, using SendResult
    public function send(NotificationInterface $notification): SendResult
    {
        // Send SMS
    }
}