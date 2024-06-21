<x-layout.dashboard>
    <form action={{ route('jemaats.store') }} method="POST" class="w-full max-w-2xl mx-auto"
        enctype="multipart/form-data">
        @csrf
        <div class="space-y-12">
            <div class="border-b pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Buat Jemaat</h2>
                <div class="mt-10 grid gap-y-8">
                    <div class="col-span-full">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                        <div class="mt-2 w-full">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                <input type="text" name="name" id="name" autocomplete="name"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan nama jemaat">
                            </div>
                        </div>
                        @error('name')
                            <span class="mt-3 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-full">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="p-2 mt-2 border-gray-300 border w-full rounded-md"
                            placeholder="Masukkan tanggal lahir" name="birth_date" required />
                        @error('birth_date')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-full">
                        <label for="job"
                            class="block text-sm font-medium leading-6 text-gray-900">Pekerjaan</label>
                        <div class="mt-2 w-full">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                <input type="text" name="job" id="job" autocomplete="job"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan pekerjaan jemaat">
                            </div>
                        </div>
                        @error('name')
                            <span class="mt-3 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href={{ route('dashboard.jemaats') }}>
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                </a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buat
                    Jemaat</button>
            </div>
    </form>
</x-layout.dashboard>
