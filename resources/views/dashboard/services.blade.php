<x-layout.dashboard>
    <div class="flex flex-col space-y-5 md:space-y-0 md:flex-row items-center justify-between">
        <h3>Pelayanan Kami</h3>
        @if (auth()->check() && auth()->user()->is_admin)
            <a href={{ route('services.create') }} class="p-3 bg-primary text-white rounded-md px-5">
                Buat Pelayanan Baru
            </a>
        @endif
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 md:gap-8 mt-5">
        @foreach ($services as $service)
            <x-services.card :service=$service />
        @endforeach
    </div>
</x-layout.dashboard>
