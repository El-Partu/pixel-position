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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
    {{-- <script>
        // JavaScript to hide the flash message after a few seconds
        document.addEventListener('DOMContentLoaded', function() {
            const flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                setTimeout(() => {
                    flashMessage.style.transition = 'opacity 0.5s ease-out'; // Animation
                    flashMessage.style.opacity = '0'; // Fade out
                    setTimeout(() => {
                        flashMessage.remove(); // Remove from DOM after fading out
                    }, 500); // Match this with the duration of the transition
                }, 3000); // Display for 3 seconds
            }
        });
    </script> --}}
</head>
<body class="bg-black text-white font-Hanken-Grotesk pb-10 ">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/40">
            <div>
             <a href="">
                <img src="{{ Vite::asset('resources/views/images/logo.svg') }}" alt="logo">
             </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="#">Career</a>
                <a href="#">Salaries</a>
                <a href="#">Company</a>
            </div>
            @auth
            <div class="space-x-4">
                <a href="/jobs/create">post a job</a>
                <form method="POST" action="/logout" class="hidden" id="logout">
                    @csrf
                    @method('DELETE')
                </form>
                <x-forms.button form="logout">logout</x-forms.button>
            </div>
            @endauth
            @guest
            <div class="space-x-4">
                <a href="/register">Sign up</a>
                <a href="/login">Login</a>
            </div>
            @endguest
        </nav>
        <main class="mt-10">
            {{ $slot }}
        </main>
    </div>

    @stack('js')
  
        
</body>
</html>

