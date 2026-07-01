<div
    x-data="{
        lightbox: false,
        type: 'photo',
        current: 0,
        photos: {{ Js::from(array_values($photos)) }},
        videos: {{ Js::from(array_values($videos)) }},

        openPhoto(index) {
            this.type = 'photo';
            this.current = index;
            this.lightbox = true;
        },
        openVideo(index) {
            this.type = 'video';
            this.current = index;
            this.lightbox = true;
        },
        close() {
            this.lightbox = false;
            const v = document.getElementById('lb-video');
            if (v) { v.pause(); v.currentTime = 0; }
        },
        prev() {
            const list = this.type === 'photo' ? this.photos : this.videos;
            this.current = (this.current - 1 + list.length) % list.length;
            this.$nextTick(() => { const v = document.getElementById('lb-video'); if(v) v.load(); });
        },
        next() {
            const list = this.type === 'photo' ? this.photos : this.videos;
            this.current = (this.current + 1) % list.length;
            this.$nextTick(() => { const v = document.getElementById('lb-video'); if(v) v.load(); });
        }
    }"
    @keydown.escape.window="close()"
    @keydown.arrow-left.window="if(lightbox) prev()"
    @keydown.arrow-right.window="if(lightbox) next()"
>

    {{-- PAGE HEADER --}}
    <livewire:components.page-nav-bar
        :title="t('galeria.page_title')"
        :subtitle="t('galeria.page_subtitle')"
    />

    <div class="py-14 space-y-14">

        {{-- ══════════════════ FOTOS ══════════════════ --}}
        <div>
            <div class="max-w-6xl mx-auto px-4 flex items-center justify-between mb-5">
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-slate-100 text-slate-600">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </span>
                    <h2 class="text-xl font-bold text-slate-900">{{ t('galeria.photos_label') }}</h2>
                    <span class="text-sm text-slate-400 font-medium">({{ count($photos) }})</span>
                </div>

                {{-- scroll arrows --}}
                <div class="relative z-10 flex items-center gap-2">
                    <button type="button"
                        onclick="document.getElementById('photos-row').scrollLeft -= 300"
                        class="w-8 h-8 flex items-center justify-center rounded-full border border-slate-200 text-slate-600 hover:bg-slate-100 transition cursor-pointer">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button type="button"
                        onclick="document.getElementById('photos-row').scrollLeft += 300"
                        class="w-8 h-8 flex items-center justify-center rounded-full border border-slate-200 text-slate-600 hover:bg-slate-100 transition cursor-pointer">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            {{-- scroll row --}}
            <div
                id="photos-row"
                class="gallery-scroll-row flex gap-4 overflow-x-auto px-4 pb-4 select-none
                       [&::-webkit-scrollbar]:h-1.5
                       [&::-webkit-scrollbar-track]:bg-slate-100
                       [&::-webkit-scrollbar-thumb]:bg-slate-300
                       [&::-webkit-scrollbar-thumb]:rounded-full
                       max-w-6xl mx-auto"
                style="cursor: grab"
            >
                @foreach($photos as $i => $photo)
                <button
                    type="button"
                    data-gallery-type="photo"
                    data-gallery-index="{{ $i }}"
                    class="group relative flex-none w-64 h-64 sm:w-72 sm:h-72 overflow-hidden rounded-2xl bg-slate-100 shadow-sm
                           hover:shadow-xl transition-all duration-300 hover:-translate-y-1
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer"
                >
                    <img
                        src="{{ asset($photo['src']) }}"
                        alt="{{ $photo['alt'] }}"
                        loading="lazy"
                        decoding="async"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 pointer-events-none"
                    >
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-all duration-300 flex items-center justify-center pointer-events-none">
                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 drop-shadow-lg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                        </svg>
                    </div>
                </button>
                @endforeach
            </div>
        </div>

        {{-- ══════════════════ VÍDEOS ══════════════════ --}}
        <div>
            <div class="max-w-6xl mx-auto px-4 flex items-center justify-between mb-5">
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-slate-100 text-slate-600">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.277A1 1 0 0121 8.677v6.646a1 1 0 01-1.447.894L15 14M3 8a2 2 0 012-2h8a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"/>
                        </svg>
                    </span>
                    <h2 class="text-xl font-bold text-slate-900">{{ t('galeria.videos_label') }}</h2>
                    <span class="text-sm text-slate-400 font-medium">({{ count($videos) }})</span>
                </div>

                <div class="relative z-10 flex items-center gap-2">
                    <button type="button"
                        onclick="document.getElementById('videos-row').scrollLeft -= 300"
                        class="w-8 h-8 flex items-center justify-center rounded-full border border-slate-200 text-slate-600 hover:bg-slate-100 transition cursor-pointer">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button type="button"
                        onclick="document.getElementById('videos-row').scrollLeft += 300"
                        class="w-8 h-8 flex items-center justify-center rounded-full border border-slate-200 text-slate-600 hover:bg-slate-100 transition cursor-pointer">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div
                id="videos-row"
                class="gallery-scroll-row flex gap-4 overflow-x-auto px-4 pb-4 select-none
                       [&::-webkit-scrollbar]:h-1.5
                       [&::-webkit-scrollbar-track]:bg-slate-100
                       [&::-webkit-scrollbar-thumb]:bg-slate-300
                       [&::-webkit-scrollbar-thumb]:rounded-full
                       max-w-6xl mx-auto"
                style="cursor: grab"
            >
                @foreach($videos as $i => $video)
                <button
                    type="button"
                    data-gallery-type="video"
                    data-gallery-index="{{ $i }}"
                    class="group relative flex-none w-72 sm:w-80 aspect-video overflow-hidden rounded-2xl bg-slate-800
                           shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer"
                >
                    {{-- thumbnail --}}
                    <video
                        src="{{ asset($video['src']) }}#t=0.5"
                        class="absolute inset-0 w-full h-full object-cover transition-opacity duration-300 opacity-80 group-hover:opacity-100 pointer-events-none"
                        preload="metadata"
                        muted
                        playsinline
                    ></video>
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors duration-300 pointer-events-none"></div>

                    {{-- play button --}}
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="w-14 h-14 rounded-full bg-white/90 group-hover:bg-white flex items-center justify-center
                                    shadow-xl transition-all duration-300 group-hover:scale-110">
                            <svg class="w-6 h-6 text-indigo-700 ml-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                </button>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ══════════════════════════════════════════════════════════════ --}}
    {{-- LIGHTBOX                                                       --}}
    {{-- ══════════════════════════════════════════════════════════════ --}}
    <div
        x-show="lightbox"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-[9999] bg-slate-900/85 backdrop-blur-[2px] flex flex-col"
        style="display:none"
    >
        {{-- Top bar: close --}}
        <div class="flex-none flex items-center justify-end px-4 py-3">
            <button @click="close()"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-white/90 text-slate-800 shadow-lg hover:bg-white transition text-base font-bold cursor-pointer">
                ✕
            </button>
        </div>

        {{-- Media area (flex-1 so it fills remaining height) --}}
        <div class="flex-1 relative flex items-center justify-center overflow-hidden px-14 sm:px-20"
             @click.self="close()">

            {{-- Prev --}}
            <button @click="prev()"
                class="absolute left-2 sm:left-4 z-10 w-10 h-10 sm:w-11 sm:h-11 flex items-center justify-center rounded-full bg-white/90 text-slate-800 shadow-lg hover:bg-white transition cursor-pointer">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            {{-- Photo --}}
            <template x-if="type === 'photo'">
                <img
                    :src="'/'+photos[current].src"
                    :alt="photos[current].alt"
                    class="max-h-full max-w-full rounded-xl shadow-2xl object-contain"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                >
            </template>

            {{-- Video --}}
            <template x-if="type === 'video'">
                <video
                    id="lb-video"
                    :src="'/'+videos[current].src"
                    controls
                    autoplay
                    class="max-h-full max-w-full rounded-xl shadow-2xl bg-black"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                ></video>
            </template>

            {{-- Next --}}
            <button @click="next()"
                class="absolute right-2 sm:right-4 z-10 w-10 h-10 sm:w-11 sm:h-11 flex items-center justify-center rounded-full bg-white/90 text-slate-800 shadow-lg hover:bg-white transition cursor-pointer">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>

        {{-- Bottom bar: dots --}}
        <div class="flex-none flex items-center justify-center gap-1.5 px-4 py-3">
            <template x-for="(item, i) in (type === 'photo' ? photos : videos)" :key="i">
                <button
                    @click="current = i"
                    :class="i === current ? 'bg-white w-4' : 'bg-white/40 w-1.5'"
                    class="h-1.5 rounded-full transition-all duration-300 cursor-pointer"
                ></button>
            </template>
        </div>
    </div>

