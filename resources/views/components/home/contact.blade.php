<div data-aos="fade-up" class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
        aria-hidden="true">
        <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Hubungi Kami</h2>
        <p class="max-w-[550px] mx-auto mt-2 text-lg leading-8 text-gray-600">Beritahu Keluhan, Masukan Atau Pesan Yang
            Ingin
            Disampaikan
            Kepada Kami</p>
    </div>
    <form action={{ route('contact.store') }} method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
        @csrf
        <div class="grid grid-cols-1 gap-x-8 gap-y-5">
            <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Nama</label>
            <div>
                <input required type="text" name="name" id="name" autocomplete="given-name"
                    placeholder="Masukkan Nama"
                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
            <div>
                <input required type="email" name="email" id="email" autocomplete="email"
                    placeholder="Masukkan Alamat Email"
                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Nomor
                Telepon</label>
            <div class="relative mt-2.5">
                <input required type="tel" name="phoneNumber" id="phone-number" autocomplete="tel"
                    placeholder="Masukkan Nomor Telepon"
                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('phoneNumber')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
            <div>
                <textarea required name="message" id="message" rows="4" placeholder="Masukkan Keluhan, Masukan atau Pesan Anda"
                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
            @error('message')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-10">
            <button type="submit"
                class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kirim
                Pesan</button>
        </div>
    </form>
</div>
