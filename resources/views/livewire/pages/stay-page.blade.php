<div>
    <livewire:components.page-nav-bar :title="t('hoteis.page_title')" :subtitle="t('hoteis.page_subtitle')" />

    <section class="bg-slate-100 py-12 sm:py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-indigo-700">{{ t('hoteis.section_badge') }}</p>
                    <h3 class="mt-2 text-3xl font-black tracking-tight text-slate-950">{{ t('hoteis.section_title') }}</h3>
                </div>
                <p class="max-w-2xl text-sm leading-7 text-slate-600">{{ t('hoteis.section_subtitle') }}</p>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                @foreach($hotels as $hotel)
                    <article x-data="{ expanded: false }" class="flex h-full flex-col rounded-[2rem] border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.22em] text-indigo-700">{{ $hotel['category'] }}</p>
                                <h4 class="mt-3 text-2xl font-black text-slate-950">{{ $hotel['name'] }}</h4>
                            </div>
                            <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">
                                {{ $hotel['location'] }}
                            </span>
                        </div>

                        @if(!empty($hotel['description']))
                            <p class="mt-5 text-sm leading-7 text-slate-600">{{ $hotel['description'] }}</p>
                        @endif

                        @if(!empty($hotel['expanded_description']))
                            <div x-show="expanded" x-cloak x-transition class="mt-4 space-y-3 text-sm leading-7 text-slate-600">
                                @foreach($hotel['expanded_description'] as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach
                            </div>

                            <button type="button" @click="expanded = !expanded"
                                class="mt-4 inline-flex w-fit items-center gap-2 text-sm font-semibold text-indigo-700 transition hover:text-indigo-900">
                                <span x-text="expanded ? '{{ t('hoteis.read_less') }}' : '{{ t('hoteis.read_more') }}'"></span>
                                <svg class="h-4 w-4 transition" :class="expanded ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        @endif

                        <div class="mt-auto flex flex-wrap gap-3 pt-6">
                            @foreach($hotel['links'] as $index => $link)
                                <a href="{{ $link['url'] }}" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center justify-center rounded-2xl px-5 py-3 text-sm font-semibold transition {{ $index === 0 ? 'bg-indigo-700 text-white hover:bg-indigo-800' : 'border border-slate-200 bg-slate-50 text-slate-700 hover:bg-slate-100' }}">
                                    {{ $link['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-12 sm:py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid gap-5 md:grid-cols-3">
                @foreach(config(current_lang() . '.hoteis.cards', config('pt.hoteis.cards')) as $card)
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
