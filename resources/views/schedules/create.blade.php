<x-layout.dashboard>
    <form action="{{ route('schedules.store') }}" method="POST" enctype="multipart/form-data"
        class="flex flex-col space-y-5 w-full max-w-2xl mx-auto">
        @csrf
        <h2 class="text-base font-semibold leading-7 text-gray-900">Buat Jadwal Misa</h2>
        <label>Judul</label>
        <input class="p-3 border w-full rounded-md" placeholder="Masukkan judul" name="title" required />
        @error('title')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <label>Alamat</label>
        <input class="p-3 border w-full rounded-md" placeholder="Masukkan alamat" name="address" required />
        @error('address')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <label>Deskripsi</label>
        <input class="p-3 border w-full rounded-md" placeholder="Masukkan deskripsi" name="description" required />
        @error('description')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <label>Pastor</label>
        <input class="p-3 border w-full rounded-md" placeholder="Masukkan pastor" name="pastor" required />
        @error('pastor')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <label>Topik</label>
        <input class="p-3 border w-full rounded-md" placeholder="Masukkan topik" name="topic" required />
        @error('topic')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <label>Tanggal</label>
        <input type="date" class="p-3 border w-full rounded-md" placeholder="Masukkan tanggal" name="date"
            required />
        @error('date')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <label>Jam Mulai</label>
        <input type="time" class="p-3 border w-full rounded-md" name="start_time" required />
        @error('start_time')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <label>Jam Selesai</label>
        <input type="time" class="p-3 border w-full rounded-md" name="end_time" required />
        @error('end_time')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href={{ route('dashboard.schedules') }}>
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>

            </a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buat
                Jadwal</button>
        </div>
    </form>
</x-layout.dashboard>
