<x-layout.dashboard>
    <div class="flex flex-col space-y-5 md:space-y-0 md:flex-row items-center justify-between">
        <h3>Blogs</h3>
        @if (auth()->check() && auth()->user()->is_admin)
            <a href={{ route('blogs.create') }} class="p-3 bg-primary text-white rounded-md px-5">
                Buat Blog Baru
            </a>
        @endif
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 md:gap-8 mt-5">
        @foreach ($blogs as $blog)
            <x-blogs.card :blog=$blog />
        @endforeach
    </div>
</x-layout.dashboard>