</div>

<script>
(function () {
    var dragged = false;

    function initDragScroll(el) {
        var active = false;
        var startX = 0;
        var startScrollLeft = 0;

        el.addEventListener('mousedown', function (e) {
            if (e.button !== 0) return;
            active = true;
            dragged = false;
            startX = e.pageX - el.getBoundingClientRect().left;
            startScrollLeft = el.scrollLeft;
            el.style.cursor = 'grabbing';
            e.preventDefault();
        });

        window.addEventListener('mousemove', function (e) {
            if (!active) return;
            var x = e.pageX - el.getBoundingClientRect().left;
            var walk = x - startX;
            if (Math.abs(walk) > 4) dragged = true;
            el.scrollLeft = startScrollLeft - walk;
        });

        window.addEventListener('mouseup', function () {
            if (!active) return;
            active = false;
            el.style.cursor = 'grab';
        });

        el.addEventListener('mouseleave', function () {
            if (!active) return;
            active = false;
            el.style.cursor = 'grab';
        });
    }

    function initCardClicks(el, alpineRoot) {
        el.addEventListener('click', function (e) {
            if (dragged) return;
            var btn = e.target.closest('[data-gallery-type]');
            if (!btn) return;
            var type  = btn.dataset.galleryType;
            var index = parseInt(btn.dataset.galleryIndex, 10);
            var comp  = Alpine.$data(alpineRoot);
            if (type === 'photo') comp.openPhoto(index);
            else comp.openVideo(index);
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        var photosRow = document.getElementById('photos-row');
        var videosRow = document.getElementById('videos-row');
        var alpineRoot = photosRow ? photosRow.closest('[x-data]') : null;

        if (photosRow) initDragScroll(photosRow);
        if (videosRow) initDragScroll(videosRow);
        if (alpineRoot) {
            if (photosRow) initCardClicks(photosRow, alpineRoot);
            if (videosRow) initCardClicks(videosRow, alpineRoot);
        }
    });
}());
</script>
