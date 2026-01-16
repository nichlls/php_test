<?php

class NotificationValidation
{
    /**
     * Validates common notification requirements.
     * @param NotificationInterface  
     * @throws InvalidArgumentException
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