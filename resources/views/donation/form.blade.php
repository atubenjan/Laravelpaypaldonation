<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Now</title>

    <!-- Link to the compiled Tailwind CSS file -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">

            <h1 class="text-3xl font-semibold text-green-600 mb-6 text-center">Donate Now</h1>

            <form action="{{ route('donation.createOrder') }}" method="POST">
                @csrf

                <label for="amount" class="block text-sm font-medium text-gray-700 mb-2">Amount</label>
                <input type="number" name="amount" placeholder="Enter donation amount" required
                    class="w-full p-3 border border-gray-300 rounded-lg mb-4 focus:outline-none focus:ring-2 focus:ring-green-500">

                <button type="submit"
                    class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-500 transition duration-200">Donate</button>
            </form>

            @if(session('success'))
                <div class="mt-4 p-3 bg-green-100 text-green-700 rounded-lg text-center">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

</body>
</html>
