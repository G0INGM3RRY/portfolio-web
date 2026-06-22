<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metaDescription ?? 'A modern personal portfolio built with Laravel and Tailwind CSS.' }}">
    <meta name="author" content="{{ $profile['name'] ?? 'Portfolio Owner' }}">
    <meta property="og:title" content="{{ $title ?? 'Personal Portfolio' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'A modern personal portfolio built with Laravel and Tailwind CSS.' }}">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#0f172a">

    <title>{{ $title ?? 'Personal Portfolio' }}</title>

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <script>
        const theme = localStorage.getItem('theme');
        if (theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-50 text-slate-900 antialiased transition-colors duration-300 dark:bg-slate-950 dark:text-slate-100">
    <x-navbar :profile="$profile" />

    <main>
        @yield('content')
    </main>

    <x-footer :name="$profile['name'] ?? 'YOUR_NAME'" />

    <button
        type="button"
        data-scroll-top
        aria-label="Scroll to top"
        class="fixed bottom-5 right-5 z-50 grid h-11 w-11 translate-y-4 place-items-center rounded-full bg-emerald-600 text-white opacity-0 shadow-lg shadow-emerald-950/20 transition hover:-translate-y-0.5 hover:bg-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-300 dark:bg-emerald-500 dark:text-slate-950 dark:hover:bg-emerald-400"
    >
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75 12 8.25l7.5 7.5" />
        </svg>
    </button>
</body>
</html>
