<section id="salas" class="py-16 bg-slate-50">
    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl font-extrabold tracking-tight text-slate-900">{{ t('salas_home.title') }}</h2>
            <p class="mt-4 text-slate-600 leading-relaxed">
                {{ t('salas_home.subtitle') }}
            </p>
        </div>

        <!-- CARROSSEL -->
        <div class="mt-10" wire:ignore>
            <div class="relative">

                <!-- Botão anterior -->
                <button type="button"
                    class="salasPrev absolute -left-3 top-1/2 -translate-y-1/2 z-10
                   h-10 w-10 rounded-full bg-white border border-slate-200 shadow-sm
                   flex items-center justify-center hover:bg-slate-50">
                    ‹
                </button>

                <!-- Botão seguinte -->
                <button type="button"
                    class="salasNext absolute -right-3 top-1/2 -translate-y-1/2 z-10
                   h-10 w-10 rounded-full bg-white border border-slate-200 shadow-sm
                   flex items-center justify-center hover:bg-slate-50">
                    ›
                </button>

                <div class="swiper salasSwiper overflow-hidden w-full">
                    <div class="swiper-wrapper">
                        @foreach ($salas as $sala)
                            <div class="swiper-slide h-auto">
                                <a href="{{ route('salas.show', $sala['slug']) }}"
                                    class="group relative block h-full rounded-2xl border border-slate-200 bg-white p-6 shadow-sm
                   transition-all duration-300 ease-out
                   hover:-translate-y-2 hover:shadow-xl hover:border-indigo-200">

                                    <div class="flex flex-col items-center text-center gap-3">

                                        <!-- FOTO / INICIAIS -->
                                        <div
                                            class="h-24 w-24 rounded-2xl overflow-hidden flex items-center justify-center
                            bg-indigo-700/10 text-indigo-800 font-extrabold text-lg
                            transition-all duration-300
                            group-hover:bg-indigo-700 group-hover:text-white">

                                            @if (!empty($sala['photo']))
                                                <img src="{{ asset($sala['photo']) }}" alt="{{ $sala['name'] }}"
                                                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                                            @else
                                                {{ $sala['initials'] }}
                                            @endif

                                        </div>

                                        <!-- NOME E TIPO -->
                                        <div>
                                            <p
                                                class="text-base font-extrabold text-slate-900
                              group-hover:text-indigo-700 transition-colors duration-300">
                                                {{ $sala['name'] }}
                                            </p>
                                            @if (!empty($sala['role']))
                                                <p class="text-sm text-slate-600">{{ $sala['role'] }}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- UTILIZAÇÃO -->
                                    @if (!empty($sala['topic']))
                                        <div class="mt-4">
                                            <p class="text-xs font-bold uppercase tracking-widest text-slate-500">
                                                {{ t('salas_home.topic_label') }}
                                            </p>
                                            <p class="mt-2 text-sm text-slate-700 leading-relaxed">
                                                {{ $sala['topic'] }}
                                            </p>
                                        </div>
                                    @endif

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
                    <div class="salasPagination mt-6 flex justify-center"></div>
                </div>

            </div>
        </div>

        <!-- CTA -->
        <div class="mt-10 rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h3 class="text-xl font-extrabold text-slate-900">{{ t('salas_home.see_all_title') }}</h3>
                    <p class="mt-2 text-sm text-slate-600">
                        {{ t('salas_home.see_all_desc') }}
                    </p>
                </div>

                <a href="{{ route('salas') }}"
                    class="inline-flex items-center justify-center rounded-lg border border-slate-300 px-5 py-2.5 text-sm font-semibold hover:bg-slate-100">
                    {{ t('salas_home.see_all_cta') }}
                </a>
            </div>
        </div>

    </div>
</section>

@push('scripts')
    <script>
        function initSalasSwiper() {
            const el = document.querySelector('.salasSwiper');
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
                    nextEl: '.salasNext',
                    prevEl: '.salasPrev',
                },

                pagination: {
                    el: '.salasPagination',
                    clickable: true,
                },

                breakpoints: {
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                }
            });

            setTimeout(() => swiper.update(), 50);
        }

        document.addEventListener('DOMContentLoaded', initSalasSwiper);

        document.addEventListener('livewire:init', () => {
            initSalasSwiper();
            Livewire.hook('message.processed', () => initSalasSwiper());
        });
    </script>
@endpush
