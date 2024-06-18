<x-layout.dashboard>
    <div class="container py-5 md:py-8 lg:py-12">

        <form action="{{ route('categories.update', $category->id) }}" method="POST"
            class="space-y-5 rounded-md max-w-2xl mx-auto">
            @csrf
            @method('PUT')
            <h2 class="text-base font-semibold leading-7 text-gray-900">Ubah Kategori</h2>
            <div class="flex flex-col space-y-3">
                <label>Nama</label>
                <input class="p-3 border w-full rounded-md" placeholder="Masukkan judul" name="name" required
                    value="{{ old('name', $category->name) }}" />
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href={{ route('dashboard.categories') }}>
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                </a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ubah
                    Kategori</button>
            </div>
        </form>
    </div>
</x-layout.dashboard>
