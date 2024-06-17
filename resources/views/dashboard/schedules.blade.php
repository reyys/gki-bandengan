<x-layout.dashboard>
    <div class="flex flex-col space-y-5 md:space-y-0 md:flex-row items-center justify-between">
        <h3>Jadwal Misa</h3>
        <a href={{ route('schedules.create') }} class="p-3 bg-primary text-white rounded-md px-5">
            Create New Schedule
        </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-8 mt-5">
        @foreach ($schedules as $schedule)
            <x-schedules.card />
        @endforeach
    </div>
</x-layout.dashboard>
