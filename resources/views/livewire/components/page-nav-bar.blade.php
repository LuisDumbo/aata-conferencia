<section class="relative h-[400px] bg-cover bg-center"
    style="background-image:url('https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=2400&q=80');">

    <!-- Overlay escuro -->
    <div class="absolute inset-0 bg-indigo-950/80"></div>

    <!-- Gradiente -->
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-950/95 via-indigo-900/70 to-indigo-900/25"></div>

    <!-- Navbar -->
    <livewire:components.navbar />

    <!-- Conteúdo -->
    <div class="relative z-10 max-w-6xl mx-auto px-4 h-full flex items-center pb-20">
        <div>
            <h1 class="text-4xl md:text-5xl font-bold text-white">
                {{ $title }}
            </h1>

            <p class="mt-3 text-white ">
                {{ $subtitle }}
            </p>
        </div>
    </div>

</section>
