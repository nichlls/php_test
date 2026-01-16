<?php

use PHPUnit\Framework\TestCase;

class EmailSendingServiceTest extends TestCase
{
    private EmailSendingService $service;
    private NotificationValidation $validation;

    /**
     * Set up NotificationValidation and EmailSendingService.
     * 
     * @return void
     */
    public function setUp(): void
    {
        $this->validation = new NotificationValidation();
        $this->service = new EmailSendingService($this->validation);
    }

    /**
     * Test that email type is supported while others are not.
     * 
     * @return void
     */
    public function testNotificationTypes(): void
    {
        // EmailSendingService supports email
        $this->assertTrue($this->service->supportsNotificationType(NotificationType::Email));

        // EmailSendingService doesn't support SMS
        $this->assertFalse($this->service->supportsNotificationType(NotificationType::SMS));

        // EmailSendingService doesn't support Push
        $this->assertFalse($this->service->supportsNotificationType(NotificationType::Push));
    }
}