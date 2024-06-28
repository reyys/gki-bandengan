<x-layout>
    <section class="max-w-2xl mx-auto py-5 md:py-8 lg:py-12">
        <img class="w-full" src={{ Storage::url($blog->image) }} />
        <div class="flex items-center justify-between">
            <div class="relative mt-8 flex items-center gap-x-4">
                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="" class="h-10 w-10 rounded-full bg-gray-50">
                <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            {{ $blog->user->name }}
                        </a>
                    </p>
                    <p class="text-gray-600">{{ $blog->user->email }}</p>
                </div>
            </div>
            <p class="mt-5 text-gray-400">{{ $blog->created_at->diffForHumans() }}</p>
        </div>
        <h3 class="mt-5 font-medium leading-tight">{{ $blog->title }}</h3>
        <p class="mt-5">{{ $blog->description }}</p>
    </section>
</x-layout>
