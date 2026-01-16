<?php

/**
 * Notification data object.
 */
readonly class Notification implements NotificationInterface
{
    /**
     * @param NotificationType $type Type of notification
     * @param string $recipient Recipient address
     * @param string $message Notification message content
     */
    public function __construct(
        private NotificationType $type,
        private string $recipient,
        private string $message
    ) {
    }

    /**
     * Gets NotificationType.
     * 
     * @return NotificationType Type of notification
     */
    public function getType(): NotificationType
    {
        return $this->type;
    }

    /**
     * Gets notification's type.
     * 
     * @return string Recipient's detail
     */
    public function getRecipient(): string
    {
        return $this->recipient;
    }

    /**
     * Gets notification's message
     * 
     * @return string String containing notification's message
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}