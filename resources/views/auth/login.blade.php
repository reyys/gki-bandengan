<x-layout>
    <div class="md:min-h-[90vh] flex items-center justify-center">
        <form action="{{ route('login.store') }}" method="POST"
            class="flex flex-col space-y-5 p-5 md:border w-full max-w-[500px]">
            @csrf
            <h3 class="text-center">Masuk Sebagai Jemaat</h3>
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
            <button class="py-3 bg-primary text-white rounded-md" type="submit">Login</button>
        </form>
    </div>
</x-layout>
