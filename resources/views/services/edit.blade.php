<x-layout.dashboard>
    <form action={{ route('services.update', compact('service')) }} method="POST" class="w-full max-w-2xl mx-auto"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="space-y-12">
            <div class="border-b pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Ubah Service</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Semua user dapat membuat service mereka sendiri</p>
                <div class="mt-10 grid gap-y-8">
                    <div class="col-span-full">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Judul</label>
                        <div class="mt-2 w-full">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                <input value="{{ old('title', $service->title) }}" type="text" name="title"
                                    id="title" autocomplete="title"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan Judul">
                            </div>
                        </div>
                        @error('title')
                            <span class="mt-3 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-full">
                        <label for="content" class="block text-sm font-medium leading-6 text-gray-900">Konten</label>
                        <div class="mt-2 w-full">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                <input value="{{ old('content', $service->title) }}" type="text" name="content"
                                    id="content" autocomplete="content"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan Konten">
                            </div>
                        </div>
                        @error('content')
                            <span class="mt-3 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-full">
                        <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Upload
                            Gambar</label>
                        <input id="image" type="file" name="image"
                            class="mt-3 border p-3 rounded-md w-full ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600" />
                        @error('image')
                            <span class="mt-3 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href={{ route('dashboard.services') }}>
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                </a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
    </form>
</x-layout.dashboard>
