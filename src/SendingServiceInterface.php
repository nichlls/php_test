<?php

/**
 * Interface for sending Notifications
 */
interface SendingServiceInterface
{
    public function supportsNotificationType(NotificationType $type): bool;
    public function send(NotificationInterface $notification): SendResult;
}