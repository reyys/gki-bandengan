<x-layout.index>
    <div data-aos="fade-up" class="flex items-center justify-center md:min-h-[90vh]">
        <form class="w-full max-w-[500px] mx-auto flex flex-col space-y-5 bg-white md:border p-5 rounded-md"
            action="{{ route('register.store') }}" method="POST">
            @csrf
            <label>Name</label>
            <input class="p-3 border border-gray-300 rounded-md" name="name" placeholder="Input your name" />
            @error('name')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label>Email</label>
            <input class="p-3 border border-gray-300 rounded-md" name="email" type="email"
                placeholder="Input your email" />
            @error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label>Password</label>
            <input class="p-3 border border-gray-300 rounded-md" name="password" type="password"
                placeholder="Input your password" />
            @error('password')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label>Confirm Password</label>
            <input class="p-3 border border-gray-300 rounded-md" name="password_confirmation" type="password"
                placeholder="Input your confirm password" />
            @error('password_confirmation')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <button class="bg-primary text-white rounded-md py-3" type="submit">Create Account</button>
            <p class="mt-10 text-center text-gray-500">
                Sudah memiliki akun ?
                <a href={{ route('login') }}
                    class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Masuk</a>
            </p>
        </form>
    </div>
</x-layout.index>
