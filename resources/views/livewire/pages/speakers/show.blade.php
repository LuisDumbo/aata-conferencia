<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <livewire:components.page-nav-bar :title="$title" :subtitle="$subtitle" />

    <div class="max-w-5xl mx-auto px-4 py-10">
        <a href="{{ route('speakers') }}" 
            class="inline-flex items-center text-sm font-semibold text-slate-600 hover:text-indigo-700">
            ← Voltar aos oradores
        </a>

        <div class="mt-6 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
            <div class="p-8 md:p-10">
                <div class="flex flex-col md:flex-row md:items-center gap-6">
                    <div class="h-24 w-24 rounded-2xl overflow-hidden bg-slate-100 flex items-center justify-center">
                        @if (!empty($speaker['photo']))
                            <img src="{{ $speaker['photo'] }}" alt="{{ $speaker['name'] }}"
                                class="h-full w-full object-cover">
                        @else
                            <span class="text-2xl font-extrabold text-slate-700">{{ $speaker['initials'] ?? '' }}</span>
                        @endif
                    </div>

                    <div class="flex-1">
                        <h1 class="text-2xl md:text-3xl font-extrabold text-slate-900">{{ $speaker['name'] }}</h1>
                        <p class="mt-1 text-slate-600">
                            {{ $speaker['role'] }} • {{ $speaker['org'] }}
                        </p>

                        @if (!empty($speaker['bio']))
                            <p class="mt-4 text-slate-700 leading-relaxed">
                                {{ $speaker['bio'] }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="mt-8 rounded-2xl bg-slate-50 p-6 border border-slate-200">
                    <p class="text-xs font-bold uppercase tracking-widest text-slate-500">Tema</p>
                    <p class="mt-2 text-base text-slate-800 leading-relaxed">
                        {{ $speaker['topic'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
