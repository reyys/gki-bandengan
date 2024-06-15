<header class="border-b relative z-[99]">
    <div class="container flex items-center justify-between py-5">
        <a class="text-3xl" href={{ route('index') }}>GKI Bandengan</a>
        <div class="hidden md:flex items-center space-x-8">
            <x-layout.navlink href="/schedules">Jadwal Misa</x-layout.navlink>
            <x-layout.navlink href="/blogs">Blogs</x-layout.navlink>
            <x-layout.navlink href="/services">Pelayanan</x-layout.navlink>
            <div class="flex items-center space-x-5">
                <a href={{ route('login') }}>
                    <button
                        class="py-2 border-[2px] hover:bg-primary hover:text-white border-primary text-primary font-semibold px-5 rounded-md hover:scale-[0.95] transition-all">Login</button>
                </a>
                <a href={{ route('register') }}>
                    <button
                        class="py-2 border-[2px] border-primary bg-primary text-white px-5 rounded-md hover:scale-[0.95] transition-all">Daftar</button>
                </a>
            </div>
        </div>
    </div>
</header>
