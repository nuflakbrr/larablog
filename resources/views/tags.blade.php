{{-- LOAD DATA --}}
{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <div class="my-20 rounded-xl bg-slate-100 py-10">
        <div class="flex flex-wrap items-center px-5 xl:px-10">
            <div class="w-full px-4 lg:w-1/2">
                <h4 class="mb-3 text-lg font-bold uppercase text-sky-500">Kategori</h4>
                <h2 class="mb-2 max-w-md text-2xl font-bold text-slate-900 lg:text-3xl">
                    Pilihan Kategori
                </h2>
                <p class="lg:text-md max-w-6xl text-base font-medium text-slate-500">
                    Selamat datang di halaman kategori. Pada halaman ini anda dapat membaca catatan
                    dari Naufal Akbar Nugroho berdasarkan kategori.
                </p>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <div class="grid grid-cols-2 text-center md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3">
                    @foreach ($posts as $post)
                        <a href="/tags/{{ $post->slug }}" class="-ml-2 text-sm font-semibold uppercase">
                            <div
                                class="mt-2 mb-2 mr-5 flex flex-wrap items-center justify-center rounded-lg border-2 border-sky-500 p-2 text-slate-500 hover:bg-sky-500 hover:text-white">
                                {{-- <Tag text={t} /> --}}
                                <h3 class="-ml-2 text-xs">{{ $post->name }}</h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
