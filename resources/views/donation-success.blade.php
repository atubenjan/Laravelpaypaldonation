<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donation Successful</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
        <h1 class="text-2xl font-bold text-green-600 mb-4">Donation Successful!</h1>
        <p class="text-gray-700 mb-4">Thank you for your generous donation. Your support means a lot to us.</p>
        <p class="text-gray-600 mb-6">Transaction ID: {{ $captureId }}</p>
        <a href="{{ route('donation.form') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Return to Donation Page
        </a>
    </div>
</body>
</html>

