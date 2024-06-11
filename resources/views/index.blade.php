<x-layout>
    <section>
        <div class="w-full relative h-fit">
            <img class="w-full h-[92.5vh] object-cover" src="/images/church.jpg" />
            <div class="absolute left-0 top-0 right-0 bottom-0 bg-black/40 z-[1]"></div>
            <div class="absolute left-0 top-0 right-0 bottom-0 z-[2] flex flex-col items-center justify-center">
                <h1 class="text-white text-center">Selamat datang di <br />Gereja Kristen Indonesia Bandengan</h1>
                <a href="#schedules"
                    class="bg-primary text-white p-3 rounded-md px-5 hover:scale-[0.95] transition-all mt-5 md:mt-8 text-xl">
                    <button>Lihat Jadwal Misa</button>
                </a>
            </div>
        </div>
    </section>
    <section id="schedules" class="container py-5 md:py-8 lg:py-12">
        <div>
            <div class="flex items-center justify-between">
                <h2 class="font-medium">Jadwal Misa Terbaru</h2>
                <a class="hover:underline" href="{{ route('schedules.index') }}">Lihat Semua</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-5">
                <div class="p-5 border bg-white rounded-md drop-shadow-lg">
                    <h2>Hari Rabu Abu</h2>
                    <p>Jl test, Bandengan, Jakarta Utara</p>
                    <div class="w-full h-[1px] bg-gray-300 mt-5"></div>
                    <div class="flex items-center space-x-5 py-5">
                        <div class="flex flex-col items-center min-w-[60px] space-y-2">
                            <h1 class="leading-none">12</h1>
                            <p>JUN 24</p>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <h2 class="leading-none">Ibadah</h2>
                            <h2 class="leading-none">Rabu Abu</h2>
                        </div>
                    </div>
                    <div class="w-full h-[1px] bg-gray-300"></div>
                    <div class="flex items-center space-x-5 py-5">
                        <div class="flex flex-col items-center min-w-[60px] space-y-2">
                            <h1 class="leading-none">11</h1>
                            <p>WIB</p>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <h2 class="leading-none">Pdt. Aristo</h2>
                            <p class="leading-none">Doa & Perjamuan Kudus</p>
                        </div>
                    </div>
                    <div class="w-full h-[1px] bg-gray-300"></div>
                    <p class="mt-5 italic text-gray-400">* Khusus Untuk Jemaat</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-full relative flex items-center justify-center h-[500px]">
            <img class="absolute h-[500px] w-full left-0 top-0 right-0 bottom-0 object-cover"
                src="/images/congregation.jpg" />
            <div class="absolute left-0 top-0 right-0 bottom-0 bg-black/50 z-[1]"></div>
            <div class="w-full flex flex-col justify-center items-center space-y-5 relative z-[2]">
                <h2 class="text-white">Gabung Sebagai Jemaat</h2>
                <p class="text-white max-w-[600px] leading-loose text-center">Bergabung bersama kami hari ini untuk
                    mengabdi. Umur
                    berapapun,
                    Dimanapun dan
                    Kapanpun</p>
                <a href={{ route('register') }}>
                    <button class="bg-primary px-5 py-3 text-white rounded-md">Daftar Sekarang</button>
                </a>
            </div>
        </div>
    </section>
</x-layout>
