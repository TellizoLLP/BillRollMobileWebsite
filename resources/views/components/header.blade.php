<header class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="text-2xl font-bold text-indigo-600">BillRoll</a>
            </div>
            
            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8">
                <a href="/features" class="text-gray-600 hover:text-indigo-600 font-medium transition">Features</a>
                <a href="/how-it-works" class="text-gray-600 hover:text-indigo-600 font-medium transition">How it Works</a>
                <a href="/pricing" class="text-gray-600 hover:text-indigo-600 font-medium transition">Pricing</a>
                <a href="/#faq" class="text-gray-600 hover:text-indigo-600 font-medium transition">FAQ</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center">
                <a href="/pricing" class="px-5 py-2.5 rounded-full bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition shadow-md hover:shadow-lg">
                    Get Started
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-gray-600 hover:text-indigo-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu (Hidden by default) -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
        <div class="px-4 pt-2 pb-4 space-y-1">
            <a href="/features" class="block py-2 text-gray-600 hover:text-indigo-600 font-medium">Features</a>
            <a href="/how-it-works" class="block py-2 text-gray-600 hover:text-indigo-600 font-medium">How it Works</a>
            <a href="/pricing" class="block py-2 text-gray-600 hover:text-indigo-600 font-medium">Pricing</a>
            <a href="/#faq" class="block py-2 text-gray-600 hover:text-indigo-600 font-medium">FAQ</a>
            <a href="/pricing" class="block mt-4 px-5 py-3 text-center rounded-lg bg-indigo-600 text-white font-semibold">Get Started</a>
        </div>
    </div>
</header>