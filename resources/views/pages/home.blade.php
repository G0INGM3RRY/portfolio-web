@php
    $title = $profile['name'].' | '.$profile['title'];
    $metaDescription = $profile['intro'];
@endphp

@extends('layouts.app')

@section('content')
    <section id="home" data-animated-section class="relative overflow-hidden bg-white pt-16 dark:bg-slate-950">
        <div class="absolute inset-x-0 top-0 h-32 bg-emerald-100/60 dark:bg-emerald-400/5" aria-hidden="true"></div>
        <x-abstract-background />
        <div class="mx-auto grid min-h-[calc(100vh-4rem)] max-w-6xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-[1.05fr_0.95fr] lg:px-8">
            <div class="relative z-10 animate-fade-up">
                <p class="text-sm font-bold uppercase tracking-[0.24em] text-emerald-700 dark:text-emerald-300">{{ $profile['title'] }}</p>
                <h1 class="mt-5 max-w-3xl text-4xl font-black leading-tight text-slate-950 sm:text-5xl lg:text-6xl dark:text-white">
                    {{ $profile['name'] }}
                </h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg dark:text-slate-300 indent-8">
                    {{ $profile['intro'] }}
                </p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="#projects" class="inline-flex items-center justify-center gap-2 rounded-full bg-emerald-600 px-6 py-3 text-sm font-bold text-white shadow-lg shadow-emerald-900/20 transition hover:-translate-y-0.5 hover:bg-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-300">
                        View Projects
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center gap-2 rounded-full border border-slate-900/10 bg-white px-6 py-3 text-sm font-bold text-slate-800 shadow-sm transition hover:-translate-y-0.5 hover:border-emerald-500 hover:text-emerald-700 dark:border-white/10 dark:bg-slate-900 dark:text-white dark:hover:border-emerald-300 dark:hover:text-emerald-300">
                        Contact Me
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5A2.25 2.25 0 0 1 19.5 19.5h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0-9.75 6.75L2.25 6.75" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="relative z-10 mx-auto w-full max-w-sm animate-fade-up lg:max-w-md" style="animation-delay: 120ms;">
                <div class="relative rounded-lg bg-slate-950 p-3 shadow-2xl shadow-slate-950/20 dark:bg-white/10">
                    <img src="{{ asset('images\Oraller_Gerald_BSIT4B.jpeg') }}" alt="{{ $profile['name'] }} profile picture" class="aspect-[4/5] w-full rounded-md object-cover">
                    <div class="absolute -bottom-5 left-6 rounded-lg bg-white px-5 py-3 shadow-xl dark:bg-slate-900">
                        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-500 dark:text-slate-400">Location</p>
                        <p class="mt-1 text-sm font-bold text-slate-950 dark:text-white">{{ $profile['location'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" data-animated-section class="section-spacing relative overflow-hidden bg-stone-50 dark:bg-slate-950">
        <x-abstract-background />
        <div class="relative z-10 mx-auto grid max-w-6xl gap-10 px-4 sm:px-6 lg:grid-cols-[0.9fr_1.1fr] lg:px-8">
            <div class="self-center">
                <p class="section-kicker">About Me</p>
                <h2 class="section-title">Building practical web experiences with care.</h2>
            </div>
            <div class="rounded-lg border border-slate-900/10 bg-white p-6 shadow-sm dark:border-white/10 dark:bg-slate-900/70 sm:p-8">
                <p class="leading-8 text-slate-600 dark:text-slate-300 indent-12">{{ $profile['about'] }}</p>
                <dl class="mt-8 grid gap-4 sm:grid-cols-2">
                    <div class="info-tile">
                        <dt>Age</dt>
                        <dd>{{ $profile['age'] }}</dd>
                    </div>
                    <div class="info-tile">
                        <dt>Location</dt>
                        <dd>{{ $profile['location'] }}</dd>
                    </div>
                    <div class="info-tile sm:col-span-2">
                        <dt>Education</dt>
                        <dd>{{ $profile['education']['course'] }}</dd>
                        <dd class="text-sm font-medium text-slate-500 dark:text-slate-400">{{ $profile['education']['school'] }} &middot; Graduated {{ $profile['education']['graduated'] }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <section id="skills" data-animated-section class="section-spacing relative overflow-hidden bg-white dark:bg-slate-900/40">
        <x-abstract-background />
        <div class="relative z-10 mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="section-kicker">Skills</p>
                <h2 class="section-title">A growing toolkit for full-stack web development.</h2>
            </div>
            <div class="mt-10 grid gap-5 md:grid-cols-3">
                @foreach ($skills as $skill)
                    <x-skill-card :skill="$skill" />
                @endforeach
            </div>
        </div>
    </section>

    <section id="projects" data-animated-section class="section-spacing relative overflow-hidden bg-stone-50 dark:bg-slate-950">
        <x-abstract-background />
        <div class="relative z-10 mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                <div class="max-w-2xl">
                    <p class="section-kicker">Projects</p>
                    <h2 class="section-title">Selected work and practice builds.</h2>
                </div>
                <div class="flex flex-wrap gap-2" aria-label="Project technology filters">
                    <button type="button" data-filter="all" class="filter-button is-active">All</button>
                    @foreach ($technologies as $technology)
                        <button type="button" data-filter="{{ str($technology)->slug() }}" class="filter-button">{{ $technology }}</button>
                    @endforeach
                </div>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($projects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>
        </div>
    </section>

    <section id="experience" data-animated-section class="section-spacing relative overflow-hidden bg-white dark:bg-slate-900/40">
        <x-abstract-background />
        <div class="relative z-10 mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <p class="section-kicker">{{ $experience['has_experience'] ? 'Experience' : 'Learning Journey' }}</p>
            <h2 class="section-title">{{ $experience['has_experience'] ? 'Professional background.' : 'Current growth path.' }}</h2>

            <div class="mt-10 rounded-lg border border-slate-900/10 bg-white p-6 shadow-sm dark:border-white/10 dark:bg-slate-900/70 sm:p-8">
                @if ($experience['has_experience'])
                    <p class="text-xl font-bold text-slate-950 dark:text-white">{{ $experience['position'] }}</p>
                    <p class="mt-1 text-sm font-semibold text-emerald-700 dark:text-emerald-300">{{ $experience['company'] }} &middot; {{ $experience['period'] }}</p>
                    <p class="mt-5 leading-8 text-slate-600 dark:text-slate-300">{{ $experience['description'] }}</p>
                @else
                    <ul class="grid gap-4 sm:grid-cols-3">
                        @foreach ($experience['journey'] as $item)
                            <li class="rounded-lg bg-stone-50 p-5 text-sm font-semibold text-slate-700 dark:bg-white/5 dark:text-slate-200">{{ $item }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </section>

    <section id="certificates" data-animated-section class="section-spacing relative overflow-hidden bg-stone-50 dark:bg-slate-950">
        <x-abstract-background />
        <div class="relative z-10 mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="section-kicker">Certificates</p>
                <h2 class="section-title">Credentials and completed learning milestones.</h2>
            </div>
            <div class="mt-10 grid gap-5 md:grid-cols-3">
                @foreach ($certificates as $certificate)
                    <article class="rounded-lg border border-slate-900/10 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl hover:shadow-emerald-950/10 dark:border-white/10 dark:bg-slate-900/70">
                        <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-lg bg-teal-100 text-teal-700 dark:bg-teal-400/10 dark:text-teal-300">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0A2.25 2.25 0 0 0 18.75 16.5V6.75A2.25 2.25 0 0 0 16.5 4.5h-9a2.25 2.25 0 0 0-2.25 2.25v9.75A2.25 2.25 0 0 0 7.5 18.75m9 0v.75A2.25 2.25 0 0 1 14.25 21h-4.5A2.25 2.25 0 0 1 7.5 19.5v-.75" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-slate-950 dark:text-white">{{ $certificate['name'] }}</h3>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">{{ $certificate['organization'] }}</p>
                        <p class="mt-4 text-sm font-bold text-emerald-700 dark:text-emerald-300">{{ $certificate['year'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="contact" data-animated-section class="section-spacing relative overflow-hidden bg-white dark:bg-slate-900/40">
        <x-abstract-background />
        <div class="relative z-10 mx-auto grid max-w-6xl gap-10 px-4 sm:px-6 lg:grid-cols-[0.9fr_1.1fr] lg:px-8">
            <div>
                <p class="section-kicker">Contact</p>
                <h2 class="section-title">Let us build something thoughtful.</h2>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ([
                    ['label' => 'Email', 'value' => $profile['email'], 'href' => 'mailto:'.$profile['email'], 'icon' => 'mail'],
                    ['label' => 'GitHub', 'value' => $profile['github'], 'href' => $profile['github'], 'icon' => 'code'],
                    ['label' => 'LinkedIn', 'value' => $profile['linkedin'], 'href' => $profile['linkedin'], 'icon' => 'briefcase'],
                    ['label' => 'Facebook', 'value' => $profile['facebook'], 'href' => $profile['facebook'], 'icon' => 'user'],
                ] as $contact)
                    <a href="{{ $contact['href'] }}" class="group rounded-lg border border-slate-900/10 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:border-emerald-400 hover:shadow-xl hover:shadow-emerald-950/10 dark:border-white/10 dark:bg-slate-900/70">
                        <div class="flex items-center gap-4">
                            <span class="grid h-11 w-11 shrink-0 place-items-center rounded-lg bg-emerald-100 text-emerald-700 transition group-hover:bg-emerald-600 group-hover:text-white dark:bg-emerald-400/10 dark:text-emerald-300">
                                @if ($contact['icon'] === 'mail')
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5A2.25 2.25 0 0 1 19.5 19.5h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0-9.75 6.75L2.25 6.75" /></svg>
                                @elseif ($contact['icon'] === 'code')
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m17.25 6.75 3 3-3 3m-10.5 0-3-3 3-3M14.25 4.5l-4.5 15" /></svg>
                                @elseif ($contact['icon'] === 'briefcase')
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.1A2.25 2.25 0 0 1 18 20.5H6a2.25 2.25 0 0 1-2.25-2.25v-4.1m16.5 0a2.25 2.25 0 0 0 1.5-2.12V8.25A2.25 2.25 0 0 0 19.5 6h-15a2.25 2.25 0 0 0-2.25 2.25v3.78a2.25 2.25 0 0 0 1.5 2.12m16.5 0A18.96 18.96 0 0 1 12 16.5a18.96 18.96 0 0 1-8.25-2.35M9.75 6V4.5A1.5 1.5 0 0 1 11.25 3h1.5a1.5 1.5 0 0 1 1.5 1.5V6" /></svg>
                                @else
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a8.25 8.25 0 1 1 15 0" /></svg>
                                @endif
                            </span>
                            <span class="min-w-0">
                                <span class="block text-sm font-semibold text-slate-950 dark:text-white">{{ $contact['label'] }}</span>
                                <span class="mt-1 block truncate text-sm text-slate-600 dark:text-slate-300">{{ $contact['value'] }}</span>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
