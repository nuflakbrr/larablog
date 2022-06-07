<nav>
    <div class="bg-gray-900 fixed z-20 w-full">
        <div x-data="{ isOpen: false }" class="max-w-7xl mx-auto flex justify-between px-4 py-6">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-white">LaraBlog</a>
            </div>

            {{-- left header section --}}
            <div class="flex items-center justify-between">
                <button @click="isOpen = !isOpen" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <div class="hidden space-x-6 lg:inline-block">
                    <a href="/blog"
                        class="text-base hover:text-white {{ $path === '/blog' ? 'text-white' : 'text-gray-400' }}">Catatan</a>
                    <a href="/tags"
                        class="text-base hover:text-white {{ $path === '/tags' ? 'text-white' : 'text-gray-400' }}">Kategori</a>
                    <a href="/project"
                        class="text-base hover:text-white {{ $path === '/project' ? 'text-white' : 'text-gray-400' }}">Portofolio</a>
                    <a href="/about"
                        class="text-base hover:text-white {{ $path === '/about' ? 'text-white' : 'text-gray-400' }}">Tentang</a>
                </div>

                @auth
                    <div x-data="{ dropdownOpen: false }" class="relative ml-2">
                        <button @click="dropdownOpen = !dropdownOpen"
                            class="relative z-10 block bg-gray-800 rounded p-2 hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10">
                        </div>

                        <div x-show="dropdownOpen"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-20">
                            <div>
                                <div class="flex px-4 py-2 text-sm text-gray-800 border-b hover:bg-gray-200">
                                    <span class="mr-2">
                                        <svg role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </span>
                                    |
                                    <p class="ml-2">Halo, {{ auth()->user()->name }}</p>
                                </div>
                            </div>
                            <a href="/admin/dashboard">
                                <div class="flex px-4 py-2 text-sm text-gray-800 border-b hover:bg-gray-200">
                                    <span class="mr-2">
                                        <svg role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                    </span>
                                    |
                                    <p class="ml-2">Dashboard</p>
                                </div>
                            </a>
                            <form action="/admin/logout" method="post">
                                @csrf
                                <div class="flex px-4 py-2 text-sm text-gray-800 border-b hover:bg-gray-200">
                                    <span class="mr-2">
                                        <svg role="img" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                    </span>
                                    |
                                    <button type="submit" class="ml-2">Logout</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endauth

                {{-- mobile navbar --}}
                <div class="mobile-navbar">
                    {{-- navbar wrapper --}}
                    <div class="fixed left-0 w-full h-48 p-4 bg-white rounded-lg shadow-xl top-16 z-20" x-show="isOpen"
                        @click.away=" isOpen = false">
                        <div class="flex flex-col">
                            <a href="/blog"
                                class="py-2 text-base hover:text-gray-500 {{ $path === '/blog' ? 'text-black' : 'text-gray-400' }}">Catatan</a>
                            <a href="/tags"
                                class="py-2 text-base hover:text-gray-500 {{ $path === '/tags' ? 'text-black' : 'text-gray-400' }}">Kategori</a>
                            <a href="/project"
                                class="py-2 text-base hover:text-gray-500 {{ $path === '/project' ? 'text-black' : 'text-gray-400' }}">Portofolio</a>
                            <a href="/about"
                                class="py-2 text-base hover:text-gray-500 {{ $path === '/about' ? 'text-black' : 'text-gray-400' }}">Tentang</a>
                        </div>
                    </div>
                </div>
                {{-- end mobile navbar --}}
            </div>
        </div>
    </div>
</nav>
