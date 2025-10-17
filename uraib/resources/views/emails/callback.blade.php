<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        .email-container {
            background-color: #ffffff;
            padding: 25px;
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        p {
            font-size: 15px;
            color: #333;
            line-height: 1.6;
            margin: 10px 0;
        }

        strong {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>New Callback Request</h2>
        <p><strong>Name:</strong> {{ $data['h_name'] }}</p>
        <p><strong>Email:</strong> {{ $data['h_email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['h_num'] }}</p>
        <p><strong>Message:</strong> {{ $data['h_msg'] ?? 'N/A' }}</p>
    </div>
</body>
</html>
