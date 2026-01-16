<?php

/**
 * Interface for notification sending services.
 */
interface NotificationServiceInterface
{
    /**
     * Send a notification to the specified channel.
     * @param NotificationInterface $notification Notification to send
     * @return SendResult SendResult data object of the send operation
     */
    public function sendNotification(NotificationInterface $notification): SendResult;
}