<x-layout>
    <form action="login.store" method="POST">
        <input name="email" type="email" placeholder="Input your email" />
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <input name="password" type="password" placeholder="Input your password" />
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <button type="submit">Login</button>
    </form>
</x-layout>
