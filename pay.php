<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $amount = htmlspecialchars($_POST['amount']);
} else {
    // Redirect if accessed directly
    header("Location: donate.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Summary</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 60px auto;
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        p {
            font-size: 16px;
            margin: 12px 0;
            color: #555;
        }

        strong {
            color: #222;
        }

        form {
            margin-top: 30px;
            text-align: center;
        }

        button {
            padding: 12px 20px;
            font-size: 16px;
            background-color: #0077cc;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #005fa3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Payment Summary</h2>

        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Amount:</strong> ₹<?php echo $amount; ?></p>

        <form action="thankyou.php" method="post">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="amount" value="<?php echo $amount; ?>">
            <button type="submit">Confirm & Pay (Simulated)</button>
        </form>
    </div>
</body>
</html>
