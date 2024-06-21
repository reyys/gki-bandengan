<x-layout.dashboard>
    <div class="flex flex-col space-y-5 md:space-y-0 md:flex-row items-center justify-between">
        <h3>Daftar Jemaat</h3>
        <a href={{ route('jemaats.create') }} class="p-3 bg-primary text-white rounded-md px-5">
            Tambah Jemaat Baru
        </a>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 md:gap-8 mt-5">
        @foreach ($jemaats as $jemaat)
            <x-jemaats.card :jemaat=$jemaat />
        @endforeach
    </div>
</x-layout.dashboard>
