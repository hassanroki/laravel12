<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify Your Email Address</title>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px;
        }
        .container {
            background-color: white;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #999;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Email Verification</h2>
    <p>Thank you for registering. Please click the button below to verify your email address:</p>

    <a href="{{ $url }}" class="btn">Verify Email Address</a>

    <p>If you did not create an account, no further action is required.</p>

    <div class="footer">
        &copy; {{ date('Y') }} School Management System. All rights reserved.
    </div>
</div>
</body>
</html>
