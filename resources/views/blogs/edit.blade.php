<x-layout.dashboard>
    <form action={{ route('blogs.update', compact('blog')) }} method="POST" class="w-full max-w-2xl mx-auto"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="space-y-12">
            <div class="border-b pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Ubah Blog</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Semua user dapat membuat blog mereka sendiri</p>
                <div class="mt-10 grid gap-y-8">
                    <div class="col-span-full">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Judul</label>
                        <div class="mt-2 w-full">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                <input value="{{ old('title', $blog->title) }}" type="text" name="title"
                                    id="title" autocomplete="title"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan Judul">
                            </div>
                        </div>
                        @error('title')
                            <span class="text-xs mt-3 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-full">
                        <label for="category" class="block text-sm font-medium leading-6 text-gray-900">Kategori</label>
                        <div class="mt-2 w-full">
                            <select value="{{ old('category_id', $blog->category->id) }}" name="category_id"
                                id="category" class="w-full p-2 border border-gray-300 rounded-md text-xs">
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value={{ $category->id }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id')
                            <span class="text-xs mt-3 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-full">
                        <label for="description"
                            class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
                        <div class="mt-2">
                            <input value="{{ old('description', $blog->description) }}" id="description"
                                name="description" rows="3" placeholder="Masukkan Deskripsi"
                                class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        @error('description')
                            <span class="text-xs mt-3 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-full">
                        <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Upload
                            Gambar</label>
                        <input value="{{ old('image', $blog->image) }}" id="image" type="file" name="image"
                            class="mt-3 border p-3 rounded-md w-full ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600" />
                        @error('image')
                            <span class="text-xs mt-3 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
    </form>
</x-layout.dashboard>
