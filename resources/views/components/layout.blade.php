<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..600&display=swap" rel="stylesheet">
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-black text-white font-Hanken-Grotesk">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/40">
            <div>
             <a href="">
                <img src="{{ Vite::asset('resources/views/images/logo.svg') }}" alt="logo">
             </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Career</a>
                <a href="#">Salaries</a>
                <a href="#">Company</a>
            </div>
            <div>
                <a href="">post a job</a>
            </div>
        </nav>
        <main class="mt-10">
            {{ $slot }}
        </main>
    </div>
</body>
</html>

