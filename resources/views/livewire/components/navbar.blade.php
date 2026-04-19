<header class="relative z-50" x-data="{ open: false, dropdownOpen: false, mobileDropdownOpen: false }"
    @keydown.escape.window="open = false; dropdownOpen = false; mobileDropdownOpen = false">
    <div class="max-w-6xl mx-auto px-4 pt-6">

        <!-- CARD -->
        <div class="bg-white rounded-2xl shadow-lg px-4 py-3 sm:px-6 sm:py-4 flex items-center justify-between gap-3">

            <!-- LOGO -->
            <a href="{{ route('home') }}" class="flex items-center gap-4">
                <div class="w-16 h-16 flex items-center justify-center">
                    <img src="{{ asset('assets/logo.jpeg') }}" alt="Logo" class="w-full h-full object-contain">
                </div>

                <div class="leading-tight">
                    <p class="text-base font-extrabold text-slate-900">CONFERÊNCIA INTERNACIONAL</p>
                    <p class="text-sm text-slate-500">Website Oficial do Evento</p>
                </div>
            </a>

            <!-- DESKTOP -->
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

                    <!-- DROPDOWN -->
                    <div class="relative">

                        <button type="button" @click="dropdownOpen = !dropdownOpen"
                            class="flex items-center gap-1 py-2 {{ request()->routeIs('schedule') || request()->routeIs('speakers') || request()->routeIs('partners') || request()->routeIs('hotels') ? 'text-indigo-700' : 'text-slate-700 hover:text-slate-950' }}">
                            EVENTO
                            <svg class="w-4 h-4 transition" :class="dropdownOpen ? 'rotate-180' : ''" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div x-show="dropdownOpen" x-cloak x-transition @click.outside="dropdownOpen = false"
                            class="absolute left-0 top-full pt-2 w-56 z-50">

                            <div class="bg-white rounded-xl shadow-lg border border-slate-100 py-2">


                                <a href="{{ route('schedule') }}" @click="dropdownOpen = false"
                                    class="block px-4 py-2 text-sm {{ request()->routeIs('schedule') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-700 hover:bg-slate-50 hover:text-indigo-700' }}">
                                    Programa
                                </a>

                                <a href="{{ route('speakers') }}" @click="dropdownOpen = false"
                                    class="block px-4 py-2 text-sm {{ request()->routeIs('speakers') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-700 hover:bg-slate-50 hover:text-indigo-700' }}">
                                    Palestrantes
                                </a>

                                <a href="{{ route('partners') }}" @click="dropdownOpen = false"
                                    class="block px-4 py-2 text-sm {{ request()->routeIs('partners') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-700 hover:bg-slate-50 hover:text-indigo-700' }}">
                                    Parceiros
                                </a>


                                <a href="{{ route('hotels') }}" @click="dropdownOpen = false"
                                    class="block px-4 py-2 text-sm {{ request()->routeIs('hotels') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-700 hover:bg-slate-50 hover:text-indigo-700' }}">
                                    Hoteis & Alojamentos
                                </a>

                            </div>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'text-indigo-700' : 'text-slate-700 hover:text-slate-950' }}">
                        CONTACTO
                    </a>
                </nav>

                <!-- CTA -->
                <a href="{{ route('registration') }}"
                    class="bg-indigo-700 text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-indigo-800">
                    INSCRIÇÃO
                </a>
            </div>

            <!-- MOBILE BUTTON -->
            <button type="button"
                class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg border border-slate-200 text-slate-700 hover:bg-slate-50"
                @click="open = !open">

                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- MOBILE MENU -->
        <div class="md:hidden mt-3" x-show="open" x-cloak>
            <div class="bg-white rounded-2xl shadow-lg p-4 flex flex-col gap-3 text-sm font-semibold">

                <a @click="open=false" href="{{ route('home') }}">INÍCIO</a>
                <a @click="open=false" href="{{ route('about') }}">SOBRE</a>

                <!-- MOBILE DROPDOWN -->
                <div>
                    <button @click="mobileDropdownOpen = !mobileDropdownOpen" class="flex justify-between w-full">
                        EVENTO
                        <span x-text="mobileDropdownOpen ? '−' : '+'"></span>
                    </button>

                    <div x-show="mobileDropdownOpen" x-cloak class="mt-2 ml-4 flex flex-col gap-2 text-sm">

                        <a @click="open=false; mobileDropdownOpen=false" href="{{ route('schedule') }}"
                            class="{{ request()->routeIs('schedule') ? 'text-indigo-700' : 'text-slate-700 hover:text-indigo-700' }}">Programa</a>
                        <a @click="open=false; mobileDropdownOpen=false" href="{{ route('speakers') }}"
                            class="{{ request()->routeIs('speakers') ? 'text-indigo-700' : 'text-slate-700 hover:text-indigo-700' }}">Palestrantes</a>
                        <a @click="open=false; mobileDropdownOpen=false" href="{{ route('partners') }}"
                            class="{{ request()->routeIs('partners') ? 'text-indigo-700' : 'text-slate-700 hover:text-indigo-700' }}">Parceiros</a>
                        <a @click="open=false; mobileDropdownOpen=false" href="{{ route('hotels') }}"
                            class="{{ request()->routeIs('hotels') ? 'text-indigo-700' : 'text-slate-700 hover:text-indigo-700' }}">Hoteis
                            & Alojamentos</a>
                    </div>
                </div>

                <a @click="open=false" href="{{ route('contact') }}">CONTACTO</a>

                <a @click="open=false" href="{{ route('registration') }}"
                    class="mt-2 bg-indigo-700 text-white px-5 py-2.5 rounded-lg text-center font-semibold">
                    INSCRIÇÃO
                </a>
            </div>
        </div>

    </div>
</header>
