<header class="border-b">
    <div class="container flex items-center justify-between py-5">
        <a class="text-2xl" href={{ route('index') }}>GKI Bandengan</a>
        <div class="hidden md:flex items-center space-x-8">
            <a href={{ route('schedules.index') }}>Jadwal Misa</a>
            <a href={{ route('blogs.index') }}>Artikel</a>
            <a href={{ route('contact.index') }}>Hubung Kami</a>
            <div class="flex items-center space-x-5">
                <a href={{ route('login') }}>
                    <button
                        class="py-2 border border-primary px-5 rounded-md hover:scale-[0.95] transition-all">Login</button>
                </a>
                <a href={{ route('register') }}>
                    <button
                        class="py-2 bg-primary text-white px-5 rounded-md hover:scale-[0.95] transition-all">Daftar</button>
                </a>
            </div>
        </div>
    </div>
</header>
