<section id="partners" class="relative py-14 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image:url('https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=2400&q=80');">
        </div>
        <div class="absolute inset-0 bg-indigo-950/85"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-950/95 via-indigo-950/80 to-indigo-900/55"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-4">
        <!-- menos gap -->
        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-8">

            <!-- LEFT: Carousel (limita largura no desktop) -->
            <div class="relative w-full lg:flex-1 lg:max-w-[820px]" wire:ignore>
                <!-- setas -->
                <button type="button"
                    class="partnersPrev absolute -left-3 sm:-left-6 top-[46px] z-10
                       h-10 w-10 rounded-full bg-white/15 border border-white/20
                       text-white flex items-center justify-center
                       hover:bg-white/25 transition">
                    ‹
                </button>

                <button type="button"
                    class="partnersNext absolute -right-3 sm:-right-6 top-[46px] z-10
                       h-10 w-10 rounded-full bg-white/15 border border-white/20
                       text-white flex items-center justify-center
                       hover:bg-white/25 transition">
                    ›
                </button>

                <div class="swiper partnersSwiper overflow-hidden w-full">
                    <div class="swiper-wrapper">
                        @foreach ($partners as $p)
                            <div class="swiper-slide h-auto">
                                <a href="{{ $p['url'] ?? '#' }}" target="_blank" rel="noopener" class="group block">
                                    <!-- card menor -->
                                    <div
                                        class="rounded-2xl bg-white/95 p-3 shadow-lg border border-white/30
                                           transition-all duration-300
                                           group-hover:-translate-y-1 group-hover:shadow-2xl">

                                        <!-- altura menor -->
                                        <div class="h-[80px] flex items-center justify-center">
                                            <img src="{{ $p['logo'] }}" alt="{{ $p['name'] }}"
                                                class="max-h-[58px] max-w-full object-contain">
                                        </div>
                                    </div>

                                    <!-- texto um pouco menor -->
                                    <p class="mt-2 text-center text-xs font-semibold text-white/90">
                                        {{ $p['name'] }}
                                    </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- RIGHT: Text (ligeiramente mais estreito) -->
            <div class="w-full lg:w-[380px] text-white lg:pt-1">
                <h2 class="text-4xl font-extrabold tracking-tight">
                    Parceiros &<br>Patrocinadores
                </h2>

                <p class="mt-4 text-white/80 leading-relaxed">
                    Conheça os nossos parceiros e patrocinadores que apoiam este encontro.
                    O compromisso de cada organização contribui para a segurança da aviação e
                    para a colaboração no setor.
                </p>
            </div>

        </div>
    </div>
</section>

@push('scripts')
    <script>
        function initPartnersSwiper() {
            const el = document.querySelector('.partnersSwiper');
            if (!el || !window.Swiper) return;

            if (el.swiper) el.swiper.destroy(true, true);

            const swiper = new window.Swiper(el, {
                slidesPerView: 1,
                spaceBetween: 22,
                watchOverflow: true,
                observer: true,
                observeParents: true,
                grabCursor: true,

                navigation: {
                    nextEl: '.partnersNext',
                    prevEl: '.partnersPrev',
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

        document.addEventListener('DOMContentLoaded', initPartnersSwiper);
        document.addEventListener('livewire:init', () => {
            initPartnersSwiper();
            Livewire.hook('message.processed', () => initPartnersSwiper());
        });
    </script>
@endpush
