@props(['project'])

<article
    data-project-card
    data-technologies="{{ collect($project['technologies'])->map(fn ($technology) => str($technology)->slug())->implode(' ') }}"
    class="group overflow-hidden rounded-lg border border-slate-900/10 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-emerald-950/10 dark:border-white/10 dark:bg-slate-900/70 dark:hover:shadow-black/20"
>
    <div class="aspect-[16/10] overflow-hidden bg-slate-200 dark:bg-slate-800">
        <img
            src="{{ asset($project['image']) }}"
            alt="{{ $project['title'] }} preview"
            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
            loading="lazy"
        >
    </div>
    <div class="p-6">
        <h3 class="text-lg font-semibold text-slate-950 dark:text-white">{{ $project['title'] }}</h3>
        <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $project['description'] }}</p>

        <div class="mt-5 flex flex-wrap gap-2">
            @foreach ($project['technologies'] as $technology)
                <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 dark:bg-emerald-400/10 dark:text-emerald-300">{{ $technology }}</span>
            @endforeach
        </div>

        <div class="mt-6 flex gap-3">
            <a href="{{ $project['github_link'] }}" class="inline-flex items-center gap-2 rounded-full border border-slate-900/10 px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-emerald-500 hover:text-emerald-700 dark:border-white/10 dark:text-slate-200 dark:hover:border-emerald-300 dark:hover:text-emerald-300">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 21 3m0 0h-3.75M21 3v3.75M3 17.25 6.75 21m0 0H3m3.75 0v-3.75M14.25 3h3M21 9.75v4.5A6.75 6.75 0 0 1 14.25 21h-4.5A6.75 6.75 0 0 1 3 14.25v-4.5A6.75 6.75 0 0 1 9.75 3h1.5" />
                </svg>
                GitHub
            </a>
            <a href="{{ $project['live_demo_link'] }}" class="inline-flex items-center gap-2 rounded-full bg-slate-950 px-4 py-2 text-sm font-semibold text-white transition hover:-translate-y-0.5 hover:bg-emerald-600 dark:bg-white dark:text-slate-950 dark:hover:bg-emerald-300">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>
                Live Demo
            </a>
        </div>
    </div>
</article>
