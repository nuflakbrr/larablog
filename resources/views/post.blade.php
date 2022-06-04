{{-- LOAD DATA --}}
{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')
    <article>
        <div class="flex flex-col items-center justify-center mx-auto pb-8 border-b-2 border-gray-600">
            <h4 class="text-lg text-gray-400">{{ $post['date'] }}</h4>
            <h1 class="text-5xl text-white font-bold">{{ $post['title'] }}</h1>
        </div>
        <div class="grid grid-cols-8 gap-6 md:py-10 lg:py-10 xl:py-0">
            <div class="col-span-8 md:col-span-8 lg:col-span-8 xl:col-span-2 my-2">
                {{-- Author --}}
                <div class="pb-2 border-b-2 border-gray-600">
                    <div class="w-full px-4 py-5">
                        <h4 class="mb-1 text-lg font-bold uppercase text-sky-500">
                            Penulis
                        </h4>
                        <h2 class="mb-1 max-w-md text-xl font-bold capitalize text-white lg:text-xl">
                            {{ $post['author'] }}
                        </h2>
                        <p class="max-w-6xl text-base font-medium text-slate-500 lg:text-sm">
                            Saya bersemangat memberikan kontribusi untuk memberikan pengetahuan teknologi bagi semua
                            orang!
                        </p>
                    </div>
                </div>
                {{-- Author End --}}

                {{-- Category --}}
                {{-- <div class="pb-2 border-b-2 border-gray-600">
                    <div class="w-full px-4 py-5">
                        <h4 class="mb-1 text-lg font-bold uppercase text-sky-500">
                            Kategori
                        </h4>
                        <h2 class="mb-1 max-w-md text-xl font-bold capitalize text-white lg:text-xl">
                            {{ $post['category'] }}
                        </h2>
                    </div>
                </div> --}}
                {{-- Category End --}}

                {{-- Back to blog --}}
                <div>
                    <div class="w-full px-4 py-5">
                        <a href="/blog"
                            class="max-w-6xl text-base font-medium text-slate-500 hover:text-sky-500 lg:text-md">
                            &larr; Kembali ke Catatan
                        </a>
                    </div>
                </div>
                {{-- Back to blog End --}}
            </div>

            <div class="col-span-8 md:col-span-8 lg:col-span-8 xl:col-span-6">
                <div class="my-2">
                    <p class="text-xl text-white">{{ $post['body'] }}</p>
                </div>
            </div>
        </div>
    </article>
@endsection
