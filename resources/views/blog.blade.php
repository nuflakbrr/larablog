{{-- LOAD DATA --}}
{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <div class="grid grid-cols-8 gap-6 md:py-10 lg:py-10 xl:py-0">
        <div class="col-span-8 md:col-span-8 lg:col-span-8 xl:col-span-2">
            {{-- Card --}}
            <div class="sticky top-20">
                <div class="rounded-xl bg-slate-100">
                    <div class="w-full px-4 py-5">
                        <h4 class="mb-1 text-lg font-bold uppercase text-sky-500">
                            Catatan
                        </h4>
                        <h2 class="mb-1 max-w-md text-xl font-bold capitalize text-slate-900 lg:text-xl">
                            Pilihan Catatan
                        </h2>
                        <p class="max-w-6xl text-base font-medium text-slate-500 lg:text-sm">
                            Saya senang membuat catatan tentang apa yang saya lakukan. Cerita saya sebagai seorang siswa,
                            seorang Frontend Developer, dan masih banyak hal lainnya.
                        </p>
                    </div>
                </div>
            </div>
            {{-- Card End --}}
        </div>
        {{-- Blog Card --}}
        <div class="col-span-8 md:col-span-8 lg:col-span-8 xl:col-span-6">
            {{-- Search Input --}}
            <div class="flex items-center">
                <input aria-label="Cari Artikel" type="text" placeholder="Cari Artikel"
                    class="block w-full rounded-l-md border px-4 py-2 focus:border-sky-500 focus:ring-sky-500 border-gray-900 bg-gray-800 text-gray-100" />
                <span class="rounded-r-md border-t border-r border-b px-4 py-2.5 border-gray-900 bg-slate-700">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </span>
            </div>

            <ul>
                <li class="py-4">
                    <article class="container">
                        <div class="grid grid-cols-2 gap-3 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4">
                            @foreach ($posts as $post)
                                <div class="col-span-2">
                                    <div class="h-full w-full rounded bg-slate-800">
                                        <article class="px-4 py-5">
                                            <div>
                                                {{-- Title --}}
                                                <div class="mb-2">
                                                    <a href="/blog/{{ $post['slug'] }}">
                                                        <h3
                                                            class="text-xl font-bold leading-7 tracking-tight text-white hover:text-sky-500">
                                                            {{ $post['title'] }}
                                                        </h3>
                                                    </a>
                                                </div>
                                                {{-- Title End --}}

                                                {{-- Date & Tag --}}
                                                <div class="mb-2 flex flex-wrap">
                                                    <div class="mt-1 mr-4 flex items-center text-sm text-slate-600">
                                                        <span class="mr-1.5 text-sky-500">
                                                            <svg role="img" width="16" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 512 512" fill="currentColor">
                                                                <path
                                                                    d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z" />
                                                            </svg>
                                                        </span>
                                                        <time dateTime={{ $post['date'] }} class="text-zinc-50">
                                                            {{ $post['date'] }}
                                                        </time>
                                                    </div>
                                                    {{-- Date & Tag End --}}

                                                    {{-- Summary --}}
                                                    <div class="prose max-w-none leading-5 text-gray-400">
                                                        {{ $post['body'] }}
                                                    </div>
                                                    {{-- Summary End --}}
                                                </div>
                                        </article>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </article>
                </li>
            </ul>
        </div>
        {{-- Blog Card End --}}
    </div>

    {{-- <div class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/420x260">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/421x261">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                        <p class="mt-1">$21.15</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/422x262">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                        <p class="mt-1">$12.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/423x263">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                        <p class="mt-1">$18.40</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/424x264">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/425x265">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                        <p class="mt-1">$21.15</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/427x267">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                        <p class="mt-1">$12.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/428x268">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                        <p class="mt-1">$18.40</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
