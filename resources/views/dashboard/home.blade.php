<x-layout.dashboard>
    <div class="flex flex-col gap-5">
        <div class="p-5 border flex flex-col gap-5 max-w-[400px]">
            <p class="capitalize">Nama : {{ auth()->user()->name }}</p>
            <p>Email : {{ auth()->user()->email }}</p>
            <p>Status : {{ auth()->user()->is_admin ? 'Admin' : 'Jemat' }}</p>
            <p>Akun Dibuat Sejak : {{ auth()->user()->created_at->diffForHumans() }}</p>
        </div>
        <div class="flex flex-col space-y-5 md:space-y-0 md:flex-row items-center justify-between">
            <h3>Jadwal Misa</h3>
            @if (auth()->check() && auth()->user()->is_admin)
                <a href={{ route('schedules.create') }} class="p-3 bg-primary text-white rounded-md px-5">
                    Buat Jadwal Misa Baru
                </a>
            @endif
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 md:gap-8">
            @foreach ($schedules as $schedule)
                <x-schedules.card :schedule=$schedule />
            @endforeach
        </div>
        <div class="flex flex-col space-y-5 md:space-y-0 md:flex-row items-center justify-between">
            <h3>Pelayanan Kami</h3>
            @if (auth()->check() && auth()->user()->is_admin)
                <a href={{ route('schedules.create') }} class="p-3 bg-primary text-white rounded-md px-5">
                    Buat Jadwal Misa Baru
                </a>
            @endif
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 md:gap-8">
            @foreach ($services as $service)
                <x-services.card :service=$service />
            @endforeach
        </div>
    </div>
</x-layout.dashboard>
