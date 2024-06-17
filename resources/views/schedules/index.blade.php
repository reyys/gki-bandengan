<x-layout.index>
    <section class="container p-5">
        <p>Schedule List</p>
        <a href="{{ route('schedules.create') }}">Create Schedule</a>
        <div class="grid grid-cols-2 gap-5 md:gap-8">
            @foreach ($schedules as $schedule)
                <div>This is schedule {{ $schedule->id }}, Name : {{ $schedule->title }}</div>
            @endforeach
        </div>
    </section>
</x-layout.index>
