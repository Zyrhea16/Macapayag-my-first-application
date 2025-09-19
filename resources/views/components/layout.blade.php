<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Laravel Website' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-violet-50 text-gray-900">

    <!-- Navbar -->
    <header class="bg-violet-200 shadow">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold text-violet-700">MySite</a>

            <!-- Navigation -->
            <nav class="space-x-6">
                <a href="/" class="px-3 py-2 rounded-md {{ request()->is('/') ? 'bg-violet-400 text-white' : 'text-violet-700 hover:bg-violet-300 hover:text-violet-900' }}">Home</a>
                <a href="/about" class="px-3 py-2 rounded-md {{ request()->is('about') ? 'bg-violet-400 text-white' : 'text-violet-700 hover:bg-violet-300 hover:text-violet-900' }}">About</a>
                <a href="/contact" class="px-3 py-2 rounded-md {{ request()->is('contact') ? 'bg-violet-400 text-white' : 'text-violet-700 hover:bg-violet-300 hover:text-violet-900' }}">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-violet-200 via-violet-300 to-violet-400 text-violet-900 py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-extrabold mb-4">{{ $heading ?? 'Welcome to My Website' }}</h1>
            <p class="text-lg text-violet-800">
                “I may not be the smartest, but I’ll be the one who never gives up.”
            </p>
        </div>
    </section>

    <!-- Page Content -->
    <main class="container mx-auto py-8 px-6">
        <div class="bg-white shadow-md rounded-xl p-6 border border-violet-100">
            {{ $slot }}
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-violet-200 text-violet-700 py-6 mt-12">
        <div class="container mx-auto text-center text-sm">
            © {{ date('Y') }} MySite — Built with Laravel & Tailwind
        </div>
    </footer>

</body>
</html>
