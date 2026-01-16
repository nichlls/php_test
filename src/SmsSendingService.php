<?php

/**
 * Service for sending text notifications to mobile phone numbers.
 */
class SmsSendingService implements SendingServiceInterface
{
    /**
     * @param NotificationValidation $validation Validation for common notification logic
     */
    public function __construct(
        private NotificationValidation $validation
    ) {
    }

    /**
     * Checks if notification type is SMS, returns false if it is not
     *
     * @param NotificationType $type Notification type to check
     * @return bool True if notification type is SMS, false otherwise
     */
    public function supportsNotificationType(NotificationType $type): bool
    {
        return $type === NotificationType::SMS;
    }

    /**
     * Sends an SMS notification.
     *
     * @param NotificationInterface $notification Notification to send
     * @return SendResult Result of the send operation
     * @throws SendingException If sending fails
     */
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