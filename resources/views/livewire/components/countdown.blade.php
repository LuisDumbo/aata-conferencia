<section class="py-12 border-b border-slate-200 bg-white">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-[1.35fr_2fr] items-center gap-8">
        <div>
            <h2 class="text-3xl font-extrabold tracking-tight text-slate-900">
                {{ $titulo }}
            </h2>
            <h3 class="text-3xl font-extrabold tracking-tight text-slate-900">
                {{ $subtitulo }}
            </h3>
            <p class="mt-3 text-slate-600 max-w-md">
                {{ $descricao }}
            </p>
        </div>

        <div class="flex flex-wrap gap-4 md:justify-end">
            <div class="bg-indigo-950 text-white w-[120px] rounded-xl py-6 text-center shadow-sm">
                <p id="days" class="text-4xl font-extrabold">00</p>
                <p class="text-xs uppercase tracking-widest mt-2 font-bold text-white/70">Dias</p>
            </div>

            <div class="bg-indigo-950 text-white w-[120px] rounded-xl py-6 text-center shadow-sm">
                <p id="hours" class="text-4xl font-extrabold">00</p>
                <p class="text-xs uppercase tracking-widest mt-2 font-bold text-white/70">Horas</p>
            </div>

            <div class="bg-indigo-950 text-white w-[120px] rounded-xl py-6 text-center shadow-sm">
                <p id="minutes" class="text-4xl font-extrabold">00</p>
                <p class="text-xs uppercase tracking-widest mt-2 font-bold text-white/70">Minutos</p>
            </div>

            <div class="bg-indigo-950 text-white w-[120px] rounded-xl py-6 text-center shadow-sm">
                <p id="seconds" class="text-4xl font-extrabold">00</p>
                <p class="text-xs uppercase tracking-widest mt-2 font-bold text-white/70">Segundos</p>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto mt-10 px-4">
        <div class="h-[3px] w-full bg-slate-100">
            <div class="h-[3px] bg-amber-600 w-1/2"></div>
        </div>
    </div>

    <script src="">
        console.log("Countdown component script loaded");
    </script>

    @script
        <script>
            console.log("Countdown component script loaded");

            const EVENT_START = @json($eventStart);

            function pad2(n) {
                return String(n).padStart(2, "0");
            }

            function updateCountdown() {
                const target = new Date(String(EVENT_START).replace(' ', 'T')).getTime();
                const now = Date.now();

                if (Number.isNaN(target)) {
                    console.warn("EVENT_START inválido:", EVENT_START);
                    return;
                }

                const diff = target - now;

                const elDays = document.getElementById("days");
                const elHours = document.getElementById("hours");
                const elMinutes = document.getElementById("minutes");
                const elSeconds = document.getElementById("seconds");

                if (!elDays || !elHours || !elMinutes || !elSeconds) return;

                if (diff <= 0) {
                    elDays.textContent = "00";
                    elHours.textContent = "00";
                    elMinutes.textContent = "00";
                    elSeconds.textContent = "00";
                    return;
                }

                const totalSeconds = Math.floor(diff / 1000);
                const days = Math.floor(totalSeconds / (3600 * 24));
                const hours = Math.floor((totalSeconds % (3600 * 24)) / 3600);
                const minutes = Math.floor((totalSeconds % 3600) / 60);
                const seconds = totalSeconds % 60;

                elDays.textContent = pad2(days);
                elHours.textContent = pad2(hours);
                elMinutes.textContent = pad2(minutes);
                elSeconds.textContent = pad2(seconds);
            }

            updateCountdown();
            setInterval(updateCountdown, 1000);
        </script>
    @endscript
</section>
