<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col justify-center items-center min-h-screen text-center">
    <!-- Header -->
    <header class="w-full py-4">
        <nav>
            <a href="#" class="text-3xl font-bold text-gray-800">Brand</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex flex-col items-center justify-center flex-grow">
        <h1 class="text-9xl font-extrabold text-gray-800">404</h1>
        <p class="mt-4 text-lg text-gray-600">Oops, something went wrong.</p>
        <p class="text-lg text-gray-600">Sorry, we couldn't find your page.</p>
        <a wire:navigate href="/" class="mt-6 px-6 py-3 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back to Home
        </a>
    </main>

    <!-- Footer -->
    <footer class="w-full py-4 text-gray-500 text-sm">
        © All Rights Reserved. 2024.
    </footer>
</body>
</html>
