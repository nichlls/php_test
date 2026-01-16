<?php

/**
 * Service for sending email notifications.
 */
class EmailSendingService implements SendingServiceInterface
{
    public function send(string $recipient, string $message)
    {
        return true;
    }
}