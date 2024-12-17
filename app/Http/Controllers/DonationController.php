// Add this use statement at the top of the file
use Illuminate\Support\Facades\Log;

// In the createOrder method, add:
Log::info('Donation order created', ['amount' => $validated['amount'], 'paypal_order_id' => $paypalOrderId]);

// In the captureOrder method, add:
Log::info('Donation completed', ['amount' => $donation->amount, 'paypal_order_id' => $orderId]);

