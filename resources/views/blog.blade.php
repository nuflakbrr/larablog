{{-- LOAD DATA --}}
{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <div class="py-10">
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
                                Saya senang membuat catatan tentang apa yang saya lakukan. Cerita saya sebagai seorang
                                siswa,
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
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                </div>

                @if ($posts->count())
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
                                                            <a href="/blog/{{ $post->slug }}">
                                                                <h3
                                                                    class="text-xl font-bold leading-7 tracking-tight text-white hover:text-sky-500">
                                                                    {{ $post->title }}
                                                                </h3>
                                                            </a>
                                                        </div>
                                                        {{-- Title End --}}

                                                        {{-- Date & Tag --}}
                                                        <div class="mb-2 flex flex-wrap">
                                                            <div class="mt-1 mr-4 flex items-center text-sm text-slate-600">
                                                                <span class="mr-1.5 text-sky-500">
                                                                    <svg role="img" width="16"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" fill="currentColor">
                                                                        <path
                                                                            d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z" />
                                                                    </svg>
                                                                </span>
                                                                <time dateTime={{ $post->published_at }}
                                                                    class="text-zinc-50">
                                                                    {{ date('d F Y', strtotime($post->published_at)) }}
                                                                </time>
                                                            </div>
                                                            <div class="mt-1 flex items-center text-sm text-slate-600">
                                                                <span class="mr-1.5 text-teal-500">
                                                                    <svg role="img" width="16"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" fill="currentColor">
                                                                        <path
                                                                            d="M48 32H197.5C214.5 32 230.7 38.74 242.7 50.75L418.7 226.7C443.7 251.7 443.7 292.3 418.7 317.3L285.3 450.7C260.3 475.7 219.7 475.7 194.7 450.7L18.75 274.7C6.743 262.7 0 246.5 0 229.5V80C0 53.49 21.49 32 48 32L48 32zM112 176C129.7 176 144 161.7 144 144C144 126.3 129.7 112 112 112C94.33 112 80 126.3 80 144C80 161.7 94.33 176 112 176z" />
                                                                    </svg>
                                                                </span>
                                                                <a href="/tags/{{ $post->category->slug }}"
                                                                    class="mr-3 text-sm font-medium capitalize text-white hover:text-sky-500">{{ $post->category->name }}</a>
                                                            </div>
                                                            {{-- Date & Tag End --}}

                                                            {{-- Summary --}}
                                                            <div class="prose max-w-none leading-5 text-gray-400">
                                                                {{ $post->excerpt }}
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
                @else
                    <ul>
                        <li class="py-4">
                            <div class="container">
                                <div class="grid grid-cols-2 gap-3 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4">
                                    <div class="col-span-4">
                                        <div class="h-full w-full rounded bg-slate-800">
                                            <div class="px-4 py-5">
                                                <h1 class="flex justify-center items-center mx-auto text-center text-white">
                                                    Maaf, halaman
                                                    ini belum memiliki postingan 😓</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                @endif
            </div>
            {{-- Blog Card End --}}
        </div>
    </div>
@endsection
