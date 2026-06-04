<div>
    <!-- ================= HERO ================= -->
    <section id="home" class="relative min-h-[680px] bg-cover bg-center"
        style="background-image:url('{{ $event['hero_bg_url'] }}');">
        <!-- overlays -->
        <div class="absolute inset-0 bg-indigo-950/80"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-950/95 via-indigo-900/70 to-indigo-900/25"></div>

        <!-- NAVBAR -->
        <livewire:components.navbar />

        <!-- HERO CONTENT -->
        <div class="relative z-10">
            <div class="max-w-6xl mx-auto px-4 pt-14 pb-20 sm:pt-16">
                <div class="grid lg:grid-cols-2 gap-10 items-center">
                    <div class="text-white">
                        <div class="flex flex-col gap-2 text-white/90">
                            <div class="inline-flex items-center gap-2 text-sm font-semibold">
                                <span class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-white/10"><i
                                        class="fa-solid fa-calendar"></i></span>
                                <span class="uppercase tracking-wide">{{ t('event.dates') }}</span>
                            </div>
                            <div class="inline-flex items-center gap-2 text-sm font-semibold">
                                <span class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-white/10"><i
                                        class="fa-solid fa-location-dot"></i></span>
                                <span class="uppercase tracking-wide">{{ t('event.venue') }}</span>
                            </div>
                        </div>

                        <h1 class="mt-8 text-4xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                            {{ t('event.title') }}
                        </h1>

                        <p class="mt-5 text-base sm:text-lg text-white/80 max-w-xl">
                            {{ t('event.tagline') }}
                        </p>

                        <div class="mt-8 flex flex-wrap gap-3">
                            <a href="{{ route('registration') }}"
                                class="bg-white text-indigo-900 px-6 py-3 rounded-lg font-semibold hover:bg-slate-100">
                                {{ t('hero.register_now') }}
                            </a>
                            <a href="{{ route('schedule') }}"
                                class="border border-white/60 px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-indigo-900">
                                {{ t('hero.see_schedule') }}
                            </a>
                        </div>


                    </div>

                    <!-- right panel (visual formal) -->
                    <div class="hidden lg:block">
                        <div
                            class="rounded-3xl border border-white/10 bg-white/5 backdrop-blur-sm shadow-2xl overflow-hidden">
                            <div class="p-6">
                                <p class="text-white font-bold text-lg">{{ t('hero.highlights') }}</p>
                                <p class="mt-2 text-white/70 text-sm leading-relaxed">
                                    {{ t('hero.highlights_desc') }}
                                </p>

                                <div class="mt-6 grid grid-cols-2 gap-4">
                                    <div class="rounded-2xl bg-white/10 p-4">
                                        <p class="text-white/80 text-xs font-bold uppercase tracking-widest">
                                            {{ t('hero.tracks') }}</p>
                                        <p class="mt-2 text-white text-2xl font-extrabold">
                                            {{ $event['highlights']['trilhas'] }}</p>
                                    </div>

                                    <div class="rounded-2xl bg-white/10 p-4">
                                        <p class="text-white/80 text-xs font-bold uppercase tracking-widest">
                                            {{ t('hero.sessions') }}</p>
                                        <p class="mt-2 text-white text-2xl font-extrabold">
                                            {{ $event['highlights']['sessoes'] }}</p>
                                    </div>

                                    <div class="rounded-2xl bg-white/10 p-4">
                                        <p class="text-white/80 text-xs font-bold uppercase tracking-widest">
                                            {{ t('hero.speakers_label') }}</p>
                                        <p class="mt-2 text-white text-2xl font-extrabold">
                                            {{ $event['highlights']['palestrantes'] }}</p>
                                    </div>

                                    <div class="rounded-2xl bg-white/10 p-4">
                                        <p class="text-white/80 text-xs font-bold uppercase tracking-widest">
                                            {{ t('hero.participants') }}</p>
                                        <p class="mt-2 text-white text-2xl font-extrabold">
                                            {{ $event['highlights']['participantes'] }}</p>
                                    </div>
                                </div>

                                <div class="mt-6 rounded-2xl border border-white/10 bg-white/5 p-4">
                                    <p class="text-white/85 text-sm font-semibold">{{ t('hero.notice') }}</p>
                                    <p class="mt-1 text-white/65 text-sm">
                                        {{ t('hero.notice_desc') }}
                                    </p>
                                </div>
                            </div>

                            <div class="h-2 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-600"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <livewire:components.countdown eventStart="2026-06-23T09:00:00" />

    <livewire:components.about />

    {{-- Secção: Vídeo de Apresentação --}}
    <section class="bg-white py-16 sm:py-20">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <p class="text-sm font-bold uppercase tracking-widest text-indigo-600 mb-3">
                {{ t('video_apresentacao.badge') }}
            </p>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight mb-3">
                {{ t('video_apresentacao.title') }}
            </h2>
            <p class="text-slate-500 text-sm sm:text-base max-w-2xl mx-auto mb-10">
                {{ t('video_apresentacao.subtitle') }}
            </p>

            <div class="relative rounded-2xl overflow-hidden shadow-xl ring-1 ring-slate-200">
                <video
                    controls
                    preload="metadata"
                    class="w-full aspect-video bg-black"
                >
                    <source src="{{ asset('assets/videos/apresentação .mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    {{-- Secção: ATSEP Jorge Paz Neto --}}
    <section class="relative w-full overflow-hidden bg-[#0a1628]">
        <div class="max-w-5xl mx-auto px-4 py-12 flex flex-col md:flex-row items-center gap-10">

            {{-- Imagem --}}
            <div class="w-full md:w-1/2 flex-shrink-0">
                <img src="{{ asset('assets/ATSEP Jorge Paz Neto .jpeg') }}" alt="ATSEP Jorge Paz Neto"
                    class="w-full rounded-2xl shadow-2xl object-cover">
            </div>

            {{-- Texto --}}
            <div class="w-full md:w-1/2 flex flex-col justify-center">
                <p class="text-sm font-bold uppercase tracking-widest text-orange-400 mb-3">{{ t('jorge_paz.badge') }}
                </p>
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">
                    <span class="text-white">ATSEP </span><span class="text-orange-400">Jorge Paz Neto</span>
                </h2>
                <div class="mt-4 border-l-4 border-orange-400 pl-4">
                    <p class="text-white text-lg font-semibold leading-snug">
                        {{ t('jorge_paz.role') }}
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- Secção: ATSEP Eng. Domingos de Carvalho --}}
    <section class="relative w-full overflow-hidden bg-[#0d1e35]">
        <div class="max-w-5xl mx-auto px-4 py-12 flex flex-col md:flex-row-reverse items-center gap-10">

            {{-- Imagem --}}
            <div class="w-full md:w-1/2 flex-shrink-0">
                <img src="{{ asset('assets/Eng. Domingos de Carvalho .png') }}" alt="ATSEP Eng. Domingos de Carvalho"
                    class="w-full rounded-2xl shadow-2xl object-cover">
            </div>

            {{-- Texto --}}
            <div class="w-full md:w-1/2 flex flex-col justify-center">
                <p class="text-sm font-bold uppercase tracking-widest text-orange-400 mb-3">
                    {{ t('domingos_carvalho.badge') }}</p>
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">
                    <span class="text-white">ATSEP </span><span class="text-orange-400">Eng. Domingos de Carvalho</span>
                </h2>
                <div class="mt-4 border-l-4 border-orange-400 pl-4">
                    <p class="text-white text-lg font-semibold leading-snug">
                        {{ t('domingos_carvalho.role') }}
                    </p>
                </div>
            </div>
        </div>
    </section>



    {{-- Secção: Selzing D Miri --}}
    <section class="relative w-full overflow-hidden bg-white py-16">
        <div class="max-w-5xl mx-auto px-4 flex flex-col md:flex-row items-center gap-12">

            {{-- Imagem com borda circular --}}
            <div class="w-full md:w-1/2 flex-shrink-0 flex justify-center">
                <img src="{{ asset('assets/Selxing D Miri .png') }}" alt="Selzing D Miri"
                     class="w-80 sm:w-96">
            </div>

            {{-- Texto --}}
            <div class="w-full md:w-1/2 flex flex-col justify-center">
                <p class="text-sm font-bold uppercase tracking-widest text-orange-500 mb-3">{{ t('selzing_miri.badge') }}</p>
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">
                    <span class="text-slate-900">Selzing </span><span class="text-orange-500">D Miri</span>
                </h2>
                <div class="mt-4 border-l-4 border-orange-500 pl-4">
                    <p class="text-slate-800 text-lg font-semibold leading-snug">{{ t('selzing_miri.role') }}</p>
                    <p class="text-indigo-900 text-base font-medium mt-1">{{ t('selzing_miri.org') }}</p>
                </div>
            </div>
        </div>
    </section>

    <livewire:components.speakers />
    <livewire:components.moderadores />
    <livewire:components.partners />
    <livewire:components.hero-banner />
</div>
