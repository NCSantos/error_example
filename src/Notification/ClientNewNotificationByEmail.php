<?php
declare(strict_types = 1);

namespace App\Notification;

use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\Notification\EmailNotificationInterface;
use Symfony\Component\Notifier\Recipient\EmailRecipientInterface;
use Symfony\Component\Notifier\Message\EmailMessage;

class ClientNewNotificationByEmail extends Notification implements EmailNotificationInterface {
    public function __construct()
    {
        parent::__construct('New notification');
    }

    public function asEmailMessage(EmailRecipientInterface $recipient, string $transport = null): ?EmailMessage
    {
        $message = EmailMessage::fromNotification($this, $recipient, $transport);
        $message->getMessage()
            ->from('test@mail.com')
            ->htmlTemplate('email/client_new_notification.html.twig')
            ->context(['footer_text'=>null])
            ->importance('')
        ;

        return $message;
    }
}
