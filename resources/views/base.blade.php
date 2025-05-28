<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Blog')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 
<body class="bg-gray-50 dark:bg-gray-900 ">
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 shadow-sm">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name', 'Mon Blog') }}</span>
                </a>
                <div class="hidden justify-center items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="{{ route('blog.indexBlog') }}" class="block py-2 pr-4 pl-3 {{ request()->is('blog*') ? 'text-white rounded bg-blue-700 lg:bg-transparent lg:text-blue-700' : 'text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700' }} lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition duration-200">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('test') }}" class="block py-2 pr-4 pl-3 {{ request()->is('test') ? 'text-white rounded bg-blue-700 lg:bg-transparent lg:text-blue-700' : 'text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700' }} lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 transition duration-200">Test Tailwind</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>

    <main class="min-h-screen px-4 py-8 bg-gray-50 dark:bg-gray-900">
        @yield('content')
    </main>
    
    <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
        <div class="mx-auto max-w-screen-xl px-4 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <span class="text-sm text-gray-500 dark:text-gray-400">
                        © {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Tous droits réservés.
                    </span>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition duration-200">
                        Politique de confidentialité
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition duration-200">
                        Conditions d'utilisation
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Toggle mobile menu
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.querySelector('[data-collapse-toggle="mobile-menu-2"]');
            const menu = document.getElementById('mobile-menu-2');
            
            if (toggle && menu) {
                toggle.addEventListener('click', function() {
                    menu.classList.toggle('hidden');
                    const expanded = toggle.getAttribute('aria-expanded') === 'true';
                    toggle.setAttribute('aria-expanded', !expanded);
                    
                    // Toggle hamburger/close icon
                    const icons = toggle.querySelectorAll('svg');
                    icons.forEach(icon => icon.classList.toggle('hidden'));
                });
            }
        });
    </script>
</body>
</html> 