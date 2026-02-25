{{-- HERO (igual ao exemplo) --}}
<section class="relative overflow-hidden mb-5">

    {{-- SECÇÃO AGENDA --}}
    <section class="relative py-20">
        {{-- fundo confete --}}
        <div class="absolute inset-0 opacity-35"
            style="background-image:url('https://www.transparenttextures.com/patterns/confetti.png');">
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">

            <span
                class="inline-flex items-center rounded bg-indigo-950 px-3 py-1 text-xs font-bold tracking-wide text-white">
                PROGRAMA DO EVENTO
            </span>

            <h2 class="mt-5 text-4xl font-extrabold text-slate-900">
                Agenda da Conferência
            </h2>

            <p class="mt-3 text-slate-600 max-w-2xl mx-auto">
                Aceda à agenda oficial da 16ª Reunião Regional Africana da IFATSEA.
                Faça o download agora para se manter informado e planear a sua participação.
            </p>

            <div class="mt-8">
                <a href="#download"
                    class="inline-flex items-center gap-2 rounded-md bg-indigo-700 px-6 py-3 text-sm font-semibold text-white hover:bg-indigo-800">
                    <span>⬇</span>
                    <span>TRANSFERIR</span>
                </a>
            </div>

        </div>
    </section>

    {{-- ÁREA DO HERO COM IMAGEM --}}
    <div class="relative h-[420px] md:h-[520px] bg-cover bg-center"
        style="background-image:url('https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=2400&q=80');">

        {{-- overlay leve na imagem --}}
        <div class="absolute inset-0 bg-indigo-950/30"></div>

        {{-- faixa roxa com corte diagonal --}}
        <div class="absolute inset-0 flex justify-end">
            <div class="relative h-full w-full md:w-[62%] bg-indigo-950/80">
                {{-- corte diagonal na esquerda da faixa --}}
                <div class="absolute left-[-140px] top-0 h-full w-[260px] bg-indigo-950/80"
                    style="clip-path: polygon(0 0, 100% 0, 0 100%);">
                </div>

                {{-- gradiente para dar profundidade --}}
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-950/95 via-indigo-900/75 to-indigo-900/45">
                </div>
            </div>
        </div>

        {{-- conteúdo do hero --}}
        <div class="relative z-10 h-full">

            <div class="max-w-6xl mx-auto px-4 h-full flex items-center">
                <div class="w-full md:w-[56%] md:ml-auto text-white">

                    <h1 class="text-3xl md:text-5xl font-extrabold leading-tight">
                        Faça Parte da 16ª Reunião Regional Africana da IFATSEA
                    </h1>

                    <p class="mt-4 text-sm md:text-base text-indigo-100/90 max-w-xl">
                        Garanta já a sua vaga na 16ª Reunião Regional Africana da IFATSEA.
                        Registe-se agora para conectar-se, aprender e contribuir para a segurança da aviação.
                    </p>

                    <div class="mt-8">
                        <a href="#register"
                            class="inline-flex items-center gap-2 rounded-md bg-amber-600 px-6 py-3 text-sm font-semibold text-white hover:bg-amber-700">
                            <span>↗</span>
                            <span>INSCREVER-SE AGORA</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
