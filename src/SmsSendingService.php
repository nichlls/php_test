<?php

/**
 * Service for sending text notifications to mobile phone numbers.
 */
class SmsSendingService implements SendingServiceInterface
{
    public function __construct(
        private NotificationValidation $validation
    ) {
    }

    // Returns true if type equals SMS, false otherwise
    public function supportsNotificationType(NotificationType $type): bool
    {
        return $type === NotificationType::SMS;
    }

    // Returns the outcome of sending SMS, using SendResult
    public function send(NotificationInterface $notification): SendResult
    {
        $this->validation->validate($notification);

        // Send SMS
        try {
            // Sending logic

            return new SendResult(sentAt: new DateTime(), messageId: uniqid());
        } catch (Exception $e) {
            throw new SendingException($e->getMessage(), $e->getCode(), $e);
        }
    }
}