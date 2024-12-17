<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Your Donation</title>
</head>
<body>
    <h1>Thank You for Your Donation</h1>
    <p>Dear Donor,</p>
    <p>We have received your generous donation of ${{ number_format($donation->amount, 2) }}. Your support means a lot to us and will help us continue our important work.</p>
    <p>Donation Details:</p>
    <ul>
        <li>Amount: ${{ number_format($donation->amount, 2) }}</li>
        <li>Date: {{ $donation->created_at->format('Y-m-d H:i:s') }}</li>
        <li>Transaction ID: {{ $donation->paypal_order_id }}</li>
    </ul>
    <p>Thank you again for your generosity.</p>
    <p>Best regards,<br>Your Organization</p>
</body>
</html>

