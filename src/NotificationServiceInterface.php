<?php

interface NotificationServiceInterface
{
    /**
     * Send a notification to the specified channel.
     *
     * @param string $channel The channel to send the notification to (e.g., 'email', 'sms', 'push').
     * @param string $recipient The recipient of the notification.
     * @param string $message The message content of the notification.
     *
     * @throws InvalidArgumentException If the channel is not supported.
     * @throws InvalidArgumentException If the recipient is invalid.
     * @throws SendingException If there is an error sending the notification.
     * @return bool Returns true if the notification was sent successfully, false otherwise.
     * @TODO - Refactor this method to use NotificationInterface
     */
    public function sendNotification(string $channel, string $recipient, string $message): bool;
}