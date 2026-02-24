<footer class="border-t border-slate-200 py-10 bg-white">
    <div class="max-w-6xl mx-auto px-4 flex items-center justify-between text-sm text-slate-600">

        <p>
            © {{ now()->year }} 16ª Reunião da Região África da IFATSEA.
            Todos os direitos reservados.
        </p>

        <div class="flex gap-4 font-semibold">
            <a href="{{ route('home') }}" class="hover:text-slate-900">Início</a>
            <a href="#register" class="hover:text-slate-900">Inscrição</a>
            <a href="{{ route('contact') }}" class="hover:text-slate-900">Contacto</a>
        </div>

    </div>
</footer>
