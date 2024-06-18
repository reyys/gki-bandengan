<x-layout>
    <div class="container py-5 md:py-8 lg:py-12">
        <div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Pelayanan Kami</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Ketahui pelayanan apa saja yang kami sediakan
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-5">
            @foreach ($services as $service)
                <x-services.card :service=$service />
            @endforeach
        </div>
    </div>
</x-layout>
