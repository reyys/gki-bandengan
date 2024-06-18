<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | GKI Bandengan</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex">
        <x-sidebar.index />
        <main class="min-h-[100vh] w-full">
            <div class="p-5 border-b bg-white drop-shadow-sm">
                <p>
                    {{ auth()->user()->email }}
                </p>
            </div>
            <div class="py-5 md:py-8 lg:py-12 w-full container">
                {{ $slot }}
            </div>
        </main>
    </div>
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>

</html>
