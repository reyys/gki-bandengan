<x-layout.index>
    <section class="container py-5 md:py-8 lg:py-12">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Jadwal Misa Terbaru</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">Ketahui jadwal misa terbaru dari GKI Bandengan setiap harinya
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-8 mt-5">
            @foreach ($schedules as $schedule)
                <x-schedules.card :schedule=$schedule />
            @endforeach
        </div>
    </section>
</x-layout.index>
