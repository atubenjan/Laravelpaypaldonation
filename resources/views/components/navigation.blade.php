<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="{{ route('donation.form') }}" class="text-white font-bold text-xl">Donation System</a>
                </div>
            </div>
            <div class="flex items-center">
                @auth
                    <a href="{{ route('admin.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Admin Panel</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Admin Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

