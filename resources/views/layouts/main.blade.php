<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Tailwind CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- AlpineJS --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <title>{{ $title }} LaraBlog</title>
</head>

<body>
    {{-- Import Navbar --}}
    @include('partials.navbar')
    {{-- Import Navbar End --}}

    {{-- Section Content Start --}}
    <section class="bg-gray-900 pt-20">
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="container">
                <div class="py-6">
                    @yield('container')
                </div>
            </div>
        </section>
    </section>
    {{-- Section Content End --}}

    {{-- Import Footer --}}
    @include('partials.footer')
    {{-- Import Footer End --}}
</body>

</html>
