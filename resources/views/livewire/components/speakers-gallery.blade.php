<section class="relative">
    <div class="max-w-6xl mx-auto px-4 py-10">

        <div class="flex items-end justify-between gap-4 mb-6">
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900">Palestrantes</h2>
                <p class="text-slate-600">Conheça os convidados e especialistas do evento.</p>
            </div>
        </div>

        {{-- GRID --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($speakers as $sp)
                <a href="{{ route('speakers.show', $sp['slug']) }}"
                    class="group relative overflow-hidden rounded-2xl shadow-sm bg-slate-100">
                    {{-- Foto --}}
                    <div class="aspect-[4/5] w-full">
                        <img src="{{ $sp['photo'] }}" alt="{{ $sp['name'] }}"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>

                    {{-- Overlay (fade roxo) --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-indigo-950/95 via-indigo-950/35 to-transparent">
                    </div>

                    {{-- Texto em baixo --}}
                    <div class="absolute bottom-0 left-0 right-0 p-5 text-center">
                        <h3 class="text-white font-extrabold text-lg leading-tight">
                            {{ $sp['name'] }}
                        </h3>

                        <p class="mt-2 text-xs uppercase tracking-wide text-indigo-100/90">
                            {{ $sp['role'] }}
                        </p>

                        <div class="mx-auto mt-4 h-[2px] w-14 bg-amber-500/90 rounded"></div>
                    </div>
                </a>
            @endforeach
        </div>

        {{-- VER MAIS --}}
        @if ($hasMore)
            <div class="mt-10 flex justify-center">
                <button wire:click="loadMore" wire:loading.attr="disabled"
                    class="inline-flex items-center justify-center rounded-lg bg-indigo-700 px-6 py-3 text-sm font-semibold text-white hover:bg-indigo-800 disabled:opacity-60">
                    <span wire:loading.remove>Ver mais</span>
                    <span wire:loading>Carregando...</span>
                </button>
            </div>
        @endif

    </div>

    {{-- BOTÃO FLUTUANTE: VOLTAR AO TOPO (Alpine) --}}
    <div x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 400 })" class="fixed bottom-6 right-6 z-50">
        <button x-show="show" x-transition @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="rounded-full bg-indigo-700 text-white shadow-lg px-4 py-3 hover:bg-indigo-800"
            aria-label="Voltar ao topo" title="Voltar ao topo">
            ↑
        </button>
    </div>
</section>
