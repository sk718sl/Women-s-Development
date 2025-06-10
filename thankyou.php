<?php
$name = $_POST['name'] ?? 'User';
$amount = $_POST['amount'] ?? '0';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #e6f7ff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 80px auto;
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #28a745;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #444;
            margin: 10px 0;
        }

        .success-icon {
            font-size: 50px;
            color: #28a745;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">✅</div>
        <h2>Thank You!</h2>
        <p>Dear <?php echo htmlspecialchars($name); ?>,</p>
        <p>Your payment of ₹<?php echo htmlspecialchars($amount); ?> was successful (simulated).</p>
    </div>
</body>
</html>
