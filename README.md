# Solution

I started by reading through the project to understand the existing code and structure. I read through the comments in the source files 
and listed the TODOs to understand what needed to be implemented next. 

I then refactored and implemented the services to use the NotificationInterface instead of the old format that directly used (recipient, message) 
parameters.

I added NotificationValidation to avoid repeating code across the sending services. This made sure that all notification types follow the same 
validation rules (currently non-empty recipient and message) before being sent, and makes it easier to extend validation requirements in the future.

I then added very simple unit tests to verify the functionality works as expected.

The following outlines the key parts of the project:

NotificationService - Main service that routes notifications to the correct sending service based on the notification type
EmailSendingService - Handles email notifications
SmsSendingService - Handles SMS notifications
NotificationValidation - Shared validation logic for all notification types
Notification - Data object that implements the NotificationInterface

All tests are in the tests folder.