<?php

use PHPUnit\Framework\TestCase;

class NotificationValidationTest extends TestCase
{
    private NotificationValidation $validation;

    /**
     * Set up NotificationValidation.
     * 
     * @return void
     */
    protected function setUp(): void
    {
        $this->validation = new NotificationValidation();
    }

    /**
     * Test that a valid notification is determined to be valid.
     * 
     * @return void
     */
    public function testValidateWithValidNotification(): void
    {
        $notification = new Notification(
            type: NotificationType::Email,
            recipient: 'test@example.com',
            message: 'Valid message content'
        );

        // If call below works, test passes
        $this->expectNotToPerformAssertions();

        $this->validation->validate($notification);
    }
}