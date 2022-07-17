<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />
    <div class="flex" x-data="{isOpen:true}">
        <!-- Sidebar -->
        @include('includes.nav.sidebar')
        <!-- Body -->
        <div class=" w-full h-screen  bg-gray-200" id="body">
            <!-- Navbar -->
            @include('includes.nav.navbar')

            <div class="p-2">
                @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    window.addEventListener('show-success-confirmation', event => {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            
        })

        Toast.fire({
                icon: 'success',
                title: 'Creat Category successfully',
                padding: '0.5rem',

               
                
            

            }) 
         
            
           

    });
    </script>

</body>

</html>