@props(['skill'])

<article class="group rounded-lg border border-slate-900/10 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-emerald-950/10 dark:border-white/10 dark:bg-slate-900/70 dark:hover:shadow-black/20">
    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-100 text-emerald-700 transition group-hover:scale-105 dark:bg-emerald-400/10 dark:text-emerald-300">
        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.456-2.456L14.25 6l1.035-.259a3.375 3.375 0 0 0 2.456-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456Z" />
        </svg>
    </div>
    <h3 class="text-lg font-semibold text-slate-950 dark:text-white">{{ $skill['category'] }}</h3>
    <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $skill['description'] }}</p>
    <div class="mt-5 flex flex-wrap gap-2">
        @foreach ($skill['items'] as $item)
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700 dark:bg-white/10 dark:text-slate-200">{{ $item }}</span>
        @endforeach
    </div>
</article>
