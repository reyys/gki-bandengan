<x-layout>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
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
        <input name="password_confirmation" type="password" placeholder="Input your password" />
        @error('password_confirmation')
            <p>{{ $message }}</p>
        @enderror
        <button type="submit">Create Account</button>
    </form>
</x-layout>
