{{-- LOAD DATA --}}
{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')
    <article>
        <div class="flex flex-col items-center justify-center mx-auto pb-8 border-b-2 border-gray-600">
            <h4 class="text-lg text-gray-400">{{ date('l, d F Y', strtotime($post->published_at)) }}</h4>
            <h1 class="text-5xl text-white font-bold">{{ $post->title }}</h1>
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
                            {{ $post->user->name }}
                        </h2>
                        <p class="max-w-6xl text-base font-medium text-slate-500 lg:text-sm">
                            {{ $post->user->bio }}
                        </p>
                    </div>
                </div>
                {{-- Author End --}}

                {{-- Category --}}
                <div class="pb-2 border-b-2 border-gray-600">
                    <div class="w-full px-4 py-5">
                        <h4 class="mb-1 text-lg font-bold uppercase text-sky-500">
                            Kategori
                        </h4>
                        <a href="/tags/{{ $post->category->slug }}"
                            class="max-w-6xl text-base font-medium text-white hover:text-sky-500 lg:text-sm">
                            {{ $post->category->name }}
                        </a>
                    </div>
                </div>
                {{-- Category End --}}

            </div>

            <div class="col-span-8 md:col-span-8 lg:col-span-8 xl:col-span-6">
                <div class="my-2 text-white">
                    {!! $post->body !!}
                </div>
            </div>

            <div class="col-span-8 md:col-span-8 lg:col-span-8 xl:col-span-2 my-2">
                {{-- Back to blog --}}
                <div>
                    <div class="w-full px-4 py-5 xl:py-0 border-t-2 border-gray-600 xl:border-t-0">
                        <a href="/blog"
                            class="max-w-6xl text-base font-medium text-slate-500 hover:text-sky-500 lg:text-md">
                            &larr; Kembali ke Catatan
                        </a>
                    </div>
                </div>
                {{-- Back to blog End --}}
            </div>
        </div>
    </article>
@endsection
