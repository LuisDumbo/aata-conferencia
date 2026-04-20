<section class="py-14">
    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">{{ t('parceiros.grid_title') }}</h2>
            <p class="mt-2 text-slate-600">{{ t('parceiros.grid_subtitle') }}</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach ($partners as $p)
                <article class="text-center">
                    <div class="bg-white rounded-lg shadow-sm border border-slate-100 p-6 h-[160px] flex items-center justify-center">
                        @if (!empty($p['logo']))
                            <img src="{{ asset($p['logo']) }}" alt="{{ $p['name'] }}"
                                class="h-full max-h-[100px] w-auto object-contain">
                        @endif
                    </div>
                    <p class="mt-3 text-sm text-indigo-900 font-medium">{{ $p['name'] }}</p>
                </article>
            @endforeach

        </div>

        {{-- CTA Tornar-se Parceiro --}}
        <div class="mt-16 rounded-2xl bg-indigo-50 border border-indigo-100 p-8 text-center">
            <h3 class="text-2xl font-extrabold text-slate-900">{{ t('parceiros.become_title') }}</h3>
            <p class="mt-3 text-slate-600 max-w-xl mx-auto">{{ t('parceiros.become_text') }}</p>
            <a href="{{ route('contact') }}"
                class="mt-6 inline-flex items-center justify-center rounded-lg bg-indigo-700 px-6 py-3 text-sm font-semibold text-white hover:bg-indigo-800">
                {{ t('parceiros.become_cta') }}
            </a>
        </div>

    </div>
</section>
