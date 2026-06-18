<div>
    <livewire:components.page-nav-bar :title="t('salas.profile_title')" :subtitle="t('salas.profile_subtitle')" />

    <div class="max-w-5xl mx-auto px-4 py-10">
        <a href="{{ route('salas') }}"
            class="relative z-50 inline-flex items-center text-sm font-semibold text-slate-600 hover:text-indigo-700">
            {{ t('salas.back') }}
        </a>

        <div class="mt-6 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

            {{-- Imagem a largura total --}}
            @if (!empty($sala['photo']))
                <div class="w-full overflow-hidden pt-6 px-6">
                    <img src="{{ asset($sala['photo']) }}" alt="{{ $sala['name'] }}"
                         class="w-full object-contain max-h-[480px] rounded-xl">
                </div>
            @else
                <div class="w-full h-40 bg-indigo-950 flex items-center justify-center">
                    <span class="text-5xl font-extrabold text-white/30">{{ $sala['initials'] ?? '' }}</span>
                </div>
            @endif

            {{-- Conteúdo textual --}}
            <div class="p-8 md:p-10">
                <h1 class="text-2xl md:text-3xl font-extrabold text-slate-900">{{ $sala['name'] }}</h1>

                @if (!empty($sala['role']))
                    <p class="mt-1 text-slate-500 font-medium">{{ $sala['role'] }}</p>
                @endif

                @if (!empty($sala['bio']))
                    <p class="mt-4 text-slate-700 leading-relaxed">{{ $sala['bio'] }}</p>
                @endif

                @if (!empty($sala['topic']))
                    <div class="mt-6 rounded-2xl bg-slate-50 p-6 border border-slate-200">
                        <p class="text-xs font-bold uppercase tracking-widest text-slate-500">{{ t('salas.topic_label') }}</p>
                        <p class="mt-2 text-base text-slate-800 leading-relaxed">{{ $sala['topic'] }}</p>
                    </div>
                @endif

                @if (!empty($sala['participants']))
                    <div class="mt-6 rounded-2xl bg-indigo-50 p-6 border border-indigo-100">
                        <p class="text-xs font-bold uppercase tracking-widest text-indigo-600 mb-4">Participantes</p>
                        <ul class="space-y-2">
                            @foreach ($sala['participants'] as $participante)
                                <li class="flex items-center gap-3 text-sm text-slate-800">
                                    <span class="inline-block h-2 w-2 rounded-full bg-indigo-500 flex-shrink-0"></span>
                                    {{ $participante }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
