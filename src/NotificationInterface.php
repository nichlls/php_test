<?php

/**
 * Notification data objects interface.
 */
interface NotificationInterface
{
    /**
     * Gets notification type.
     *
     * @return NotificationType Type of notification
     */
    public function getType(): NotificationType;

    /**
     * Gets recipient address.
     *
     * @return string Recipient address
     */
    public function getRecipient(): string;

    /**
     * Gets notification message content.
     *
     * @return string Message content
     */
    public function getMessage(): string;
}