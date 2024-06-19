<!-- resources/views/emails/confirmation.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirm Subscription</title>
</head>

<body>

  <h2>Confirm Subscription</h2>

  <p>Dear {{ $user->email }},</p>

  <p>Thank you for subscribing to our newsletter. Please click the link below to confirm your subscription:</p>

  <p><a href="{{ $confirmationUrl }}">Confirm Subscription</a></p>

  <p>If you did not request this subscription, please ignore this email.</p>

  <p>Regards, Kingsley<br>{{ config('app.name') }}</p>

</body>

</html>
