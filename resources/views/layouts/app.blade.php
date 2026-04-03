<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jayusman Market - @yield('title')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    
    <!-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> -->
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('components.sidebar')

        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            @include('components.header')

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-4">
                @yield('content')
            </main>

            <!-- Footer -->
            @include('components.footer')
        </div>
    </div>
</body>
</html> 