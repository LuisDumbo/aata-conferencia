<header class="relative z-10">
    <div class="max-w-6xl mx-auto px-4 pt-6">
        <div class="bg-white rounded-2xl shadow-lg px-4 py-3 sm:px-6 sm:py-4 flex items-center justify-between gap-3">

            <!-- logo -->
            <a href="{{ route('home') }}"  class="flex items-center gap-4">
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

            <!-- links -->
            <nav class="hidden md:flex items-center gap-7 text-sm font-semibold">

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

            <!-- CTA -->
            <a href="#register"
                class="bg-indigo-700 text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-indigo-800">
                INSCRIÇÃO
            </a>

        </div>
    </div>
</header>
