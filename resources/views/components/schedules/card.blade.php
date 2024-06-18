@php
    use Carbon\Carbon;
@endphp

<div data-aos="fade-up">
    <a href={{ route('schedules.show', ['schedule' => $schedule]) }}>
        <div
            class="p-5 border bg-white rounded-md drop-shadow-lg hover:bg-primary hover:text-white transition-all cursor-pointer group">
            <h2>{{ $schedule->name }}</h2>
            <p>{{ $schedule->address }}</p>
            <div class="w-full h-[1px] bg-gray-300 mt-5"></div>
            <div class="flex items-center space-x-5 py-5">
                <div class="flex flex-col items-center min-w-[60px] space-y-2">
                    <h1 class="leading-none">{{ Carbon::parse($schedule->date)->format('d') }}</h1>
                    <p>{{ Carbon::parse($schedule->date)->format('M y') }}</p>
                </div>
                <div class="flex flex-col space-y-2">
                    <h2 class="leading-none">{{ $schedule->title }}</h2>
                </div>
            </div>
            <div class="w-full h-[1px] bg-gray-300"></div>
            <div class="flex items-center space-x-5 py-5">
                <div class="flex flex-col items-center min-w-[60px] space-y-2">
                    <h1 class="leading-none">{{ Carbon::parse($schedule->start_time)->format('h') }}</h1>
                    <p>WIB</p>
                </div>
                <div class="flex flex-col space-y-2">
                    <h2 class="leading-none">{{ $schedule->pastor }}</h2>
                    <p class="leading-none">{{ $schedule->topic }}</p>
                </div>
            </div>
            <div class="w-full h-[1px] bg-gray-300"></div>
            <p class="mt-5 italic text-gray-400 group-hover:text-gray-100">* Khusus Untuk Jemaat</p>
        </div>
    </a>
</div>
