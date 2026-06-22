@props(['name'])

<footer class="border-t border-slate-900/10 bg-white py-8 text-center text-sm text-slate-500 dark:border-white/10 dark:bg-slate-900/40 dark:text-slate-400">
    <p>&copy; {{ now()->year }} {{ $name }}</p>
    <p class="mt-1">Built with Laravel and Tailwind CSS</p>
</footer>
