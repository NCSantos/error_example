# error_example
Update to 6.2 breaks email sending.

After updating to 6.2 I got this message:

`Handling "Symfony\Component\Mailer\Messenger\SendEmailMessage" failed: You must configure a "Symfony\Component\Mime\BodyRendererInterface" when a "Symfony\Bridge\Twig\Mime\NotificationEmail" instance has a text or HTML template set. (500 Internal Server Error)`

Just run this on your local Symfony server and go to `http://localhost:8000/`
