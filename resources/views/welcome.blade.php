<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Filament Starter Kit | Javier Cervantes</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6">
        <nav class="flex items-center justify-between gap-4">
            <div class="font-bold text-lg tracking-tighter dark:text-white">
                FSK <span class="text-[#f53003]">🚀</span>
            </div>
            <div class="flex gap-4">
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                    Log in
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                    Register
                </a>
                @endif
                @endauth
                @endif
            </div>
        </nav>
    </header>

    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                <h1 class="mb-2 text-2xl font-bold tracking-tight">Filament Starter Kit</h1>
                <p class="mb-6 text-[#706f6c] dark:text-[#A1A09A] text-base">
                    Production-ready starter kit with RBAC, Shield, and modern UI. Build your SaaS faster than ever.
                </p>

                <ul class="flex flex-col mb-8">
                    <li class="flex items-center gap-4 py-3 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                        <span class="relative py-1 bg-white dark:bg-[#161615]">
                            <span class="flex items-center justify-center rounded-full bg-green-500 w-3.5 h-3.5 shadow-sm">
                                <svg class="w-2 h-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                        </span>
                        <span><strong>Role-Based Access Control</strong> with Filament Shield.</span>
                    </li>
                    <li class="flex items-center gap-4 py-3 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:bottom-1/2 before:top-0 before:left-[0.4rem] before:absolute">
                        <span class="relative py-1 bg-white dark:bg-[#161615]">
                            <span class="flex items-center justify-center rounded-full bg-blue-500 w-3.5 h-3.5 shadow-sm">
                                <svg class="w-2 h-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                        </span>
                        <span><strong>Pre-configured UI</strong> inspired by Shadcn/UI.</span>
                    </li>
                </ul>

                <div class="flex gap-3">
                    <a href="https://github.com/tu-usuario/fsk" class="px-6 py-2 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] rounded-md font-medium hover:opacity-90 transition-all">
                        View on GitHub
                    </a>
                    <a href="/admin" class="px-6 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-md font-medium hover:bg-gray-50 dark:hover:bg-[#1e1e1d] transition-all">
                        Live Demo
                    </a>
                </div>
            </div>

            <div class="bg-[#f8fafc] dark:bg-[#111] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg p-8 lg:p-12 w-full lg:w-[438px] shrink-0 flex flex-col justify-center items-center overflow-hidden border border-[#e3e3e0] dark:border-[#3E3E3A]">
                <div class="text-center">
                    <div class="mb-4 inline-flex items-center justify-center w-16 h-16 rounded-2xl  text-white shadow-lg rotate-3">
                        <img src="/icon.png" alt="">
                    </div>
                    <h2 class="text-xl font-bold dark:text-white">Developed by</h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400 max-w-[200px] mx-auto mb-6">
                        Javier Cervantes
                    </p>
                    <div class="flex justify-center gap-4">
                        <span class="p-2">🚀</span>
                        <span class="p-2">💻</span>
                        <span class="p-2">🇲🇽</span>
                    </div>
                </div>
                <div class="absolute bottom-4 text-[10px] uppercase tracking-tighter text-gray-400 opacity-50">

                </div>
            </div>
        </main>
    </div>

    <footer class="mt-8 text-gray-400 text-[11px] flex flex-col items-center gap-1">
        <p>&copy; 2026 Crafted with ❤️ by <strong>Javier Cervantes</strong></p>
        <div class="flex gap-4 italic">
            <span><a target="_blank" href="https://laravel.com">Laravel 12</a></span>
            <span> <a target="_blank" href="https://filamentphp.com">Filament v5</a></span>
            <span> <a target="_blank" href="https://tailwindcss.com">Tailwind CSS</a></span>
        </div>
    </footer>
</body>

</html>