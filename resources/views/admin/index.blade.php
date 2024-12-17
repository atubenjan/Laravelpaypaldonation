<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - Donations</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 min-h-screen">
    @include('components.navigation')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Admin Panel - Donations</h1>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($donations as $donation)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $donation->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">${{ number_format($donation->amount, 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    {{ $donation->status === 'completed' ? 'bg-green-100 text-green-800' : 
                                       ($donation->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                    {{ ucfirst($donation->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $donation->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $donations->links() }}
        </div>
    </div>
</body>
</html>

