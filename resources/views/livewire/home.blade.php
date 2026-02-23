<div>
    <!-- ================= HERO ================= -->
    <section id="home" class="relative min-h-[680px] bg-cover bg-center"
        style="background-image:url('{{ $event['hero_bg_url'] }}');">
        <!-- overlays -->
        <div class="absolute inset-0 bg-indigo-950/80"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-950/95 via-indigo-900/70 to-indigo-900/25"></div>

        <!-- NAVBAR -->
        <header class="relative z-10">
            <div class="max-w-6xl mx-auto px-4 pt-6">
                <div
                    class="bg-white rounded-2xl shadow-lg px-4 py-3 sm:px-6 sm:py-4 flex items-center justify-between gap-3">
                    <!-- logo -->
                    <a href="#home" class="flex items-center gap-4">
                        <div class="w-16 h-16 flex items-center justify-center">
                            <img src="{{ asset('assets/logo.jpeg') }}" alt="Logo"
                                class="w-full h-full object-contain">
                        </div>

                        <div class="leading-tight">
                            <p class="text-base font-extrabold text-slate-900">
                                CONFERÊNCIA INTERNACIONAL
                            </p>
                            <p class="text-sm text-slate-500">
                                Website Oficial do Evento
                            </p>
                        </div>
                    </a>

                    <!-- links -->
                    <nav class="hidden md:flex items-center gap-7 text-sm font-semibold text-slate-700">
                        <a href="#home" class="hover:text-slate-950">INÍCIO</a>
                        <a href="#about" class="hover:text-slate-950">SOBRE</a>
                        <a href="#speakers" class="hover:text-slate-950">PALESTRANTES</a>
                        <a href="#partners" class="hover:text-slate-950">PARCEIROS & PATROCINADORES</a>
                        <a href="#contact" class="hover:text-slate-950">CONTACTO</a>
                    </nav>

                    <!-- CTA -->
                    <a href="#register"
                        class="bg-indigo-700 text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-indigo-800">
                        INSCRIÇÃO
                    </a>
                </div>
            </div>
        </header>

        <!-- HERO CONTENT -->
        <div class="relative z-10">
            <div class="max-w-6xl mx-auto px-4 pt-14 pb-20 sm:pt-16">
                <div class="grid lg:grid-cols-2 gap-10 items-center">
                    <div class="text-white">
                        <div class="flex flex-col gap-2 text-white/90">
                            <div class="inline-flex items-center gap-2 text-sm font-semibold">
                                <span
                                    class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-white/10">📅</span>
                                <span class="uppercase tracking-wide">{{ $event['dates'] }}</span>
                            </div>
                            <div class="inline-flex items-center gap-2 text-sm font-semibold">
                                <span
                                    class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-white/10">📍</span>
                                <span class="uppercase tracking-wide">{{ $event['venue'] }}</span>
                            </div>
                        </div>

                        <h1 class="mt-8 text-4xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                            {{ $event['title'] }}
                        </h1>

                        <p class="mt-5 text-base sm:text-lg text-white/80 max-w-xl">
                            {{ $event['tagline'] }}
                        </p>

                        <div class="mt-8 flex flex-wrap gap-3">
                            <a href="#register"
                                class="bg-white text-indigo-900 px-6 py-3 rounded-lg font-semibold hover:bg-slate-100">
                                INSCREVER AGORA
                            </a>
                            <a href="#schedule"
                                class="border border-white/60 px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-indigo-900">
                                VER PROGRAMA
                            </a>
                        </div>

                        <p class="mt-6 text-sm text-white/65">
                            Início: <span class="font-semibold text-white/90">{{ $this->startLabel }}</span>
                        </p>
                    </div>

                    <!-- right panel (visual formal) -->
                    <div class="hidden lg:block">
                        <div
                            class="rounded-3xl border border-white/10 bg-white/5 backdrop-blur-sm shadow-2xl overflow-hidden">
                            <div class="p-6">
                                <p class="text-white font-bold text-lg">Destaques do Evento</p>
                                <p class="mt-2 text-white/70 text-sm leading-relaxed">
                                    Palestras principais, painéis, sessões técnicas, networking e reuniões oficiais.
                                </p>

                                <div class="mt-6 grid grid-cols-2 gap-4">
                                    <div class="rounded-2xl bg-white/10 p-4">
                                        <p class="text-white/80 text-xs font-bold uppercase tracking-widest">Trilhas</p>
                                        <p class="mt-2 text-white text-2xl font-extrabold">
                                            {{ $event['highlights']['trilhas'] }}</p>
                                    </div>

                                    <div class="rounded-2xl bg-white/10 p-4">
                                        <p class="text-white/80 text-xs font-bold uppercase tracking-widest">Sessões</p>
                                        <p class="mt-2 text-white text-2xl font-extrabold">
                                            {{ $event['highlights']['sessoes'] }}</p>
                                    </div>

                                    <div class="rounded-2xl bg-white/10 p-4">
                                        <p class="text-white/80 text-xs font-bold uppercase tracking-widest">
                                            Palestrantes</p>
                                        <p class="mt-2 text-white text-2xl font-extrabold">
                                            {{ $event['highlights']['palestrantes'] }}</p>
                                    </div>

                                    <div class="rounded-2xl bg-white/10 p-4">
                                        <p class="text-white/80 text-xs font-bold uppercase tracking-widest">
                                            Participantes</p>
                                        <p class="mt-2 text-white text-2xl font-extrabold">
                                            {{ $event['highlights']['participantes'] }}</p>
                                    </div>
                                </div>

                                <div class="mt-6 rounded-2xl border border-white/10 bg-white/5 p-4">
                                    <p class="text-white/85 text-sm font-semibold">Aviso Oficial</p>
                                    <p class="mt-1 text-white/65 text-sm">
                                        Confirme se os seus dados de inscrição estão correctos para credenciação e
                                        emissão de crachás.
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
</div>
