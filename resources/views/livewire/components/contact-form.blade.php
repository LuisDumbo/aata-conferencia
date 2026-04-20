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
                <div x-data="{ open: false }" x-on:contact-sent.window="open=true; setTimeout(()=>open=false, 3500)"
                    x-show="open" x-transition
                    class="mt-6 rounded-lg bg-emerald-50 border border-emerald-200 px-4 py-3 text-emerald-800 text-sm">
                    {{ t('contacto.success_msg') }}
                </div>
            </div>
        </div>
    </div>
</section>
