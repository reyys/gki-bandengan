<x-layout>
    <form action="register.store" method="POST">
        <input name="name" placeholder="Input your name" />
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <input name="email" type="email" placeholder="Input your email" />
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <input name="password" type="password" placeholder="Input your password" />
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <input name="password_confirmed" type="password" placeholder="Input your password" />
        @error('password_confirmed')
            <p>{{ $message }}</p>
        @enderror
        <button type="submit">Create Account</button>
    </form>
</x-layout>
