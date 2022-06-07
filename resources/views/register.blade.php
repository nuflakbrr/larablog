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

    {{-- Section Content Start --}}
    <section class="bg-gray-900 min-h-screen">
        <section class="max-w-xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="container bg-white rounded p-5">
                <div class="text-center">
                    <h1 class="font-bold text-xl">Register</h1>
                </div>
                <form action="/admin/register" method="post">
                    @csrf

                    @error('name')
                        <div class='mt-4 bg-red-500 p-3 rounded'>
                            <p class='text-white text-sm font-bold'>{{ $message }}</p>
                        </div>
                    @enderror

                    @error('bio')
                        <div class='mt-4 bg-red-500 p-3 rounded'>
                            <p class='text-white text-sm font-bold'>{{ $message }}</p>
                        </div>
                    @enderror

                    @error('email')
                        <div class='mt-4 bg-red-500 p-3 rounded'>
                            <p class='text-white text-sm font-bold'>{{ $message }}</p>
                        </div>
                    @enderror

                    @error('password')
                        <div class='mt-4 bg-red-500 p-3 rounded'>
                            <p class='text-white text-sm font-bold'>{{ $message }}</p>
                        </div>
                    @enderror

                    <div class='mt-4'>
                        <label class='block text-gray-700 text-sm font-bold mb-2' for='name'>
                            Nama
                        </label>
                        <input
                            class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'
                            id='name' name='name' type='text' placeholder='Nama' value="{{ old('name') }}" required />
                    </div>
                    <div class='mt-4'>
                        <label class='block text-gray-700 text-sm font-bold mb-2' for='bio'>
                            Bio
                        </label>
                        <input
                            class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'
                            id='bio' name='bio' type='text' placeholder='Bio' value="{{ old('bio') }}" required />
                    </div>
                    <div class='mt-4'>
                        <label class='block text-gray-700 text-sm font-bold mb-2' for='email'>
                            Email
                        </label>
                        <input
                            class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'
                            id='email' name='email' type='email' placeholder='Email' value="{{ old('email') }}"
                            required />
                    </div>
                    <div class='mt-4'>
                        <label class='block text-gray-700 text-sm font-bold mb-2' for='password'>
                            Password
                        </label>
                        <input
                            class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline'
                            id='password' name='password' type='password' placeholder='******************' required />
                    </div>
                    <div class='mt-4'>
                        <button
                            class='bg-sky-500 hover:bg-sky-600 w-full text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline'
                            type='submit'>
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </section>
    {{-- Section Content End --}}

</body>

</html>
