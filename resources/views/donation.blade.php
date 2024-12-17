<body class="bg-gray-100 min-h-screen">
    @include('components.navigation')
    <div id="app" class="container mx-auto px-4 py-8">
        <form onSubmit={handleSubmit} className="bg-white shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
            @csrf
            <!-- rest of the form -->
        </form>
    </div>
</body>

