<section id="schedules" class="container py-5 md:py-8 lg:py-12 xl:py-24">
    <div>
        <div class="flex items-center justify-between">
            <h2 class="font-medium">Jadwal Misa Terbaru</h2>
            <a class="hover:text-primary transition-all" href="{{ route('schedules.index') }}">Lihat Semua</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-8 mt-5">
            @foreach ($schedules as $schedule)
                <x-schedules.card :schedule=$schedule />
            @endforeach
        </div>
    </div>
</section>
