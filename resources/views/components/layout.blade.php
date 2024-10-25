<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBSC Health Office System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    {{ $styles ?? '' }}
    @vite('resources/css/app.css')
    <title>{{ $heading ?? 'NBSC HOS' }}</title>
</head>

<body class="bg-[#F6F8FA] flex">
    <x-nav />
    <div class="flex-1 flex flex-col gap-4">
        <nav class="bg-white h-16 border-b border-[#E9EAEE] flex items-center px-6">
            <h1 class="font-bold text-2xl">Nurse</h1>
        </nav>
        {{ $slot }}
    </div>
</body>

</html>
