<div data-aos="fade-up" class="h-full">
    <a href={{ route('jemaats.show', compact('jemaat')) }}>
        <div class="flex max-w-xl flex-col items-start bg-white border h-full">
            <div class="p-5 w-full">
                <div class="flex items-center justify-between w-full">
                    <div class="flex items-center gap-x-4 text-xs w-full">
                        <time datetime="2020-03-16"
                            class="text-gray-500">{{ $jemaat->created_at->diffForHumans() }}</time>
                    </div>
                    <div class="flex items-center space-x-5">
                        <a href={{ route('jemaats.edit', compact('jemaat')) }}>
                            <x-heroicon-o-pencil-square
                                class="hover:text-primary transition-all cursor-pointer h-6 w-6" />
                        </a>
                        <form action={{ route('jemaats.destroy', compact('jemaat')) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="mt-1">
                                <x-heroicon-o-trash class="hover:text-primary transition-all cursor-pointer h-6 w-6" />
                            </button>
                        </form>
                    </div>
                </div>
                <div class="group relative">
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                        <a href="#" class="line-clamp-1">
                            <span class="absolute inset-0"></span>
                            {{ $jemaat->name }}
                        </a>
                    </h3>
                    <p class="mt-3 line-clamp-3 text-sm leading-6 text-gray-600">{{ $jemaat->job }}
                    </p>
                </div>
            </div>
        </div>
    </a>
</div>
