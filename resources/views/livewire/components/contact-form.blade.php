<section class="py-14">
    <div class="max-w-6xl mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            {{-- Info/Contactos --}}
            <div class="bg-slate-50 rounded-2xl shadow-sm border border-slate-600 p-8">
                <h2 class="text-3xl font-extrabold text-slate-900">{{ t('contacto.info_title') }}</h2>
                <p class="mt-2 text-slate-600">{{ t('contacto.info_subtitle') }}</p>

                <div class="mt-8 space-y-4 text-slate-700">
                    <div>
                        <p class="text-sm font-semibold text-slate-900">{{ t('contacto.email_label') }}</p>
                        <p class="text-sm">{{ t('contacto.email_value') }}</p>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-slate-900">{{ t('contacto.phone_label') }}</p>
                        <p class="text-sm">{{ t('contacto.phone_value') }}</p>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-slate-900">{{ t('contacto.address_label') }}</p>
                        <p class="text-sm">{{ t('contacto.address_value') }}</p>
                    </div>
                </div>
            </div>

            {{-- Formulário --}}
            <div class="bg-slate-50 rounded-2xl shadow-sm border border-slate-600 p-8">
                <h3 class="text-xl font-bold text-slate-900">{{ t('contacto.form_title') }}</h3>

                <form wire:submit.prevent="submit" class="mt-6 space-y-6">
                    {{ $this->form }}

                    <div class="pt-2">
                        <button type="submit"
                            class="inline-flex items-center justify-center rounded-lg bg-indigo-700 px-6 py-3 text-sm font-semibold text-white hover:bg-indigo-800">
                            {{ t('contacto.submit_btn') }}
                        </button>
                    </div>

                    <p class="text-xs text-slate-500">{{ t('contacto.disclaimer') }}</p>
                </form>

                {{-- feedback --}}
                <div x-data="{ open: false }" x-on:contact-sent.window="open=true; setTimeout(()=>open=false, 5000)"
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-2"
                    class="fixed bottom-6 right-6 z-50 max-w-sm w-full shadow-xl rounded-xl bg-white border border-emerald-200 px-5 py-4 flex items-start gap-3">
                    <div class="flex-shrink-0 mt-0.5 w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">{{ t('contacto.success_title') }}</p>
                        <p class="text-sm text-slate-600 mt-0.5">{{ t('contacto.success_msg') }}</p>
                    </div>
                    <button @click="open=false" class="ml-auto -mt-0.5 text-slate-400 hover:text-slate-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
