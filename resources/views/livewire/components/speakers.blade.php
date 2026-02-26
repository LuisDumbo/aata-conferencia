<section id="speakers" class="py-16 bg-slate-50">
    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl font-extrabold tracking-tight text-slate-900">Palestrantes</h2>
            <p class="mt-4 text-slate-600 leading-relaxed">
                Especialistas convidados para partilhar conhecimento e experiência.
            </p>
        </div>

        <!-- CARROSSEL -->
        <div class="mt-10" wire:ignore>
            <div class="relative">

                <!-- Botão anterior -->
                <button type="button"
                    class="speakersPrev absolute -left-3 top-1/2 -translate-y-1/2 z-10
                   h-10 w-10 rounded-full bg-white border border-slate-200 shadow-sm
                   flex items-center justify-center hover:bg-slate-50">
                    ‹
                </button>

                <!-- Botão seguinte -->
                <button type="button"
                    class="speakersNext absolute -right-3 top-1/2 -translate-y-1/2 z-10
                   h-10 w-10 rounded-full bg-white border border-slate-200 shadow-sm
                   flex items-center justify-center hover:bg-slate-50">
                    ›
                </button>

                <div class="swiper speakersSwiper overflow-hidden w-full">
                    <div class="swiper-wrapper">
                        @foreach ($speakers as $sp)
                            <div class="swiper-slide h-auto">
                                <a href="#"
                                    class="group relative block h-full rounded-2xl border border-slate-200 bg-white p-6 shadow-sm
                   transition-all duration-300 ease-out
                   hover:-translate-y-2 hover:shadow-xl hover:border-indigo-200">

                                    <div class="flex items-center gap-4">

                                        <!-- FOTO / INICIAIS -->
                                        <div
                                            class="h-14 w-14 rounded-xl overflow-hidden flex items-center justify-center
                            bg-indigo-700/10 text-indigo-800 font-extrabold text-sm
                            transition-all duration-300
                            group-hover:bg-indigo-700 group-hover:text-white">

                                            @if (!empty($sp['photo']))
                                                <img src="{{ asset($sp['photo']) }}" alt="{{ $sp['name'] }}"
                                                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                                            @else
                                                {{ $sp['initials'] }}
                                            @endif

                                        </div>

                                        <!-- NOME E CARGO -->
                                        <div>
                                            <p
                                                class="text-base font-extrabold text-slate-900 
                              group-hover:text-indigo-700 transition-colors duration-300">
                                                {{ $sp['name'] }}
                                            </p>
                                            <p class="text-sm text-slate-600">
                                                {{ $sp['role'] }} • {{ $sp['org'] }}
                                            </p>
                                        </div>
                                    </div>

                                    <!-- TEMA -->
                                    <div class="mt-4">
                                        <p class="text-xs font-bold uppercase tracking-widest text-slate-500">
                                            Tema
                                        </p>
                                        <p class="mt-2 text-sm text-slate-700 leading-relaxed">
                                            {{ $sp['topic'] }}
                                        </p>
                                    </div>

                                    <!-- EFEITO DE BRILHO SUAVE -->
                                    <div
                                        class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100
                        transition-opacity duration-300 pointer-events-none
                        bg-gradient-to-br from-indigo-50/40 to-transparent">
                                    </div>

                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Paginação (bolinhas) -->
                    <div class="speakersPagination mt-6 flex justify-center"></div>
                </div>

            </div>
        </div>

        <!-- CTA -->
        <div class="mt-10 rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h3 class="text-xl font-extrabold text-slate-900">Ver todos os palestrantes</h3>
                    <p class="mt-2 text-sm text-slate-600">
                        Consulte a lista completa de especialistas convidados.
                    </p>
                </div>

                <a href="#speakers"
                    class="inline-flex items-center justify-center rounded-lg border border-slate-300 px-5 py-2.5 text-sm font-semibold hover:bg-slate-50">
                    Ver lista completa
                </a>
            </div>
        </div>

    </div>
</section>

@push('scripts')
    <script>
        function initSpeakersSwiper() {
            const el = document.querySelector('.speakersSwiper');
            if (!el || !window.Swiper) return;

            if (el.swiper) el.swiper.destroy(true, true);

            const swiper = new window.Swiper(el, {
                slidesPerView: 1,
                spaceBetween: 24,
                watchOverflow: true,
                observer: true,
                observeParents: true,
                grabCursor: true,

                navigation: {
                    nextEl: '.speakersNext',
                    prevEl: '.speakersPrev',
                },

                pagination: {
                    el: '.speakersPagination',
                    clickable: true,
                },

                breakpoints: {
                    640: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    },
                }
            });

            setTimeout(() => swiper.update(), 50);
        }

        document.addEventListener('DOMContentLoaded', initSpeakersSwiper);

        document.addEventListener('livewire:init', () => {
            initSpeakersSwiper();
            Livewire.hook('message.processed', () => initSpeakersSwiper());
        });
    </script>
@endpush
