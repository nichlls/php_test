<?php

/**
 * Service for sending text notifications to mobile phone numbers.
 */
class SmsSendingService implements SendingServiceInterface
{
    public function send(string $recipient, string $message)
    {
        return true;
    }
}