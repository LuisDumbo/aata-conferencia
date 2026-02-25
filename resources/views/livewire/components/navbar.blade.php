<header class="relative z-10" x-data="{ open: false }">
    <div class="max-w-6xl mx-auto px-4 pt-6">

        <!-- CARD PRINCIPAL -->
        <div class="bg-white rounded-2xl shadow-lg px-4 py-3 sm:px-6 sm:py-4 flex items-center justify-between gap-3">

            <!-- logo -->
            <a href="#home" class="flex items-center gap-4">
                <div class="w-16 h-16 flex items-center justify-center">
                    <img src="{{ asset('assets/logo.jpeg') }}" alt="Logo" class="w-full h-full object-contain">
                </div>

                <div class="leading-tight">
                    <p class="text-base font-extrabold text-slate-900">CONFERÊNCIA INTERNACIONAL</p>
                    <p class="text-sm text-slate-500">Website Oficial do Evento</p>
                </div>
            </a>

            <!-- lado direito (desktop) -->
            <div class="hidden md:flex items-center gap-6">
                <nav class="flex items-center gap-7 text-sm font-semibold">
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

                <!-- CTA desktop -->
                <a href="#register"
                    class="bg-indigo-700 text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-indigo-800">
                    INSCRIÇÃO
                </a>
            </div>

            <!-- botão menu (mobile) -->
            <button type="button"
                class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg border border-slate-200 text-slate-700 hover:bg-slate-50"
                @click="open = !open" :aria-expanded="open.toString()" aria-controls="mobile-menu">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- DROPDOWN MOBILE (abaixo do card) -->
        <div id="mobile-menu" class="md:hidden mt-3" x-show="open" x-cloak @click.outside="open = false" x-transition>
            <div class="bg-white rounded-2xl shadow-lg p-4 flex flex-col gap-3 text-sm font-semibold">
                <a @click="open=false" href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'text-indigo-700' : 'text-slate-700 hover:text-slate-950' }}">
                    INÍCIO
                </a>

                <a @click="open=false" href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'text-indigo-700' : 'text-slate-700 hover:text-slate-950' }}">
                    SOBRE
                </a>

                <a @click="open=false" href="{{ route('speakers') }}"
                    class="{{ request()->routeIs('speakers') ? 'text-indigo-700' : 'text-slate-700 hover:text-slate-950' }}">
                    PALESTRANTES
                </a>

                <a @click="open=false" href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? 'text-indigo-700' : 'text-slate-700 hover:text-slate-950' }}">
                    CONTACTO
                </a>

                <!-- CTA no mobile dentro do dropdown -->
                <a @click="open=false" href="#register"
                    class="mt-2 bg-indigo-700 text-white px-5 py-2.5 rounded-lg text-center font-semibold hover:bg-indigo-800">
                    INSCRIÇÃO
                </a>
            </div>
        </div>

    </div>
</header>
