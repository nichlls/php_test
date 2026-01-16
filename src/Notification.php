<?php

readonly class Notification implements NotificationInterface
{
    public function __construct(
        private NotificationType $type,
        private string           $recipient,
        private string           $message
    ){
    }
}