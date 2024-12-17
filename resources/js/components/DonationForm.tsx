import React, { useState } from 'react';
import axios from 'axios';

declare const paypal: any;

const DonationForm: React.FC = () => {
    const [amount, setAmount] = useState<string>('');
    const [error, setError] = useState<string | null>(null);
    const [isProcessing, setIsProcessing] = useState<boolean>(false);

    const validateAmount = (value: string): string | null => {
        const numValue = parseFloat(value);
        if (isNaN(numValue)) return 'Please enter a valid number.';
        if (numValue < 1) return 'The minimum donation amount is $1.';
        if (numValue > 10000) return 'The maximum donation amount is $10,000.';
        return null;
    };

    const handleSubmit = async (e: React.FormEvent) => {
        e.preventDefault();
        setError(null);
        setIsProcessing(true);

        const validationError = validateAmount(amount);
        if (validationError) {
            setError(validationError);
            setIsProcessing(false);
            return;
        }

        try {
            const response = await axios.post('/donation/create-order', { amount });
            const { id } = response.data;

            paypal.Buttons({
                createOrder: () => {
                    return id;
                },
                onApprove: async (data: any) => {
                    // Redirect to the capture URL
                    window.location.href = `/donation/capture?token=${data.orderID}`;
                },
                onCancel: () => {
                    // Handle cancelled payment
                    window.location.href = '/donation/cancel';
                },
                onError: (err: any) => {
                    setError('An error occurred with PayPal. Please try again.');
                    console.error('PayPal error:', err);
                }
            }).render('#paypal-button-container');
        } catch (err: any) {
            setError(err.response?.data?.error || 'An error occurred. Please try again.');
        } finally {
            setIsProcessing(false);
        }
    };

    return (
        <div className="max-w-md mx-auto mt-10">
            <form onSubmit={handleSubmit} className="bg-white shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
                <h2 className="text-2xl font-bold mb-6 text-center text-gray-800">Make a Donation</h2>
                <div className="mb-4">
                    <label className="block text-gray-700 text-sm font-bold mb-2" htmlFor="amount">
                        Donation Amount ($)
                    </label>
                    <input
                        className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500"
                        id="amount"
                        type="number"
                        step="0.01"
                        placeholder="Enter amount"
                        value={amount}
                        onChange={(e) => {
                            setAmount(e.target.value);
                            setError(null);
                        }}
                        required
                        min="1"
                        max="10000"
                    />
                </div>
                <div className="flex items-center justify-between">
                    <button
                        className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 ease-in-out disabled:opacity-50 disabled:cursor-not-allowed"
                        type="submit"
                        disabled={isProcessing}
                    >
                        {isProcessing ? 'Processing...' : 'Donate'}
                    </button>
                </div>
                {error && <p className="text-red-500 text-xs italic mt-4">{error}</p>}
            </form>
            <div id="paypal-button-container" className="mt-4"></div>
        </div>
    );
};

export default DonationForm;

