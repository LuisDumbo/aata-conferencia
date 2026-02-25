<section id="about" class="relative  border-b border-slate-200 bg-white py-20 overflow-hidden">
    <!-- fundo suave tipo ondas/linhas -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-24 -left-24 h-[420px] w-[420px] rounded-full bg-slate-100/60 blur-3xl"></div>
        <div class="absolute -bottom-24 -right-24 h-[520px] w-[520px] rounded-full bg-slate-100/70 blur-3xl"></div>

        <!-- linhas bem leves -->
        <svg class="absolute inset-0 h-full w-full opacity-[0.08]" viewBox="0 0 1200 600" preserveAspectRatio="none">
            <defs>
                <linearGradient id="g" x1="0" x2="1" y1="0" y2="0">
                    <stop offset="0" stop-color="#64748b" stop-opacity="0.25"></stop>
                    <stop offset="1" stop-color="#94a3b8" stop-opacity="0.15"></stop>
                </linearGradient>
            </defs>
            <path d="M0,120 C220,40 420,200 650,120 C880,40 1020,120 1200,80" fill="none" stroke="url(#g)"
                stroke-width="2" />
            <path d="M0,220 C240,140 420,340 680,240 C940,140 1050,240 1200,200" fill="none" stroke="url(#g)"
                stroke-width="2" />
            <path d="M0,340 C240,260 450,460 700,360 C950,260 1060,380 1200,320" fill="none" stroke="url(#g)"
                stroke-width="2" />
            <path d="M0,460 C260,380 470,560 740,460 C1000,360 1080,520 1200,460" fill="none" stroke="url(#g)"
                stroke-width="2" />
        </svg>
    </div>

    <div class="relative max-w-6xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <!-- ESQUERDA: texto -->
            <div>
                <span
                    class="inline-flex items-center rounded-md bg-indigo-50 px-3 py-1 text-[11px] font-extrabold tracking-widest text-indigo-700 uppercase">
                    Sobre o Encontro
                </span>

                <h2 class="mt-5 text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900 leading-[1.05]">
                    Bem-vindo ao Encontro<br class="hidden sm:block">
                    Regional África da IFATSEA.<br class="hidden sm:block">
                    Elevando a Segurança da Aviação
                </h2>

                <p class="mt-6 text-slate-600 leading-relaxed max-w-xl">
                    O Encontro Regional África da IFATSEA reúne profissionais de engenharia para a segurança da aviação,
                    com foco em avanços do setor, desafios atuais e cooperação entre instituições. Junte-se a
                    especialistas,
                    partes interessadas e líderes que estão a contribuir para um transporte aéreo mais seguro e moderno
                    em África.
                    Não perca esta oportunidade de networking e partilha de conhecimento.
                </p>

                <div class="mt-8">
                    <a href="{{ route('about') }}"
                        class="inline-flex items-center justify-center rounded-lg bg-indigo-700 px-6 py-3
                              text-sm font-extrabold text-white shadow-sm
                              hover:bg-indigo-800 transition-colors">
                        MAIS SOBRE O ENCONTRO
                    </a>
                </div>
            </div>

            <!-- DIREITA: imagem -->
            <div class="flex justify-center lg:justify-end">
                <div class="w-full max-w-[560px]">
                    <div class="rounded-none overflow-hidden shadow-none">
                        <img src="{{ asset('assets/logo.jpeg') }}" alt="Evento / Conferência"
                            class="w-full object-cover">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
