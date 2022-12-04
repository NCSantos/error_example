<?php
declare(strict_types = 1);

namespace App\Controller;

use App\Notification\NewNotificationByEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', methods:['GET'], name:'app_index')]
    public function index(NewNotificationByEmail $notify): Response
    {
        $notify();
        $number = 3;
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
