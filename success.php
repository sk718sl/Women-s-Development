<?php
$payment_id = $_GET['payment_id'] ?? 'UNKNOWN';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0fff0;
            padding: 40px;
            text-align: center;
        }
        .success-box {
            max-width: 500px;
            background: #fff;
            margin: auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .success-box h1 {
            color: #28a745;
        }
        .success-box p {
            font-size: 16px;
            color: #333;
        }
        .success-box .id {
            background: #f1f1f1;
            padding: 10px;
            border-radius: 4px;
            margin-top: 15px;
            font-family: monospace;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="success-box">
    <h1>🎉 Payment Successful!</h1>
    <p>Thank you for registering for <strong>CloudCon 2019</strong>.</p>
    <p>Your Razorpay Payment ID:</p>
    <div class="id"><?= htmlspecialchars($payment_id) ?></div>
</div>

</body>
</html>
