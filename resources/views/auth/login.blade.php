<x-layout.index>
    <div data-aos="fade-up" class="flex min-h-[80vh] flex-col justify-center px-6 py-12 lg:px-8">
        <div class="p-5 border rounded-md w-full max-w-[500px] mx-auto flex flex-col">
            <div class="w-full">
                <form class="space-y-6" action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <h2 class="text-center font-semibold">Login</h2>
                    <div>
                        <label for="email" class="block font-medium leading-6 text-gray-900">Email
                            address</label>
                        <div class="mt-2">
                            <input placeholder="Masukkan email anda" id="email" name="email" type="email"
                                autocomplete="email" required
                                class="block w-full rounded-md border-0 p-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6">
                        </div>
                    </div>
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block font-medium leading-6 text-gray-900">Password</label>
                        </div>
                        <div class="mt-2">
                            <input placeholder="Masukkan password anda" id="password" name="password" type="password"
                                autocomplete="current-password" required
                                class="block w-full rounded-md border-0 p-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm sm:leading-6">
                        </div>
                    </div>
                    @error('password')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <div>
                        <button class="w-full bg-primary text-white rounded-md py-3" type="submit">Login</button>
                    </div>
                </form>
                <p class="mt-10 text-center text-gray-500">
                    Belum ada akun ?
                    <a href={{ route('register') }}
                        class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Daftar Sekarang</a>
                </p>
            </div>
        </div>
    </div>
</x-layout.index>
