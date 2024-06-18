<div class="bg-white p-5 rounded-md border drop-shadow-lg flex items-center space-x-5 justify-between">
    <p class="capitalize">
        {{ $category->name }}
    </p>
    <div class="flex items-center space-x-5">
        <a href={{ route('categories.edit', compact('category')) }}>
            <x-heroicon-o-pencil-square class="hover:text-primary transition-all cursor-pointer h-6 w-6" />
        </a>
        <form action={{ route('categories.destroy', compact('category')) }} method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="mt-1">
                <x-heroicon-o-trash class="hover:text-primary transition-all cursor-pointer h-6 w-6" />
            </button>
        </form>
    </div>
</div>
