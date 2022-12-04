<?php
declare(strict_types = 1);

namespace App\Notification;

use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Recipient\Recipient;

class NewNotificationByEmail
{
    private $notifier;

    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function __invoke()
    {
        try {
            $clientNotification = new ClientNewNotificationByEmail();
            $this->notifier->send($clientNotification, new Recipient('client@email.com'));
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
