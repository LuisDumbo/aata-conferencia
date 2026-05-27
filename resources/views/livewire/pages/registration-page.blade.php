<div>
    <livewire:components.page-nav-bar :title="t('inscricao.page_title')" :subtitle="t('inscricao.page_subtitle')" />

    {{-- Secção informativa (fundo claro) --}}
    <section class="bg-white border-b border-slate-100 py-12">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <div class="inline-flex items-center gap-2 bg-indigo-50 border border-indigo-100 text-indigo-600 text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-5">
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                {{ t('inscricao.badge') }}
            </div>

            <h1 class="text-3xl sm:text-4xl font-bold text-slate-900 leading-tight">
                {{ t('inscricao.title') }}
                <span class="block text-indigo-600 mt-1">{{ t('inscricao.title_city') }}</span>
            </h1>

            <p class="mt-4 text-slate-500 text-sm max-w-xl mx-auto">
                {{ t('inscricao.description') }}
            </p>

            <div class="mt-5 inline-flex max-w-2xl items-start gap-3 rounded-2xl border border-indigo-100 bg-indigo-50 px-5 py-4 text-left">
                <div class="mt-0.5 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-indigo-100 text-indigo-700">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 10v-1m-6-4h12" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-indigo-900">{{ t('inscricao.fee_label') }}</p>
                    <p class="mt-1 text-sm leading-7 text-indigo-800">
                        {{ t('inscricao.fee_text') }}
                    </p>
                </div>
            </div>

            <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
                <div class="flex items-center gap-2 bg-slate-50 border border-slate-200 px-4 py-2 rounded-xl">
                    <svg class="w-4 h-4 text-indigo-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="text-sm font-medium text-slate-700">{{ t('inscricao.date') }}</span>
                </div>
                <div class="flex items-center gap-2 bg-slate-50 border border-slate-200 px-4 py-2 rounded-xl">
                    <svg class="w-4 h-4 text-indigo-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span class="text-sm font-medium text-slate-700">{{ t('inscricao.location') }}</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Secção do formulário com foto de fundo --}}
    <section class="relative bg-cover bg-center bg-fixed"
        style="background-image: url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=2400&q=80');">

        {{-- Overlay escuro --}}
        <div class="absolute inset-0 bg-indigo-950/75 backdrop-blur-[2px]"></div>

        <div class="relative z-10 max-w-3xl mx-auto px-4 py-14">

            {{-- Notificação de sucesso --}}
            <div
                x-data="{ show: false }"
                x-on:inscricao-sucesso.window="show = true; setTimeout(() => show = false, 7000)"
                x-show="show"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-3"
                x-cloak
                class="mb-6 flex items-start gap-4 bg-emerald-50 border border-emerald-200 rounded-2xl p-5 shadow-sm"
            >
                <div class="flex-shrink-0 w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <p class="font-semibold text-emerald-800">{{ t('inscricao.success.title') }}</p>
                    <p class="text-sm text-emerald-600 mt-0.5">{{ t('inscricao.success.message') }}</p>
                </div>
                <button @click="show = false" class="ml-auto text-emerald-400 hover:text-emerald-600">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Indicador de progresso --}}
            <div class="mb-6">
                @php
                    $steps = config(current_lang() . '.inscricao.step_names', config('pt.inscricao.step_names'));
                @endphp
                <div class="flex items-start">
                    @foreach($steps as $step => $label)
                        <div class="flex-1 flex flex-col items-center relative">
                            @if($step < count($steps))
                                <div class="absolute top-4 left-1/2 w-full h-0.5 transition-colors duration-300
                                    {{ $currentStep > $step ? 'bg-indigo-400' : 'bg-white/20' }}"></div>
                            @endif

                            <div class="relative z-10 w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold transition-all duration-300
                                {{ $currentStep > $step
                                    ? 'bg-indigo-500 text-white'
                                    : ($currentStep === $step
                                        ? 'bg-white text-indigo-700 ring-4 ring-white/30'
                                        : 'bg-white/15 border-2 border-white/30 text-white/60') }}">
                                @if($currentStep > $step)
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                @else
                                    {{ $step }}
                                @endif
                            </div>

                            <span class="mt-2 text-xs font-medium hidden sm:block transition-colors duration-300
                                {{ $currentStep === $step ? 'text-white font-semibold' : ($currentStep > $step ? 'text-indigo-300' : 'text-white/40') }}">
                                {{ $label }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Card do formulário --}}
            <div class="bg-white rounded-2xl shadow-2xl border border-white/10 overflow-hidden">
                <form wire:submit.prevent="submit" novalidate>

                    {{-- PASSO 1 --}}
                    @if($currentStep === 1)
                    <div class="p-8">
                        <div class="mb-7">
                            <span class="inline-block text-xs font-semibold text-indigo-600 uppercase tracking-widest bg-indigo-50 px-3 py-1 rounded-full">{{ t('inscricao.step1.badge') }}</span>
                            <h2 class="mt-3 text-2xl font-bold text-slate-900">{{ t('inscricao.step1.title') }}</h2>
                            <p class="mt-1 text-sm text-slate-500">{{ t('inscricao.step1.subtitle') }}</p>
                        </div>

                        <div class="space-y-5">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step1.full_name') }} <span class="text-red-500">*</span></label>
                                <input type="text" wire:model="nome_completo"
                                    class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                        {{ $errors->has('nome_completo') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}"
                                    placeholder="{{ t('inscricao.step1.placeholder_name') }}">
                                @error('nome_completo') <x-form-error :message="$message" /> @enderror
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step1.date_of_birth') }} <span class="text-red-500">*</span></label>
                                    <input type="date" wire:model="data_nascimento"
                                        class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                            {{ $errors->has('data_nascimento') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}">
                                    @error('data_nascimento') <x-form-error :message="$message" /> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step1.nationality') }} <span class="text-red-500">*</span></label>
                                    <input type="text" wire:model="nacionalidade"
                                        class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                            {{ $errors->has('nacionalidade') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}"
                                        placeholder="{{ t('inscricao.step1.placeholder_nationality') }}">
                                    @error('nacionalidade') <x-form-error :message="$message" /> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step1.document_number') }} <span class="text-red-500">*</span></label>
                                    <input type="text" wire:model="numero_documento"
                                        class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                            {{ $errors->has('numero_documento') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}"
                                        placeholder="{{ t('inscricao.step1.placeholder_document') }}">
                                    @error('numero_documento') <x-form-error :message="$message" /> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step1.document_expiry') }} <span class="text-red-500">*</span></label>
                                    <input type="date" wire:model="validade_documento"
                                        class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                            {{ $errors->has('validade_documento') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}">
                                    @error('validade_documento') <x-form-error :message="$message" /> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- PASSO 2 --}}
                    @if($currentStep === 2)
                    <div class="p-8">
                        <div class="mb-7">
                            <span class="inline-block text-xs font-semibold text-indigo-600 uppercase tracking-widest bg-indigo-50 px-3 py-1 rounded-full">{{ t('inscricao.step2.badge') }}</span>
                            <h2 class="mt-3 text-2xl font-bold text-slate-900">{{ t('inscricao.step2.title') }}</h2>
                            <p class="mt-1 text-sm text-slate-500">{{ t('inscricao.step2.subtitle') }}</p>
                        </div>

                        <div class="space-y-5">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step2.organisation') }} <span class="text-red-500">*</span></label>
                                    <input type="text" wire:model="organizacao"
                                        class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                            {{ $errors->has('organizacao') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}"
                                        placeholder="{{ t('inscricao.step2.placeholder_org') }}">
                                    @error('organizacao') <x-form-error :message="$message" /> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step2.role') }} <span class="text-red-500">*</span></label>
                                    <input type="text" wire:model="funcao"
                                        class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                            {{ $errors->has('funcao') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}"
                                        placeholder="{{ t('inscricao.step2.placeholder_role') }}">
                                    @error('funcao') <x-form-error :message="$message" /> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step2.area') }} <span class="text-red-500">*</span></label>
                                    <input type="text" wire:model="area_atuacao"
                                        class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                            {{ $errors->has('area_atuacao') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}"
                                        placeholder="{{ t('inscricao.step2.placeholder_area') }}">
                                    @error('area_atuacao') <x-form-error :message="$message" /> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step2.experience') }} <span class="text-red-500">*</span></label>
                                    <input type="text" wire:model="anos_experiencia"
                                        class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                            {{ $errors->has('anos_experiencia') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}"
                                        placeholder="{{ t('inscricao.step2.placeholder_exp') }}">
                                    @error('anos_experiencia') <x-form-error :message="$message" /> @enderror
                                </div>
                            </div>

                            <div class="border-t border-slate-100 pt-5">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-widest mb-4">{{ t('inscricao.step2.contacts_label') }}</p>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step2.email') }} <span class="text-red-500">*</span></label>
                                        <input type="email" wire:model="email"
                                            class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                                {{ $errors->has('email') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}"
                                            placeholder="email@exemplo.com">
                                        @error('email') <x-form-error :message="$message" /> @enderror
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step2.phone') }} <span class="text-red-500">*</span></label>
                                            <input type="text" wire:model="telefone"
                                                class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                                    {{ $errors->has('telefone') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}"
                                                placeholder="{{ t('inscricao.step2.placeholder_phone') }}">
                                            @error('telefone') <x-form-error :message="$message" /> @enderror
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step2.country') }} <span class="text-red-500">*</span></label>
                                            <input type="text" wire:model="pais_residencia"
                                                class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                                    {{ $errors->has('pais_residencia') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}"
                                                placeholder="{{ t('inscricao.step2.placeholder_country') }}">
                                            @error('pais_residencia') <x-form-error :message="$message" /> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- PASSO 3 --}}
                    @if($currentStep === 3)
                    <div class="p-8">
                        <div class="mb-7">
                            <span class="inline-block text-xs font-semibold text-indigo-600 uppercase tracking-widest bg-indigo-50 px-3 py-1 rounded-full">{{ t('inscricao.step3.badge') }}</span>
                            <h2 class="mt-3 text-2xl font-bold text-slate-900">{{ t('inscricao.step3.title') }}</h2>
                            <p class="mt-1 text-sm text-slate-500">{{ t('inscricao.step3.subtitle') }}</p>
                        </div>

                        <div class="space-y-7">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-3">{{ t('inscricao.step3.participation_type') }} <span class="text-red-500">*</span></label>
                                <div class="grid grid-cols-2 gap-3">
                                    @foreach(config(current_lang() . '.inscricao.step3.participation_types', config('pt.inscricao.step3.participation_types')) as $tipo)
                                    <label class="flex items-center gap-3 p-4 border-2 rounded-xl cursor-pointer transition-all
                                        {{ $tipo_participacao === $tipo['value'] ? 'border-indigo-500 bg-indigo-50' : 'border-slate-200 hover:border-slate-300 hover:bg-slate-50' }}">
                                        <input type="radio" wire:model="tipo_participacao" value="{{ $tipo['value'] }}"
                                            class="text-indigo-600 focus:ring-indigo-500">
                                        <span class="text-sm font-medium text-slate-700">{{ $tipo['label'] }}</span>
                                    </label>
                                    @endforeach
                                </div>
                                @error('tipo_participacao') <x-form-error :message="$message" /> @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-3">{{ t('inscricao.step3.present_topic') }}</label>
                                <label class="flex items-center gap-3 p-4 border-2 rounded-xl cursor-pointer transition-all w-fit
                                    {{ $apresenta_tema ? 'border-indigo-500 bg-indigo-50' : 'border-slate-200 hover:border-slate-300' }}">
                                    <input type="checkbox" wire:model="apresenta_tema"
                                        class="w-4 h-4 text-indigo-600 rounded border-slate-300 focus:ring-indigo-500">
                                    <span class="text-sm font-medium text-slate-700">{{ t('inscricao.step3.present_topic_yes') }}</span>
                                </label>
                            </div>

                            @if($apresenta_tema)
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step3.topic_label') }} <span class="text-red-500">*</span></label>
                                <input type="text" wire:model="tema"
                                    class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                        {{ $errors->has('tema') ? 'border-red-400 bg-red-50/50 focus:ring-2 focus:ring-red-200' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}"
                                    placeholder="{{ t('inscricao.step3.topic_placeholder') }}">
                                @error('tema') <x-form-error :message="$message" /> @enderror
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif

                    {{-- PASSO 4 --}}
                    @if($currentStep === 4)
                    <div class="p-8">
                        <div class="mb-7">
                            <span class="inline-block text-xs font-semibold text-indigo-600 uppercase tracking-widest bg-indigo-50 px-3 py-1 rounded-full">{{ t('inscricao.step4.badge') }}</span>
                            <h2 class="mt-3 text-2xl font-bold text-slate-900">{{ t('inscricao.step4.title') }}</h2>
                            <p class="mt-1 text-sm text-slate-500">{{ t('inscricao.step4.subtitle') }}</p>
                        </div>

                        <div class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step4.arrival') }}</label>
                                    <input type="date" wire:model="data_chegada"
                                        class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                            {{ $errors->has('data_chegada') ? 'border-red-400 bg-red-50/50' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}">
                                    @error('data_chegada') <x-form-error :message="$message" /> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step4.departure') }}</label>
                                    <input type="date" wire:model="data_partida"
                                        class="w-full px-4 py-2.5 border rounded-xl text-sm outline-none transition-all
                                            {{ $errors->has('data_partida') ? 'border-red-400 bg-red-50/50' : 'border-slate-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100' }}">
                                    @error('data_partida') <x-form-error :message="$message" /> @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-3">{{ t('inscricao.step4.support_label') }}</label>
                                <div class="flex flex-col gap-3">
                                    @foreach(config(current_lang() . '.inscricao.step4.support_types', config('pt.inscricao.step4.support_types')) as $field => $label)
                                    <label class="flex items-center gap-3 cursor-pointer">
                                        <input type="checkbox" wire:model="{{ $field }}"
                                            class="w-4 h-4 text-indigo-600 rounded border-slate-300 focus:ring-indigo-500">
                                        <span class="text-sm text-slate-700">{{ $label }}</span>
                                    </label>
                                    @endforeach
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step4.dietary') }}</label>
                                <input type="text" wire:model="restricoes_alimentares"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl text-sm outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition-all"
                                    placeholder="{{ t('inscricao.step4.dietary_placeholder') }}">
                            </div>

                            <div class="border-t border-slate-100 pt-5">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-widest mb-4">{{ t('inscricao.step4.fee_section_label') }}</p>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step4.payment_method') }}</label>
                                    <input type="text" wire:model="modalidade_pagamento"
                                        class="w-full px-4 py-2.5 border border-slate-200 rounded-xl text-sm outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition-all"
                                        placeholder="{{ t('inscricao.step4.payment_placeholder') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- PASSO 5 --}}
                    @if($currentStep === 5)
                    <div class="p-8">
                        <div class="mb-7">
                            <span class="inline-block text-xs font-semibold text-indigo-600 uppercase tracking-widest bg-indigo-50 px-3 py-1 rounded-full">{{ t('inscricao.step5.badge') }}</span>
                            <h2 class="mt-3 text-2xl font-bold text-slate-900">{{ t('inscricao.step5.title') }}</h2>
                            <p class="mt-1 text-sm text-slate-500">{{ t('inscricao.step5.subtitle') }}</p>
                        </div>

                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ t('inscricao.step5.additional_info') }}</label>
                                <textarea wire:model="informacoes_adicionais" rows="4"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl text-sm outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition-all resize-none"
                                    placeholder="{{ t('inscricao.step5.additional_placeholder') }}"></textarea>
                            </div>

                            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200">
                                <div class="flex items-start gap-3 mb-4">
                                    <div class="flex-shrink-0 w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-semibold text-slate-800">{{ t('inscricao.step5.declaration_title') }}</h3>
                                        <p class="text-sm text-slate-500 mt-0.5 leading-relaxed">
                                            {{ t('inscricao.step5.declaration_text') }}
                                            <strong class="text-slate-700">{{ t('inscricao.step5.event_name') }}</strong>.
                                        </p>
                                    </div>
                                </div>

                                <label class="flex items-start gap-3 cursor-pointer group">
                                    <input type="checkbox" wire:model="aceita_termos"
                                        class="mt-0.5 w-4 h-4 text-indigo-600 rounded border-slate-300 focus:ring-indigo-500">
                                    <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">
                                        {{ t('inscricao.step5.accept_terms') }} <span class="text-red-500">*</span>
                                    </span>
                                </label>

                                @error('aceita_termos')
                                    <div class="mt-2 ml-7">
                                        <x-form-error :message="$message" />
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- Rodapé com navegação --}}
                    <div class="px-8 py-5 bg-slate-50/80 border-t border-slate-100 flex items-center justify-between">
                        @if($currentStep > 1)
                            <button type="button" wire:click="previousStep"
                                class="flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-slate-600 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 hover:border-slate-300 transition-all">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                                {{ t('inscricao.nav.previous') }}
                            </button>
                        @else
                            <div></div>
                        @endif

                        @if($currentStep < $totalSteps)
                            <button type="button" wire:click="nextStep"
                                wire:loading.attr="disabled" wire:target="nextStep"
                                class="flex items-center gap-2 px-6 py-2.5 text-sm font-semibold text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 active:bg-indigo-800 transition-all disabled:opacity-60">
                                <span wire:loading.remove wire:target="nextStep">{{ t('inscricao.nav.next') }}</span>
                                <span wire:loading wire:target="nextStep" style="display:none">{{ t('inscricao.nav.validating') }}</span>
                                <svg wire:loading.remove wire:target="nextStep" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        @else
                            <button type="submit"
                                wire:loading.attr="disabled" wire:target="submit"
                                class="flex items-center gap-2 px-6 py-2.5 text-sm font-semibold text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 active:bg-indigo-800 transition-all disabled:opacity-60">
                                <svg wire:loading.remove wire:target="submit" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span wire:loading.remove wire:target="submit">{{ t('inscricao.nav.submit') }}</span>
                                <span wire:loading wire:target="submit" style="display:none" class="flex items-center gap-2">
                                    <svg class="animate-spin w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                    </svg>
                                    {{ t('inscricao.nav.submitting') }}
                                </span>
                            </button>
                        @endif
                    </div>

                </form>
            </div>

            <p class="text-center text-white/30 text-xs mt-6 pb-2">
                {{ t('inscricao.footer') }}
            </p>

        </div>
    </section>
</div>
