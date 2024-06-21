<div
    class="p-5 py-6 bg-slate-900 text-white w-full sticky top-0 h-[100vh] flex-col justify-between max-w-[300px] hidden md:flex">
    <div>
        <a href={{ route('index') }}>
            <h3 class="font-medium">GKI Bandengan</h3>
        </a>
        <div class="flex flex-col space-y-5 mt-5">
            <x-sidebar.menulink path="dashboard/home" icon="heroicon-o-home"
                href="/dashboard/home">Home</x-sidebar.menulink>
            <x-sidebar.menulink path="dashboard/schedules" icon="heroicon-o-calendar-days"
                href="/dashboard/schedules">Jadwal
                Misa</x-sidebar.menulink>
            <x-sidebar.menulink path="dashboard/categories" icon="heroicon-o-tag"
                href="/dashboard/categories">Categories</x-sidebar.menulink>
            <x-sidebar.menulink path="dashboard/blogs" icon="heroicon-o-book-open"
                href="/dashboard/blogs">Blogs</x-sidebar.menulink>
            <x-sidebar.menulink path="dashboard/services" icon="heroicon-o-wrench-screwdriver"
                href="/dashboard/services">Services</x-sidebar.menulink>
            <x-sidebar.menulink path="dashboard/jemaat" icon="heroicon-o-user"
                href="/dashboard/jemaat">Jemaat</x-sidebar.menulink>
        </div>
    </div>
    <div>
        <form action={{ route('logout') }} method="POST">
            @csrf
            <button type="submit"
                class="py-2 border-[2px] border-primary space-x-3 px-5 rounded-md w-full bg-primary text-white transition-all flex items-center justify-center">
                <p>Logout</p>
                <x-heroicon-o-arrow-right-start-on-rectangle class="w-5 h-5" />
            </button>
        </form>
    </div>
</div>
