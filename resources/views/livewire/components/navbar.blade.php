<header class="relative z-10" x-data="{ open: false }">
    <div class="max-w-6xl mx-auto px-4 pt-6">
        <div class="bg-white rounded-2xl shadow-lg px-4 py-3 sm:px-6 sm:py-4">

            <!-- TOP BAR -->
            <div class="flex items-center justify-between gap-3">
                <!-- logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-4">
                    <div class="w-16 h-16 flex items-center justify-center">
                        <img src="{{ asset('assets/logo.jpeg') }}" alt="Logo" class="w-full h-full object-contain">
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

                <!-- RIGHT -->
                <div class="flex items-center gap-3">
                    <!-- CTA (no desktop) -->
                    <a href="#register"
                       class="hidden md:inline-flex bg-indigo-700 text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-indigo-800">
                        INSCRIÇÃO
                    </a>

                    <!-- MOBILE: botão menu -->
                    <button type="button"
                            class="md:hidden inline-flex items-center justify-center h-10 w-10 rounded-lg
                                   border border-slate-200 text-slate-700 hover:bg-slate-50"
                            @click="open = !open"
                            :aria-expanded="open.toString()"
                            aria-controls="mobile-menu"
                            aria-label="Abrir menu">
                        <!-- ícone -->
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>

                        <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- DESKTOP LINKS -->
            <nav class="hidden md:flex items-center gap-7 text-sm font-semibold mt-4">
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'text-indigo-700' : 'text-slate-700 hover:text-slate-950' }}">
                    INÍCIO
                </a>

                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'text-indigo-700' : 'text-slate-700 hover:text-slate-950' }}">
                    SOBRE
                </a>

                <a href="{{ route('speakers') }}"
                   class="{{ request()->routeIs('speakers') ? 'text-indigo-700' : 'text-slate-700 hover:text-slate-950' }}">
                    PALESTRANTES
                </a>

                <a href="{{ route('contact') }}"
                   class="{{ request()->routeIs('contact') ? 'text-indigo-700' : 'text-slate-700 hover:text-slate-950' }}">
                    CONTACTO
                </a>
            </nav>

            <!-- MOBILE MENU -->
            <div id="mobile-menu" class="md:hidden" x-show="open" x-collapse>
                <div class="mt-4 pt-4 border-t border-slate-200 flex flex-col gap-2 text-sm font-semibold">
                    <a href="{{ route('home') }}"
                       class="px-3 py-2 rounded-lg {{ request()->routeIs('home') ? 'text-indigo-700 bg-indigo-50' : 'text-slate-700 hover:bg-slate-50' }}">
                        INÍCIO
                    </a>

                    <a href="{{ route('about') }}"
                       class="px-3 py-2 rounded-lg {{ request()->routeIs('about') ? 'text-indigo-700 bg-indigo-50' : 'text-slate-700 hover:bg-slate-50' }}">
                        SOBRE
                    </a>

                    <a href="{{ route('speakers') }}"
                       class="px-3 py-2 rounded-lg {{ request()->routeIs('speakers') ? 'text-indigo-700 bg-indigo-50' : 'text-slate-700 hover:bg-slate-50' }}">
                        PALESTRANTES
                    </a>

                    <a href="{{ route('contact') }}"
                       class="px-3 py-2 rounded-lg {{ request()->routeIs('contact') ? 'text-indigo-700 bg-indigo-50' : 'text-slate-700 hover:bg-slate-50' }}">
                        CONTACTO
                    </a>

                    <!-- CTA no mobile -->
                    <a href="#register"
                       class="mt-2 inline-flex items-center justify-center bg-indigo-700 text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-indigo-800">
                        INSCRIÇÃO
                    </a>
                </div>
            </div>

        </div>
    </div>
</header>