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
                    <a href="/snippets"
                        class="text-base hover:text-white {{ $path === '/snippets' ? 'text-white' : 'text-gray-400' }}">Cuplikan</a>
                    <a href="/project"
                        class="text-base hover:text-white {{ $path === '/project' ? 'text-white' : 'text-gray-400' }}">Portofolio</a>
                    <a href="/about"
                        class="text-base hover:text-white {{ $path === '/about' ? 'text-white' : 'text-gray-400' }}">Tentang</a>
                </div>

                {{-- mobile navbar --}}
                <div class="mobile-navbar">
                    {{-- navbar wrapper --}}
                    <div class="fixed left-0 w-full h-48 p-4 bg-white rounded-lg shadow-xl top-16 z-20" x-show="isOpen"
                        @click.away=" isOpen = false">
                        <div class="flex flex-col">
                            <a href="/blog"
                                class="py-2 text-base hover:text-gray-500 {{ $path === '/blog' ? 'text-black' : 'text-gray-500' }}">Catatan</a>
                            <a href="/snippets"
                                class="py-2 text-base hover:text-gray-500 {{ $path === '/snippets' ? 'text-black' : 'text-gray-500' }}">Cuplikan</a>
                            <a href="/project"
                                class="py-2 text-base hover:text-gray-500 {{ $path === '/project' ? 'text-black' : 'text-gray-500' }}">Portofolio</a>
                            <a href="/about"
                                class="py-2 text-base hover:text-gray-500 {{ $path === '/about' ? 'text-black' : 'text-gray-500' }}">Tentang</a>
                        </div>
                    </div>
                </div>
                {{-- end mobile navbar --}}
            </div>
        </div>
    </div>
</nav>
