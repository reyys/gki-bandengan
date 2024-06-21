<x-layout.dashboard>
    <div class="flex flex-col space-y-5 md:space-y-0 md:flex-row items-center justify-between">
        <h3>Categories</h3>
        <a href={{ route('categories.create') }} class="p-3 bg-primary text-white rounded-md px-5">
            Buat Kategori Baru
        </a>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 md:gap-8 mt-5">
        @foreach ($categories as $category)
            <x-categories.card :category=$category />
        @endforeach
    </div>
</x-layout.dashboard>
