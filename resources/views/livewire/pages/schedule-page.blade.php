<div>
    {{-- HERO --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-indigo-950 via-indigo-900 to-slate-900 text-white">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(165,180,252,0.24),_transparent_30%),radial-gradient(circle_at_bottom_left,_rgba(96,165,250,0.16),_transparent_28%)]"></div>
        <div class="absolute inset-0 bg-[linear-gradient(135deg,rgba(255,255,255,0.03)_0%,transparent_38%,rgba(255,255,255,0.02)_100%)]"></div>

        <livewire:components.navbar />

        <div class="relative max-w-6xl mx-auto px-4 py-12 sm:py-16">
            <div class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-start">
                <div>
                    <span class="inline-flex items-center rounded-full border border-indigo-300/20 bg-white/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.28em] text-indigo-100">
                        {{ t('programa.hero_badge') }}
                    </span>

                    <h2 class="mt-6 max-w-3xl text-3xl font-black tracking-tight text-white sm:text-5xl">
                        {{ t('programa.hero_title') }}
                    </h2>

                    <p class="mt-5 max-w-2xl text-base leading-8 text-slate-300 sm:text-lg">
                        {{ t('programa.hero_subtitle') }}
                    </p>

                    <div class="mt-8 grid gap-4 sm:grid-cols-3">
                        <div class="rounded-3xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm shadow-[0_20px_60px_rgba(15,23,42,0.18)]">
                            <p class="text-sm text-slate-300">{{ t('programa.stat1_label') }}</p>
                            <p class="mt-2 text-3xl font-black text-white">{{ t('programa.stat1_value') }}</p>
                            <p class="mt-2 text-sm text-slate-400">{{ t('programa.stat1_sub') }}</p>
                        </div>
                        <div class="rounded-3xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm shadow-[0_20px_60px_rgba(15,23,42,0.18)]">
                            <p class="text-sm text-slate-300">{{ t('programa.stat2_label') }}</p>
                            <p class="mt-2 text-3xl font-black text-white">{{ t('programa.stat2_value') }}</p>
                            <p class="mt-2 text-sm text-slate-400">{{ t('programa.stat2_sub') }}</p>
                        </div>
                        <div class="rounded-3xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm shadow-[0_20px_60px_rgba(15,23,42,0.18)]">
                            <p class="text-sm text-slate-300">{{ t('programa.stat3_label') }}</p>
                            <p class="mt-2 text-3xl font-black text-white">{{ t('programa.stat3_value') }}</p>
                            <p class="mt-2 text-sm text-slate-400">{{ t('programa.stat3_sub') }}</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[2rem] border border-white/10 bg-white/10 p-6 shadow-2xl backdrop-blur-md">
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-indigo-100">{{ t('programa.editorial_label') }}</p>
                    <div class="mt-5 space-y-5">
                        <div class="rounded-2xl border border-white/10 bg-indigo-950/30 p-5">
                            <p class="text-sm text-slate-400">{{ t('programa.focus_label') }}</p>
                            <p class="mt-2 text-lg font-bold text-white">{{ t('programa.focus_text') }}</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-indigo-950/30 p-5">
                            <p class="text-sm text-slate-400">{{ t('programa.obs_label') }}</p>
                            <p class="mt-2 text-sm leading-7 text-slate-300">{{ t('programa.obs_text') }}</p>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <a href="{{ route('registration') }}"
                                class="inline-flex items-center justify-center rounded-2xl bg-white px-5 py-3 text-sm font-bold text-indigo-900 transition hover:bg-indigo-50">
                                {{ t('programa.cta_register') }}
                            </a>
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center justify-center rounded-2xl border border-white/20 bg-white/5 px-5 py-3 text-sm font-semibold text-white transition hover:bg-white hover:text-indigo-900">
                                {{ t('programa.cta_contact') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- DAY SELECTOR --}}
    <section class="bg-slate-100 py-12 sm:py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-indigo-700">{{ t('programa.day_selector_label') }}</p>
                    <h3 class="mt-3 text-3xl font-black tracking-tight text-slate-950">{{ t('programa.day_selector_title') }}</h3>
                    <p class="mt-3 max-w-3xl text-base leading-7 text-slate-600">{{ t('programa.day_selector_subtitle') }}</p>
                </div>

                <div class="inline-flex rounded-3xl border border-slate-200 bg-white p-2 shadow-sm">
                    @foreach ($programme as $date => $day)
                        <button type="button" wire:click="selectDay('{{ $date }}')"
                            class="rounded-2xl px-4 py-3 text-left text-sm font-semibold transition {{ $selectedDay === $date ? 'bg-slate-950 text-white shadow-lg' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-950' }}">
                            <span class="block">{{ $day['label'] }}</span>
                            <span class="mt-1 block text-xs {{ $selectedDay === $date ? 'text-slate-300' : 'text-slate-400' }}">{{ $day['day'] }}</span>
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="mt-10 grid gap-8 lg:grid-cols-[1.45fr_0.55fr]">
                {{-- Sessions --}}
                <div class="rounded-[2rem] bg-white p-6 shadow-xl ring-1 ring-slate-200 sm:p-8">
                    <div class="flex flex-col gap-4 border-b border-slate-100 pb-6 sm:flex-row sm:items-end sm:justify-between">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.18em] text-indigo-600">{{ $this->activeDay['day'] }}</p>
                            <h4 class="mt-2 text-2xl font-black text-slate-950 sm:text-3xl">{{ $this->activeDay['theme'] }}</h4>
                        </div>
                        <div class="rounded-2xl bg-indigo-50 px-4 py-3 text-sm text-indigo-900 ring-1 ring-indigo-100">
                            {{ $this->activeDay['focus'] }}
                        </div>
                    </div>

                    <div class="mt-8 space-y-6">
                        @foreach ($this->activeDay['sessions'] as $session)
                            <article class="relative grid gap-4 rounded-3xl border border-slate-200 bg-slate-50 p-5 sm:grid-cols-[140px_1fr] sm:p-6">
                                <div class="sm:pr-4">
                                    <p class="text-sm font-bold uppercase tracking-[0.16em] text-indigo-700">{{ $session['time'] }}</p>
                                    <div class="mt-3 inline-flex rounded-full bg-white px-3 py-1 text-xs font-semibold text-slate-600 ring-1 ring-slate-200">
                                        {{ $session['type'] }}
                                    </div>
                                </div>
                                <div class="sm:border-l sm:border-slate-200 sm:pl-6">
                                    <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                                        <div>
                                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-amber-600">{{ $session['track'] }}</p>
                                            <h5 class="mt-2 text-xl font-bold text-slate-950">{{ $session['title'] }}</h5>
                                        </div>
                                        <span class="inline-flex rounded-full bg-slate-950 px-3 py-1 text-xs font-semibold uppercase tracking-[0.16em] text-white">
                                            {{ $session['location'] }}
                                        </span>
                                    </div>
                                    <p class="mt-3 text-sm font-semibold text-slate-700">{{ $session['speaker'] }}</p>
                                    <p class="mt-3 text-sm leading-7 text-slate-600">{{ $session['summary'] }}</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                {{-- Sidebar --}}
                <aside class="space-y-6">
                    <div class="rounded-[2rem] bg-slate-950 p-6 text-white shadow-xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-amber-300">{{ t('programa.axes_label') }}</p>
                        <ul class="mt-5 space-y-3 text-sm text-slate-300">
                            @foreach (config(current_lang() . '.programa.axes', config('pt.programa.axes')) as $axis)
                                <li class="rounded-2xl border border-white/10 bg-white/5 px-4 py-3">{{ $axis }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="rounded-[2rem] bg-white p-6 shadow-xl ring-1 ring-slate-200">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-indigo-700">{{ t('programa.ops_notes_label') }}</p>
                        <div class="mt-5 space-y-4 text-sm leading-7 text-slate-600">
                            @foreach (config(current_lang() . '.programa.ops_notes', config('pt.programa.ops_notes')) as $note)
                                <p>{{ $note }}</p>
                            @endforeach
                        </div>
                    </div>

                    <div class="rounded-[2rem] bg-gradient-to-br from-amber-300 via-amber-200 to-orange-200 p-6 text-slate-950 shadow-xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-slate-800">{{ t('programa.participation_label') }}</p>
                        <h5 class="mt-3 text-2xl font-black">{{ t('programa.participation_title') }}</h5>
                        <p class="mt-3 text-sm leading-7 text-slate-800/80">{{ t('programa.participation_text') }}</p>
                        <div class="mt-5 flex flex-col gap-3">
                            <a href="{{ route('registration') }}"
                                class="inline-flex items-center justify-center rounded-2xl bg-slate-950 px-4 py-3 text-sm font-bold text-white transition hover:bg-slate-800">
                                {{ t('programa.participation_register') }}
                            </a>
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center justify-center rounded-2xl border border-slate-900/15 px-4 py-3 text-sm font-semibold text-slate-900 transition hover:bg-white/60">
                                {{ t('programa.participation_contact') }}
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    {{-- Bottom cards --}}
    <section class="bg-white py-12 sm:py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid gap-5 md:grid-cols-3">
                @foreach (config(current_lang() . '.programa.cards', config('pt.programa.cards')) as $card)
                    <div class="rounded-[2rem] border border-slate-200 bg-slate-50 p-6">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-indigo-700">{{ $card['label'] }}</p>
                        <h4 class="mt-3 text-xl font-black text-slate-950">{{ $card['title'] }}</h4>
                        <p class="mt-3 text-sm leading-7 text-slate-600">{{ $card['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
