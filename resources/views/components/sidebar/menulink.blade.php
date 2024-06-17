<a {{ $attributes }}>
    <div class="flex items-center space-x-3 hover:bg-slate-800 rounded-md p-3 transition-all">
        <div class="h-5 w-5">
            @svg($icon)
        </div>
        <p>
            {{ $slot }}
        </p>
    </div>
</a>
