<?php

/**
 * Validates notification data before sending.
 */
class NotificationValidation
{
    /**
     * Validates common notification requirements.
     * @param NotificationInterface $notification
     * @throws InvalidArgumentException If notification doesn't meet requirements
     * @return void
     */
    public function validate(NotificationInterface $notification): void
    {
        $recipient = $notification->getRecipient();
        $message = $notification->getMessage();
        $type = $notification->getType()->name;

        if (empty($recipient)) {
            throw new InvalidArgumentException("$type recipient cannot be empty.");
        }

        if (empty(trim($message))) {
            throw new InvalidArgumentException("$type message content cannot be empty.");
        }
    }
}