<?php

/**
 * Result of sending a notification.
 */
readonly class SendResult
{
    public function __construct(
        private ?\DateTimeInterface $sentAt,
        private ?string             $messageId,
    ) {
    }
    public function getSentAt(): ?\DateTimeInterface
    {
        return $this->sentAt;
    }

    public function getMessageId(): ?string
    {
        return $this->messageId;
    }

    public function isSuccess(): bool
    {
        return $this->messageId !== null || $this->sentAt !== null;
    }
}