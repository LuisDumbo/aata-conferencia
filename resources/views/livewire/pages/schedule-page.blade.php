<div>
       <!-- NAVBAR -->
       

    <section class="relative overflow-hidden bg-gradient-to-br from-indigo-950 via-indigo-900 to-slate-900 text-white">
         <livewire:components.navbar />
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(165,180,252,0.24),_transparent_30%),radial-gradient(circle_at_bottom_left,_rgba(96,165,250,0.16),_transparent_28%)]"></div>
        <div class="absolute inset-0 bg-[linear-gradient(135deg,rgba(255,255,255,0.03)_0%,transparent_38%,rgba(255,255,255,0.02)_100%)]"></div>

        <div class="relative max-w-6xl mx-auto px-4 py-12 sm:py-16">
            <div class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-start">
                <div>
                    <span class="inline-flex items-center rounded-full border border-indigo-300/20 bg-white/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.28em] text-indigo-100">
                        Agenda Institucional
                    </span>

                    <h2 class="mt-6 max-w-3xl text-3xl font-black tracking-tight text-white sm:text-5xl">
                        Um programa desenhado para decisao, conteudo tecnico e cooperacao regional.
                    </h2>

                    <p class="mt-5 max-w-2xl text-base leading-8 text-slate-300 sm:text-lg">
                        A programacao foi organizada por eixos tematicos, combinando sessoes plenarias, paineis tecnicos,
                        espacos de networking e blocos de trabalho para as delegacoes da IFATSEA em Africa.
                    </p>

                    <div class="mt-8 grid gap-4 sm:grid-cols-3">
                        <div class="rounded-3xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm shadow-[0_20px_60px_rgba(15,23,42,0.18)]">
                            <p class="text-sm text-slate-300">Dias de actividade</p>
                            <p class="mt-2 text-3xl font-black text-white">4</p>
                            <p class="mt-2 text-sm text-slate-400">De 23 a 26 de Junho de 2026</p>
                        </div>

                        <div class="rounded-3xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm shadow-[0_20px_60px_rgba(15,23,42,0.18)]">
                            <p class="text-sm text-slate-300">Blocos programados</p>
                            <p class="mt-2 text-3xl font-black text-white">18+</p>
                            <p class="mt-2 text-sm text-slate-400">Plenarias, workshops e foruns</p>
                        </div>

                        <div class="rounded-3xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm shadow-[0_20px_60px_rgba(15,23,42,0.18)]">
                            <p class="text-sm text-slate-300">Formato</p>
                            <p class="mt-2 text-3xl font-black text-white">Hibrido</p>
                            <p class="mt-2 text-sm text-slate-400">Sessao presencial com coordenação institucional</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[2rem] border border-white/10 bg-white/10 p-6 shadow-2xl backdrop-blur-md">
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-indigo-100">Direccao Editorial</p>
                    <div class="mt-5 space-y-5">
                        <div class="rounded-2xl border border-white/10 bg-indigo-950/30 p-5">
                            <p class="text-sm text-slate-400">Foco do programa</p>
                            <p class="mt-2 text-lg font-bold text-white">Seguranca operacional, resiliencia tecnica e cooperacao entre delegacoes.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-indigo-950/30 p-5">
                            <p class="text-sm text-slate-400">Observacao</p>
                            <p class="mt-2 text-sm leading-7 text-slate-300">
                                O programa abaixo e preliminar e podera ser ajustado pela comissao organizadora para acomodar confirmacoes institucionais e necessidades operacionais.
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <a href="{{ route('registration') }}"
                                class="inline-flex items-center justify-center rounded-2xl bg-white px-5 py-3 text-sm font-bold text-indigo-900 transition hover:bg-indigo-50">
                                Garantir Participacao
                            </a>
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center justify-center rounded-2xl border border-white/20 bg-white/5 px-5 py-3 text-sm font-semibold text-white transition hover:bg-white hover:text-indigo-900">
                                Solicitar Informacoes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 py-12 sm:py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-indigo-700">Programa por Dia</p>
                    <h3 class="mt-3 text-3xl font-black tracking-tight text-slate-950">Seleccione o dia e consulte a agenda principal.</h3>
                    <p class="mt-3 max-w-3xl text-base leading-7 text-slate-600">
                        Cada bloco foi pensado para combinar conteudo estrategico, troca tecnica e momentos reservados para articulacao institucional.
                    </p>
                </div>

                <div class="inline-flex rounded-3xl border border-slate-200 bg-white p-2 shadow-sm">
                    @foreach($programme as $date => $day)
                        <button
                            type="button"
                            wire:click="selectDay('{{ $date }}')"
                            class="rounded-2xl px-4 py-3 text-left text-sm font-semibold transition {{ $selectedDay === $date ? 'bg-slate-950 text-white shadow-lg' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-950' }}"
                        >
                            <span class="block">{{ $day['label'] }}</span>
                            <span class="mt-1 block text-xs {{ $selectedDay === $date ? 'text-slate-300' : 'text-slate-400' }}">{{ $day['day'] }}</span>
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="mt-10 grid gap-8 lg:grid-cols-[1.45fr_0.55fr]">
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
                        @foreach($this->activeDay['sessions'] as $session)
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

                <aside class="space-y-6">
                    <div class="rounded-[2rem] bg-slate-950 p-6 text-white shadow-xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-amber-300">Eixos do Encontro</p>
                        <ul class="mt-5 space-y-3 text-sm text-slate-300">
                            <li class="rounded-2xl border border-white/10 bg-white/5 px-4 py-3">Governanca regional e coordenacao institucional</li>
                            <li class="rounded-2xl border border-white/10 bg-white/5 px-4 py-3">Modernizacao CNS/ATM e resiliencia tecnica</li>
                            <li class="rounded-2xl border border-white/10 bg-white/5 px-4 py-3">Talento, formacao e sustentabilidade operacional</li>
                            <li class="rounded-2xl border border-white/10 bg-white/5 px-4 py-3">Networking executivo e alinhamento entre parceiros</li>
                        </ul>
                    </div>

                    <div class="rounded-[2rem] bg-white p-6 shadow-xl ring-1 ring-slate-200">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-indigo-700">Notas Operacionais</p>
                        <div class="mt-5 space-y-4 text-sm leading-7 text-slate-600">
                            <p>As sessoes plenarias decorrem na Sala Diamante, enquanto os blocos tematicos podem ser distribuidos por salas paralelas.</p>
                            <p>Os horarios de credenciacao e networking podem sofrer pequenos ajustes de acordo com a agenda protocolar das delegacoes oficiais.</p>
                            <p>Participantes inscritos receberao a versao final do programa, com oradores confirmados, via canais oficiais do evento.</p>
                        </div>
                    </div>

                    <div class="rounded-[2rem] bg-gradient-to-br from-amber-300 via-amber-200 to-orange-200 p-6 text-slate-950 shadow-xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-slate-800">Participacao</p>
                        <h5 class="mt-3 text-2xl font-black">Pretende integrar a agenda oficial?</h5>
                        <p class="mt-3 text-sm leading-7 text-slate-800/80">
                            Para confirmar presenca, propor intervencoes ou alinhar uma reuniao institucional, utilize os canais formais de inscricao e contacto.
                        </p>
                        <div class="mt-5 flex flex-col gap-3">
                            <a href="{{ route('registration') }}" class="inline-flex items-center justify-center rounded-2xl bg-slate-950 px-4 py-3 text-sm font-bold text-white transition hover:bg-slate-800">
                                Fazer Inscricao
                            </a>
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-900/15 px-4 py-3 text-sm font-semibold text-slate-900 transition hover:bg-white/60">
                                Falar com a Organizacao
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="bg-white py-12 sm:py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid gap-5 md:grid-cols-3">
                <div class="rounded-[2rem] border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-indigo-700">Plenarias</p>
                    <h4 class="mt-3 text-xl font-black text-slate-950">Direccao politica e institucional</h4>
                    <p class="mt-3 text-sm leading-7 text-slate-600">
                        Sessoes reservadas para abertura, deliberacoes, conclusoes e comunicacao oficial da reuniao regional.
                    </p>
                </div>
                <div class="rounded-[2rem] border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-indigo-700">Tecnicas</p>
                    <h4 class="mt-3 text-xl font-black text-slate-950">Conteudo especializado e aplicavel</h4>
                    <p class="mt-3 text-sm leading-7 text-slate-600">
                        Paineis, workshops e demonstracoes centradas em manutencao, seguranca, automacao e evolucao de sistemas CNS/ATM.
                    </p>
                </div>
                <div class="rounded-[2rem] border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-indigo-700">Relacionamento</p>
                    <h4 class="mt-3 text-xl font-black text-slate-950">Espacos de conexao qualificada</h4>
                    <p class="mt-3 text-sm leading-7 text-slate-600">
                        Momentos desenhados para encontros entre delegados, parceiros, patrocinadores e representantes do sector.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>