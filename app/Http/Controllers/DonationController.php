<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DonationController extends Controller
{
    // Method to display the donation form
    public function showDonationForm()
    {
        // You can return a view here with the donation form
        return view('donation.form'); // Replace with the actual view for the form
    }

    // Method for creating the donation order
    public function createOrder(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'amount' => 'required|numeric|min:1', // Example validation
        ]);

        // Simulate creating a donation order and generating a PayPal order ID
        $paypalOrderId = 'ORDER12345'; // This should come from PayPal's API

        // Log the creation of the donation order
        Log::info('Donation order created', [
            'amount' => $validated['amount'],
            'paypal_order_id' => $paypalOrderId,
        ]);

        // Return a response or redirect, for example:
        return response()->json([
            'message' => 'Order created successfully',
            'paypal_order_id' => $paypalOrderId,
        ]);
    }

    // Method for capturing the donation after payment
    public function captureOrder(Request $request)
    {
        // Assuming you receive the PayPal order ID and donation amount from the request
        $orderId = $request->input('paypal_order_id');
        $amount = $request->input('amount');

        // Simulate capturing the order
        $donation = (object)[
            'amount' => $amount,
            'paypal_order_id' => $orderId,
        ];

        // Log the successful donation completion
        Log::info('Donation completed', [
            'amount' => $donation->amount,
            'paypal_order_id' => $donation->paypal_order_id,
        ]);

        // Return a success response
        return response()->json([
            'message' => 'Donation completed successfully',
            'amount' => $donation->amount,
            'paypal_order_id' => $donation->paypal_order_id,
        ]);
    }
}
