<div class="p-5 py-6 bg-slate-900 text-white w-full sticky top-0 h-[100vh] flex flex-col justify-between max-w-[300px]">
    <div>
        <h3 class="font-medium">GKI Bandengan</h3>
        <div class="flex flex-col space-y-5 mt-5">
            <x-sidebar.menulink icon="heroicon-o-home" href="/dashboard/home">Home</x-sidebar.menulink>
            <x-sidebar.menulink icon="heroicon-o-calendar-days" href="/dashboard/schedules">Jadwal
                Misa</x-sidebar.menulink>
            <x-sidebar.menulink icon="heroicon-o-tag" href="/dashboard/categories">Categories</x-sidebar.menulink>
            <x-sidebar.menulink icon="heroicon-o-book-open" href="/dashboard/blogs">Blogs</x-sidebar.menulink>
            <x-sidebar.menulink icon="heroicon-o-wrench-screwdriver"
                href="/dashboard/services">Services</x-sidebar.menulink>
            <x-sidebar.menulink icon="heroicon-o-user" href="/dashboard/jemaat">Jemaat</x-sidebar.menulink>
        </div>
    </div>
    <div>
        <form action={{ route('logout') }} method="POST">
            @csrf
            <button type="submit"
                class="py-2 border-[2px] border-primary px-5 rounded-md w-full bg-primary text-white transition-all">Logout</button>
        </form>
    </div>
</div>
