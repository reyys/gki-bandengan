<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Refuch Learn</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <x-header />
    <main class="min-h-[84.3vh]">
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>
