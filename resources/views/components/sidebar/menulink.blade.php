<a {{ $attributes }}>
    <div
        class="{{ request()->is($path) ? 'bg-primary' : 'hover:bg-slate-800' }} flex items-center space-x-3 rounded-md p-3 transition-all">
        <div class="h-5 w-5">
            @svg($icon)
        </div>
        <p>
            {{ $slot }}
        </p>
    </div>
</a>
