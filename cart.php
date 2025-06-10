<?php
session_start();
include('./admin/admin_inc/db.php');

$user_id = $_SESSION['aid']; // or separate user session
$result = $con->query("SELECT c.*, h.h_name FROM cart c JOIN handicrafts h ON c.handicraft_id = h.hid WHERE user_id = $user_id");

$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
<div class="container">
    <h2>My Cart</h2>
    <table class="table">
        <tr>
            <th>Craft Name</th>
            <th>Lot</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) {
            $item_total = $row['price'] * $row['lot_quantity'];
            $total += $item_total;
        ?>
        <tr>
            <td><?= $row['handicraft_id'] ?></td>
            <td><?= $row['lot_quantity'] ?></td>
            <td><?= $row['price'] ?></td>
            <td><?= $item_total ?></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="3"><strong>Grand Total</strong></td>
            <td><strong>₹<?= $total ?></strong></td>
        </tr>
    </table>
    <form method="post" action="donate.php">
        <input type="hidden" name="amount" value="<?= $total ?>">
        <button type="submit" class="btn btn-success">Proceed to Payment</button>
    </form>
</div>
</body>
</html>
