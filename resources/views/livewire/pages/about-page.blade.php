<div>
    <livewire:components.page-nav-bar :title="t('sobre.page_title')" :subtitle="t('sobre.page_subtitle')" />

    <section class="bg-white">
        <div class="max-w-6xl mx-auto px-4 py-10 sm:py-14">

            {{-- Introdução --}}
            <p class="text-slate-600 leading-relaxed text-[15px] sm:text-base">
                {!! t('sobre.intro') !!}
            </p>

            {{-- Tema --}}
            <h2 class="mt-8 text-2xl sm:text-3xl font-bold text-slate-700">
                {{ t('sobre.theme_label') }}
            </h2>

            <p class="mt-4 text-slate-600 italic text-[15px] sm:text-base">
                {{ t('sobre.theme_text') }}
            </p>

            <p class="mt-5 text-slate-600 leading-relaxed text-[15px] sm:text-base">
                {!! t('sobre.theme_focus') !!}
            </p>

            {{-- Destaques --}}
            <h3 class="mt-10 text-2xl sm:text-3xl font-bold text-slate-700">
                {{ t('sobre.highlights_label') }}
            </h3>

            <ul class="mt-4 space-y-4 text-slate-600 text-[15px] sm:text-base">
                @foreach (config(current_lang() . '.sobre.highlights', config('pt.sobre.highlights')) as $item)
                    <li class="flex gap-3">
                        <span class="mt-2 inline-block w-1.5 h-1.5 rounded-full bg-slate-400 flex-shrink-0"></span>
                        <span>
                            <span class="font-semibold text-slate-700">{!! $item['title'] !!}</span>
                            {{ $item['text'] }}
                        </span>
                    </li>
                @endforeach
            </ul>

            {{-- Público-alvo --}}
            <h3 class="mt-10 text-2xl sm:text-3xl font-bold text-slate-700">
                {{ t('sobre.audience_label') }}
            </h3>

            <ul class="mt-4 space-y-3 text-slate-600 text-[15px] sm:text-base">
                @foreach (config(current_lang() . '.sobre.audience', config('pt.sobre.audience')) as $item)
                    <li class="flex gap-3">
                        <span class="mt-2 inline-block w-1.5 h-1.5 rounded-full bg-slate-400 flex-shrink-0"></span>
                        <span>{{ $item }}</span>
                    </li>
                @endforeach
            </ul>

            {{-- Idioma --}}
            <h3 class="mt-10 text-2xl sm:text-3xl font-bold text-slate-700">
                {!! t('sobre.language_label') !!}
            </h3>

            <p class="mt-4 text-slate-600 leading-relaxed text-[15px] sm:text-base">
                {!! t('sobre.language_text') !!}
            </p>

            {{-- Inscrição --}}
            <h3 class="mt-10 text-2xl sm:text-3xl font-bold text-slate-700">
                {!! t('sobre.contact_label') !!}
            </h3>

            <p class="mt-4 text-slate-600 leading-relaxed text-[15px] sm:text-base">
                {!! t('sobre.contact_intro') !!}
            </p>

            <ul class="mt-4 space-y-3 text-slate-600 text-[15px] sm:text-base">
                @foreach (config(current_lang() . '.sobre.contacts', config('pt.sobre.contacts')) as $contact)
                    <li class="flex gap-3">
                        <span class="mt-2 inline-block w-1.5 h-1.5 rounded-full bg-slate-400 flex-shrink-0"></span>
                        <span>
                            <span class="font-semibold text-slate-700">{{ $contact['name'] }}</span> –
                            <a class="text-pink-600 hover:underline" href="mailto:{{ $contact['email'] }}">
                                {{ $contact['email'] }}
                            </a>
                        </span>
                    </li>
                @endforeach
            </ul>

        </div>
    </section>
</div>
