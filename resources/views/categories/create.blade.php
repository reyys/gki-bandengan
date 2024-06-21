<x-layout.dashboard>
    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data"
        class="flex flex-col space-y-5 w-full max-w-2xl mx-auto">
        @csrf
        <h2 class="text-base font-semibold leading-7 text-gray-900">Buat Kategori</h2>
        <label>Nama</label>
        <input class="p-3 border w-full rounded-md" placeholder="Masukkan nama" name="name" required />
        @error('name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href={{ route('dashboard.categories') }}>
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            </a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buat
                Kategori</button>
        </div>
    </form>
</x-layout.dashboard>
