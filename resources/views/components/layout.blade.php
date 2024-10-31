<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title ?? 'NBSC HOS' }}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="http://localhost:1313//app.css">
    <link rel="apple-touch-icon" sizes="180x180" href="http://localhost:1313/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://localhost:1313/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://localhost:1313/favicon-16x16.png">
    <link rel="icon" type="image/png" href="http://localhost:1313/favicon.ico">
    <link rel="manifest" href="http://localhost:1313/site.webmanifest">
    <link rel="mask-icon" href="http://localhost:1313/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

</head>
<script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>

<body class="bg-gray-50 dark:bg-gray-800 ">
    <livewire:navbar />
    <div class="flex flex-col pt-[85px] overflow-hidden lg:ml-64 px-4 bg-gray-50 dark:bg-gray-900">
        <livewire:sidebar />
        {{ $slot }}
    </div>
</body>

</html>
