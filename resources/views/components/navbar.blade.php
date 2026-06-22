@props(['profile'])

@php
    $navItems = [
        ['label' => 'Home', 'href' => '#home'],
        ['label' => 'About', 'href' => '#about'],
        ['label' => 'Skills', 'href' => '#skills'],
        ['label' => 'Projects', 'href' => '#projects'],
        ['label' => 'Experience', 'href' => '#experience'],
        ['label' => 'Certificates', 'href' => '#certificates'],
        ['label' => 'Contact', 'href' => '#contact'],
    ];
@endphp

<header class="sticky top-0 z-40 border-b border-slate-900/10 bg-stone-50/85 backdrop-blur-xl transition-colors dark:border-white/10 dark:bg-slate-950/80">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8" aria-label="Primary navigation">
        <a href="#home" class="text-sm font-bold tracking-wide text-slate-950 dark:text-white">
            {{ $profile['name'] }}
        </a>

        <div class="hidden items-center gap-1 lg:flex">
            @foreach ($navItems as $item)
                <a
                    href="{{ $item['href'] }}"
                    data-nav-link
                    class="rounded-full px-3 py-2 text-sm font-medium text-slate-600 transition hover:bg-white hover:text-emerald-700 dark:text-slate-300 dark:hover:bg-white/10 dark:hover:text-emerald-300"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>

        <div class="flex items-center gap-2">
            <button
                type="button"
                data-theme-toggle
                class="grid h-10 w-10 place-items-center rounded-full border border-slate-900/10 bg-white text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:text-emerald-700 dark:border-white/10 dark:bg-slate-900 dark:text-slate-200 dark:hover:text-emerald-300"
                aria-label="Toggle dark mode"
            >
                <svg data-theme-icon="sun" class="hidden h-5 w-5 dark:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m0 13.5V21m9-9h-2.25M5.25 12H3m15.364-6.364-1.591 1.591M7.227 16.773l-1.591 1.591m12.728 0-1.591-1.591M7.227 7.227 5.636 5.636M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z" />
                </svg>
                <svg data-theme-icon="moon" class="h-5 w-5 dark:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 15.75A9 9 0 0 1 8.25 2.25a7.5 7.5 0 1 0 13.5 13.5Z" />
                </svg>
            </button>

            <button
                type="button"
                data-mobile-menu-button
                class="grid h-10 w-10 place-items-center rounded-full border border-slate-900/10 bg-white text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:text-emerald-700 dark:border-white/10 dark:bg-slate-900 dark:text-slate-200 dark:hover:text-emerald-300 lg:hidden"
                aria-label="Open navigation"
                aria-expanded="false"
            >
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </nav>

    <div data-mobile-menu class="hidden border-t border-slate-900/10 bg-stone-50 px-4 py-3 dark:border-white/10 dark:bg-slate-950 lg:hidden">
        <div class="mx-auto grid max-w-6xl gap-1">
            @foreach ($navItems as $item)
                <a href="{{ $item['href'] }}" data-nav-link class="rounded-xl px-3 py-2 text-sm font-medium text-slate-600 transition hover:bg-white hover:text-emerald-700 dark:text-slate-300 dark:hover:bg-white/10 dark:hover:text-emerald-300">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</header>
