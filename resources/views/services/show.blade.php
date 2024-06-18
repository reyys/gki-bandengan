<x-layout>
    <section class="max-w-2xl mx-auto py-5 md:py-8 lg:py-12">
        <img src={{ Storage::url($service->image) }} />
        <div class="flex items-center justify-between">
            <h3 class="mt-5 font-medium leading-tight">{{ $service->title }}</h3>
            <p class="mt-5 text-gray-400">{{ $service->created_at->diffForHumans() }}</p>
        </div>
        <p class="mt-5">{{ $service->content }}</p>
    </section>
</x-layout>
