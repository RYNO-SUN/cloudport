<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h1>New Contact Form Submission</h1>

    <p><strong>Name:</strong> {{ $contactFormData['name'] }}</p>
    <p><strong>Email:</strong> {{ $contactFormData['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contactFormData['message'] }}</p>
</body>
</html>
