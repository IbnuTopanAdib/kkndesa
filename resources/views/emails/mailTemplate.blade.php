<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }

        span {
            display: block;
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>From: {{$mailData['fromName'] }}</h1>
        <h1>From Email: {{$mailData['fromEmail'] }}</h1>
        <h1>{{ $mailData['subject'] }}</h1>
        <p>{{ $mailData['body'] }}</p>
        <span>Thank you!</span>
    </div>
</body>
</html>

