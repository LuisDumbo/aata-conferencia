<div>
    <livewire:components.page-nav-bar title="Biografia" subtitle="Avelino de Jesus Fernandes Dias" />

    <div class="max-w-4xl mx-auto px-4 py-12">

        {{-- Cabeçalho do perfil --}}
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="p-8 md:p-10">

                {{-- Nome + botão download --}}
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-6">
                    <div>
                        <h1 class="text-2xl md:text-3xl font-extrabold text-slate-900">
                            Avelino de Jesus Fernandes Dias
                        </h1>
                        <p class="mt-1 text-slate-500 text-sm font-medium uppercase tracking-wide">
                            Engenheiro de Sistemas &amp; Vistoriador GMDSS-AIS
                        </p>
                        <p class="mt-1 text-indigo-700 font-semibold">MARAVE, LDA</p>
                    </div>

                    <a href="{{ asset('assets/palestrantes/Biografia_Avelino_Dias.pdf') }}" download
                        class="inline-flex items-center gap-2 self-start rounded-xl bg-indigo-600 px-6 py-3 text-sm font-semibold text-white hover:bg-indigo-700 transition-colors whitespace-nowrap">
                        <i class="fa-solid fa-file-arrow-down"></i>
                        Descarregar Biografia
                    </a>
                </div>

                <hr class="my-8 border-slate-100">

                {{-- Educação --}}
                <div class="mb-8">
                    <h2 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Educação</h2>
                    <ul class="space-y-2 text-slate-700 text-sm leading-relaxed">
                        <li>Ensino primário e preparatório em <strong>Huambo</strong></li>
                        <li>Ensino pré-universitário em <strong>Luanda</strong></li>
                        <li>Estudou na <strong>Universidade Agostinho Neto</strong>, licenciado pela <strong>Faculdade AIEC</strong></li>
                        <li>MBA em Gestão de Tecnologias de Informação <span class="text-slate-400">(em fase final de conclusão)</span></li>
                        <li>MBA em Empreendedorismo e Inovação</li>
                        <li>Licenciatura em Análise e Desenvolvimento de Sistemas</li>
                    </ul>
                </div>

                {{-- Formação Geral e Técnica --}}
                <div class="mb-8">
                    <h2 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">I. Formação Geral e Técnica</h2>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-1.5 text-slate-700 text-sm">
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Técnicas de Manutenção e Liderança</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Gestão de Projetos</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Linhas de Transmissão e Antenas</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Microprocessador 8085</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Comunicações por Satélite VSAT</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>CCTV</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>CCNA</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Administrador de Sistemas</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Telefonia VOIP</li>
                    </ul>
                </div>

                {{-- Formação Técnica em Sistemas Aeronáuticos --}}
                <div class="mb-8">
                    <h2 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">II. Formação Técnica em Sistemas Aeronáuticos</h2>
                    <ul class="space-y-1.5 text-slate-700 text-sm">
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Curso de Manutenção ATC ICAO 161; ICAO 162</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Formação em Serviço em Aviónicos</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Conceitos de Radar e Radar de Vigilância Secundária</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Seminário de Inspeção de Voo</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>NDB Nautel e SAC</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Wilcox CVOR-DME e ILS Mark ID; Feranu Avionics DVOR-DME; Normarc ILS; Thales CVOR e DVOR-DME</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Frequentis VCS (Sistema de Comunicações de Voz)</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Frequentis-Comsoft AIM</li>
                    </ul>
                </div>

                {{-- Formação Técnica em Comunicações Marítimas --}}
                <div class="mb-8">
                    <h2 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">III. Formação Técnica em Comunicações, Navegação e Segurança Marítimas</h2>
                    <ul class="space-y-1.5 text-slate-700 text-sm">
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>Inspector GMDSS-AIS</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>GMDSS-GOC (Certificado Geral de Operador)</li>
                    </ul>
                </div>

                {{-- Experiência Profissional --}}
                <div class="mb-8">
                    <h2 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">IV. Experiência Profissional</h2>
                    <ul class="space-y-2 text-slate-700 text-sm leading-relaxed">
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-amber-500 flex-shrink-0"></span>Electricista Industrial de 1977 a 1978</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-amber-500 flex-shrink-0"></span>Ingressou nos Serviços de Aviação Civil (SAC) como estagiário em 1978</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-amber-500 flex-shrink-0"></span>De 1979 a 2010, exerceu funções de Técnico de Telecomunicações Aeronáuticas (ATSEP), atingindo o nível máximo de Senior TTA</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-amber-500 flex-shrink-0"></span>Liderou equipas responsáveis pela instalação de auxílios de radionavegação em Angola</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-amber-500 flex-shrink-0"></span>Exerceu funções de liderança a nível estratégico, táctico e operacional</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-amber-500 flex-shrink-0"></span>Chefe do Departamento de Instalação, Manutenção e Equipamentos na ENANA-EP</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-amber-500 flex-shrink-0"></span>De 2005 a 2006, participou na comissão conjunta BOEING/INAVIC/ENANA para avaliação das condições operacionais e de segurança de 24 aeroportos em Angola</li>
                    </ul>
                </div>

                {{-- Actividades Actuais --}}
                <div class="rounded-2xl bg-indigo-50 border border-indigo-100 p-6">
                    <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-400 mb-1">IV.1 Actividades Actuais</h2>
                    <p class="text-indigo-700 font-bold mb-4">Engenheiro de Sistemas e Vistoriador GMDSS-AIS</p>
                    <ul class="space-y-2 text-slate-700 text-sm leading-relaxed">
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-600 flex-shrink-0"></span>Proprietário da <strong>MARAVE, LDA</strong>, empresa especializada em serviços de Telecomunicações e Tecnologias de Informação</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-600 flex-shrink-0"></span>Desde 2009, lidera o fornecimento, instalação e manutenção de NDB(s) para a FANA (Força Aérea Nacional) e inspecção de radiofaróis para apoio a operações de helicópteros offshore e <strong>GMDSS-AIS</strong> em plataformas Rig Oil e FPSO no offshore angolano (2011–2025)</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-600 flex-shrink-0"></span>De 2023 a 2024, sob liderança da Frequentis, participou nas actividades de comissionamento e testes de aceitação do VCS instalado na AIAAN</li>
                        <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-indigo-600 flex-shrink-0"></span>Actualmente, sob liderança da Frequentis-Comsoft, participa no projecto de instalação do AIM na AIAAN</li>
                    </ul>
                </div>

            </div>
        </div>

        {{-- Botão download em baixo --}}
        <div class="mt-8 flex justify-center">
            <a href="{{ asset('assets/palestrantes/Biografia_Avelino_Dias.pdf') }}" download
                class="inline-flex items-center gap-3 rounded-2xl bg-indigo-600 px-8 py-4 text-base font-semibold text-white hover:bg-indigo-700 transition-colors shadow-lg">
                <i class="fa-solid fa-file-arrow-down text-lg"></i>
                Descarregar Biografia em PDF
            </a>
        </div>

    </div>
</div>
