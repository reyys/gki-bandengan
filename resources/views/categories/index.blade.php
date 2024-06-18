<x-layout.index>
    <section class="container p-5">
        <p>Categories</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-8 mt-5">
            @foreach ($categories as $category)
                <x-categories.card :category=$category />
            @endforeach
        </div>
    </section>
</x-layout.index>
