<footer class="border-t border-slate-200 py-10 bg-white">
    <div class="max-w-6xl mx-auto px-4 flex items-center justify-between text-sm text-slate-600">

        <p>
            © {{ now()->year }} {{ t('footer.copyright') }}
            {{ t('footer.rights') }}
        </p>

        <div class="flex gap-4 font-semibold">
            <a href="{{ route('home') }}" class="hover:text-slate-900">{{ t('footer.home') }}</a>
            <a href="{{ route('schedule') }}" class="hover:text-slate-900">{{ t('footer.schedule') }}</a>
            <a href="{{ route('registration') }}" class="hover:text-slate-900">{{ t('footer.registration') }}</a>
            <a href="{{ route('contact') }}" class="hover:text-slate-900">{{ t('footer.contact') }}</a>
        </div>

    </div>
</footer>
