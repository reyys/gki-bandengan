{{-- "title" => "required|min:4|max:255",
'address' => "required|min:4|max:255",
'description' => "required|min:4|max:255",
'pastor' => "required|min:4|max:255",
"topic" => "required|min:4|max:255",
"date" => "required",
"start_time" => "required",
"end_time" => "required", --}}

<x-layout.dashboard>
    <form action="{{ route('schedules.store') }}" method="POST" enctype="multipart/form-data"
        class="flex flex-col space-y-5 w-full max-w-[600px] mx-auto p-5 border">
        @csrf
        <div class="flex items-center justify-between">
            <a href="{{ route('dashboard.schedules') }}">
                <div class="flex items-center space-x-2 hover:text-primary">
                    <x-heroicon-o-chevron-left class="h-4 w-4" />
                    <p>Back </p>
                </div>
            </a>
            <h3 class="text-center">Buat Jadwal Baru</h3>
            <a class="invisible" href="{{ route('dashboard.schedules') }}">
                <div class="flex items-center space-x-2">
                    <x-heroicon-o-chevron-left class="h-4 w-4" />
                    <p>Back </p>
                </div>
            </a>
        </div>
        <label>Judul</label>
        <input class="p-3 border w-full rounded-md" placeholder="Masukkan judul" name="title" required />
        @error('title')
            <span>{{ $message }}</span>
        @enderror
        <label>Alamat</label>
        <input class="p-3 border w-full rounded-md" placeholder="Masukkan alamat" name="address" required />
        @error('address')
            <span>{{ $message }}</span>
        @enderror
        <label>Deskripsi</label>
        <input class="p-3 border w-full rounded-md" placeholder="Masukkan deskripsi" name="description" required />
        @error('description')
            <span>{{ $message }}</span>
        @enderror
        <label>Pastor</label>
        <input class="p-3 border w-full rounded-md" placeholder="Masukkan pastor" name="pastor" required />
        @error('pastor')
            <span>{{ $message }}</span>
        @enderror
        <label>Topic</label>
        <input class="p-3 border w-full rounded-md" placeholder="Masukkan topik" name="topic" required />
        @error('topic')
            <span>{{ $message }}</span>
        @enderror
        <label>Tanggal</label>
        <input type="date" class="p-3 border w-full rounded-md" placeholder="Masukkan tanggal" name="date"
            required />
        @error('date')
            <span>{{ $message }}</span>
        @enderror
        <label>Jam Mulai</label>
        <input type="time" class="p-3 border w-full rounded-md" name="start_time" required />
        @error('start_time')
            <span>{{ $message }}</span>
        @enderror
        <label>Jam Selesai</label>
        <input type="time" class="p-3 border w-full rounded-md" name="end_time" required />
        @error('end_time')
            <span>{{ $message }}</span>
        @enderror
        <button class="py-3 px-5 bg-primary text-white rounded-md" type="submit">Buat Jadwal</button>
    </form>
</x-layout.dashboard>
