<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        @vite('resources/js/slider.js')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="w-full relative bg-bg min-h-screen ">
             <header class="w-full flex justify-between items-center py-4 px-8 fixed top-0 left-0 bg-transparent after:content[''] after:absolute after:right-0 after:w-full after:bottom-0 backdrop-blur-md after:h-px after:z-50 after:bg-black">
                        <div class="flex lg:justify-center lg:col-start-2">
                      <h1>Logo</h1>      
                    </div>
                    <div>

                        @if (Route::has('login'))
                        <livewire:welcome.navigation />
                        @endif
                    </div>
                    </header>
                    <div class="mt-[70px]">
                        <livewire:hero/>
                        <livewire:feature/>
                        <livewire:team/>
                        <livewire:f-q/>
                    </div>
        </div>
    </body>
</html>
