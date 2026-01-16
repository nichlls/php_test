<?php

/**
 * Interface for sending Notifications
 */
interface SendingServiceInterface
{
    /**
     * Checks if this service supports the given notification type.
     *
     * @param NotificationType $type Notification type to check
     * @return bool True if type is supported, false otherwise
     */
    public function supportsNotificationType(NotificationType $type): bool;

    /**
     * Sends a notification.
     *
     * @param NotificationInterface $notification Notification to send
     * @return SendResult Result of the send operation
     */
    public function send(NotificationInterface $notification): SendResult;
}