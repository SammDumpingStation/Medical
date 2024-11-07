<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/css/login.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login Page</title>
</head>


<body class="flex justify-center items-center h-[100vh] bg-[#003366]">
    <form action="/login" wire:submit="login" method="POST" class="w-[500px] bg-white p-8 rounded-2xl">
        @csrf
        <div class="flex flex-col items-center mb-10">
            <img src="images/nbsc-logo.png" class="h-24" alt="Logo" class="logo">
            <h1 class="text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
                NBSC HOS</h1>
            <p class="mb-3 text-gray-500 dark:text-gray-400">Please fill in your credentials to login.</p>
        </div>
        <div class="">
            <label for="patient_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School
                ID</label>
            <input type="text" name="patient_id" id="patient_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name@example.com" required />
        </div>
        @error('patient_id')
            <span class="text-red-500 text-sm italic">{{ $message }}</span>
        @enderror
        <div class="mt-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Password</label>
            <input type="password" name="password" id="password" placeholder="********"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>
        @error('password')
            <span class="text-red-500 text-sm italic">{{ $message }}</span>
        @enderror
        @if (session('error'))
            <span class="text-red-500 text-sm italic">
                {{ session('error') }}
            </span>
        @endif
        <div class="flex items-start mb-5 mt-3">
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value=""
                    class="w-4 h-4 border border-gray-300 cursor-pointer rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
            </div>
            <label for="remember"
                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Remember
                me</label>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</body>

</html>
