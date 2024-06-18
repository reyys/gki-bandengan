<x-layout>
    <div class="container py-5 md:py-8 lg:py-12">
        <div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Berita Terbaru</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Ketahui berita terbaru tentang gereja kami
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-5">
            @foreach ($blogs as $blog)
                <x-blogs.card :blog=$blog />
            @endforeach
        </div>
    </div>
</x-layout>
