<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <link rel="stylesheet" href="{{ asset('css/medicalrecs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/followup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/medicine.css') }}">



    {{ $styles ?? '' }}
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'NBSC HOS' }}</title>
</head>

<body class="bg-[#F6F8FA] flex min-h-screen">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <livewire:nav />
    {{ $slot }}
</body>

</html>
