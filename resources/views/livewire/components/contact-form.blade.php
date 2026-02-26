<section class="py-14">
    <div class="max-w-6xl mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            {{-- Info/Contactos --}}
            <div class="bg-slate-50  rounded-2xl shadow-sm border border-slate-600 p-8">
                <h2 class="text-3xl font-extrabold text-slate-900">Contacto</h2>
                <p class="mt-2 text-slate-600">
                    Envie-nos uma mensagem. Responderemos o mais breve possível.
                </p>

                <div class="mt-8 space-y-4 text-slate-700">
                    <div>
                        <p class="text-sm font-semibold text-slate-900">E-mail</p>
                        <p class="text-sm">contacto@seu-dominio.ao</p>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-slate-900">Telefone</p>
                        <p class="text-sm">(+244) 9xx xxx xxx</p>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-slate-900">Endereço</p>
                        <p class="text-sm">Luanda, Angola</p>
                    </div>
                </div>
            </div>

            {{-- Form Filament --}}
            <div class="bg-slate-50 rounded-2xl shadow-sm border border-slate-600 p-8">
                <h3 class="text-xl font-bold text-slate-900">Envie uma mensagem</h3>

                <form wire:submit.prevent="submit" class="mt-6 space-y-6">
                    {{ $this->form }}

                    <div class="pt-2">
                        <button type="submit"
                            class="inline-flex items-center justify-center rounded-lg bg-indigo-700 px-6 py-3 text-sm font-semibold text-white hover:bg-indigo-800">
                            Enviar mensagem
                        </button>
                    </div>

                    <p class="text-xs text-slate-500">
                        Ao enviar, você confirma que as informações são verdadeiras.
                    </p>
                </form>

                {{-- feedback --}}
                <div x-data="{ open: false }" x-on:contact-sent.window="open=true; setTimeout(()=>open=false, 3500)"
                    x-show="open" x-transition
                    class="mt-6 rounded-lg bg-emerald-50 border border-emerald-200 px-4 py-3 text-emerald-800 text-sm">
                    Mensagem enviada com sucesso. Obrigado!
                </div>
            </div>
        </div>
    </div>
</section>
