<header x-data="{ mobileMenuOpen: false, scrolled: false }" 
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'bg-white/80 backdrop-blur-md shadow-sm': scrolled, 'bg-transparent': !scrolled }"
    class="fixed w-full z-50 transition-all duration-300 top-0 left-0 border-b border-transparent"
    :class="{ 'border-gray-100/50': scrolled }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center gap-2">
                <a href="/" class="flex items-center gap-2 group">
                    <div class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center text-white font-bold text-lg group-hover:bg-indigo-700 transition">B</div>
                    <span class="text-xl font-bold text-gray-900 tracking-tight group-hover:text-indigo-600 transition">BillRoll</span>
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <nav class="hidden md:flex items-center space-x-1">
                @foreach([
                    ['label' => 'Features', 'url' => 'features'],
                    ['label' => 'How it Works', 'url' => 'how-it-works'],
                    ['label' => 'About Us', 'url' => 'about-us'],
                ] as $item)
                    <a href="/{{ $item['url'] }}" 
                       class="px-4 py-2 rounded-full text-sm font-medium transition-colors {{ request()->is($item['url']) ? 'text-indigo-600 bg-indigo-50' : 'text-gray-600 hover:text-indigo-600 hover:bg-gray-50' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
                <a href="/#faq" class="px-4 py-2 rounded-full text-sm font-medium text-gray-600 hover:text-indigo-600 hover:bg-gray-50 transition-colors">FAQ</a>
            </nav>

            <!-- Actions -->
            <div class="hidden md:flex items-center gap-4">
                <a href="/login" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition">Log in</a>
                <a href="/pricing" class="px-5 py-2.5 rounded-full bg-indigo-600 text-white text-sm font-semibold hover:bg-indigo-700 transition-all shadow-md hover:shadow-lg hover:-translate-y-0.5">
                    Get Started
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-600 hover:text-indigo-600 focus:outline-none p-2 rounded-md hover:bg-gray-50">
                    <span class="sr-only">Open menu</span>
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         @click.away="mobileMenuOpen = false"
         class="md:hidden absolute top-full left-0 w-full bg-white border-b border-gray-100 shadow-lg lg:hidden">
        <div class="px-4 py-6 space-y-4">
            <div class="space-y-1">
                @foreach([
                    ['label' => 'Features', 'url' => 'features'],
                    ['label' => 'How it Works', 'url' => 'how-it-works'],
                    ['label' => 'About Us', 'url' => 'about-us'],
                ] as $item)
                    <a href="/{{ $item['url'] }}" 
                       class="block px-4 py-3 rounded-xl text-base font-medium {{ request()->is($item['url']) ? 'text-indigo-600 bg-indigo-50' : 'text-gray-600 hover:text-indigo-600 hover:bg-gray-50' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
                <a href="/#faq" class="block px-4 py-3 rounded-xl text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-gray-50">FAQ</a>
            </div>
            <div class="pt-4 border-t border-gray-100 grid grid-cols-2 gap-4">
                <a href="/login" class="flex items-center justify-center px-4 py-3 rounded-xl text-base font-medium text-gray-600 hover:text-indigo-600 hover:bg-gray-50 border border-gray-200">
                    Log in
                </a>
                <a href="/pricing" class="flex items-center justify-center px-4 py-3 rounded-xl text-base font-medium bg-indigo-600 text-white hover:bg-indigo-700 shadow-md">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</header>