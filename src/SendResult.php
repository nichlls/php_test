<?php

/**
 * Result of sending a notification.
 */
readonly class SendResult
{
    /**
     * @param DateTimeInterface|null $sentAt Timestamp when notification was sent
     * @param string|null $messageId Unique ID for sent message
     */
    public function __construct(
        private ?\DateTimeInterface $sentAt,
        private ?string $messageId,
    ) {
    }

    /**
     * Gets the timestamp when the notification was sent.
     *
     * @return \DateTimeInterface|null The send timestamp, or null if not available
     */
    public function getSentAt(): ?\DateTimeInterface
    {
        return $this->sentAt;
    }

    /**
     * Gets unique message identifier.
     *
     * @return string|null The message ID, or null if not available
     */
    public function getMessageId(): ?string
    {
        return $this->messageId;
    }

    /**
     * Checks if send operation was successful.
     *
     * @return bool True if either messageId or sentAt is set, false otherwise
     */
    public function isSuccess(): bool
    {
        return $this->messageId !== null || $this->sentAt !== null;
    }
}