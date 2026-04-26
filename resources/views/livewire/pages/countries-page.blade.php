<div>
    <livewire:components.page-nav-bar :title="t('paises.page_title')" :subtitle="t('paises.page_subtitle')" />

    <section class="bg-white">
        <div class="max-w-5xl mx-auto px-4 py-12 sm:py-16">

            {{-- Intro --}}
            <p class="text-slate-600 leading-relaxed text-base max-w-3xl">
                {{ t('paises.intro') }}
            </p>

            {{-- Tabela de vistos --}}
            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Coluna: Requer Visto --}}
                <div class="rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                    <div class="bg-[#0d1f4e] px-6 py-4 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-red-500/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                            </svg>
                        </div>
                        <h2 class="text-white font-bold text-sm sm:text-base uppercase tracking-wide">
                            {{ t('paises.visa_required_title') }}
                        </h2>
                    </div>
                    <ul class="divide-y divide-slate-100">
                        @foreach (config(current_lang() . '.paises.visa_required', config('pt.paises.visa_required')) as $country)
                            <li class="flex items-center gap-3 px-6 py-3 hover:bg-slate-50 transition-colors">
                                <span class="w-2 h-2 rounded-full bg-red-400 flex-shrink-0"></span>
                                <span class="text-slate-700 text-sm font-medium">{{ $country }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Coluna: Isento de Visto --}}
                <div class="rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                    <div class="bg-[#0d1f4e] px-6 py-4 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-emerald-500/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h2 class="text-white font-bold text-sm sm:text-base uppercase tracking-wide">
                            {{ t('paises.no_visa_title') }}
                        </h2>
                    </div>
                    <ul class="divide-y divide-slate-100">
                        @foreach (config(current_lang() . '.paises.no_visa', config('pt.paises.no_visa')) as $country)
                            <li class="flex items-center gap-3 px-6 py-3 hover:bg-slate-50 transition-colors">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 flex-shrink-0"></span>
                                <span class="text-slate-700 text-sm font-medium">{{ $country }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Nota de rodapé --}}
            <div class="mt-8 flex items-start gap-3 rounded-xl bg-amber-50 border border-amber-200 px-5 py-4">
                <svg class="w-5 h-5 text-amber-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                </svg>
                <p class="text-sm text-amber-800 leading-relaxed">
                    {{ t('paises.note') }}
                </p>
            </div>

        </div>
    </section>
</div>
