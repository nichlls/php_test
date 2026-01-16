<?php

/**
 * Interface for sending Notifications
 * @TODO: EmailSendingService and SmsSendingService must be refactored to fully implement this interface.
 */
interface SendingServiceInterface
{
    public function supportsNotificationType(NotificationType $type): bool;
    public function send(NotificationInterface $notification): SendResult;
}