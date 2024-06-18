<x-layout.index>
    <div class="container py-5 md:py-8 lg:py-12">

        <form action="{{ route('schedules.update', $schedule->id) }}" method="POST"
            class="space-y-5 rounded-md max-w-2xl mx-auto">
            @csrf
            @method('PUT')
            <h2 class="text-base font-semibold leading-7 text-gray-900">Ubah Jadwal Misa</h2>
            <div class="flex flex-col space-y-3">
                <label>Judul</label>
                <input class="p-3 border w-full rounded-md" placeholder="Masukkan judul" name="title" required
                    value="{{ old('title', $schedule->title) }}" />
                @error('title')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-3">
                <label>Alamat</label>
                <input class="p-3 border w-full rounded-md" placeholder="Masukkan alamat" name="address" required
                    value="{{ old('address', $schedule->address) }}" />
                @error('address')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col space-y-3">
                <label>Deskripsi</label>
                <input class="p-3 border w-full rounded-md" placeholder="Masukkan deskripsi" name="description" required
                    value="{{ old('description', $schedule->description) }}" />
                @error('description')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col space-y-3">
                <label>Pastor</label>
                <input class="p-3 border w-full rounded-md" placeholder="Masukkan pastor" name="pastor" required
                    value="{{ old('pastor', $schedule->pastor) }}" />
                @error('pastor')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col space-y-3">
                <label>Topik</label>
                <input class="p-3 border w-full rounded-md" placeholder="Masukkan topik" name="topic" required
                    value="{{ old('topic', $schedule->topic) }}" />
                @error('topic')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col space-y-3">
                <label>Tanggal</label>
                <input type="date" class="p-3 border w-full rounded-md" placeholder="Masukkan tanggal" name="date"
                    value="{{ old('date', $schedule->date) }}" required />
                @error('date')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col space-y-3">
                <label>Jam Mulai</label>
                <input type="time" class="p-3 border w-full rounded-md" name="start_time" required
                    value="{{ old('start_time', $schedule->start_time) }}" />
                @error('start_time')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col space-y-3">
                <label>Jam Selesai</label>
                <input type="time" class="p-3 border w-full rounded-md" name="end_time" required
                    value="{{ old('end_time', $schedule->end_time) }}" />
                @error('end_time')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href={{ route('schedules.show', compact('schedule')) }}>
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>

                </a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ubah
                    Jadwal</button>
            </div>
        </form>
    </div>
</x-layout.index>
