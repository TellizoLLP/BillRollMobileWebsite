<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Features - BillRoll</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-white">

    <!-- Navbar -->
    <header class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-2xl font-bold text-indigo-600">BillRoll</a>
                </div>
                
                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8">
                    <a href="/features" class="text-indigo-600 font-medium transition">Features</a>
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
                <a href="/features" class="block py-2 text-indigo-600 font-medium">Features</a>
                <a href="/how-it-works" class="block py-2 text-gray-600 hover:text-indigo-600 font-medium">How it Works</a>
                <a href="/pricing" class="block py-2 text-gray-600 hover:text-indigo-600 font-medium">Pricing</a>
                <a href="/#faq" class="block py-2 text-gray-600 hover:text-indigo-600 font-medium">FAQ</a>
                <a href="/pricing" class="block mt-4 px-5 py-3 text-center rounded-lg bg-indigo-600 text-white font-semibold">Get Started</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Features Hero -->
        <section class="pt-32 pb-12 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">
                    Powerful Features for <span class="text-indigo-600">Growth</span>
                </h1>
                <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">
                    Explore the tools that will help you manage your billing effortlessly.
                </p>
            </div>
        </section>


        <!-- Detailed Features -->
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
                
                <!-- Feature 1 -->
                <div class="flex flex-col md:flex-row items-center gap-10">
                    <div class="md:w-1/2">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6 text-indigo-600">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Instant Invoicing</h2>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Create and send professional invoices in seconds. Our intuitive editor allows you to customize every detail, from line items to tax rates. Set up recurring invoices for regular clients and never miss a payment cycle.
                        </p>
                    </div>
                    <div class="md:w-1/2 bg-gray-100 rounded-2xl h-64 md:h-80 flex items-center justify-center border border-gray-200">
                        <span class="text-gray-400">Invoicing Dashboard Preview</span>
                    </div>
                </div>

                <!-- Feature 2 (Reverse Layout) -->
                <div class="flex flex-col md:flex-row-reverse items-center gap-10">
                    <div class="md:w-1/2">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6 text-indigo-600">
                             <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Expense Tracking</h2>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Keep your business finances in check. Snap photos of receipts, categorize expenses, and link them to projects or clients. BillRoll automatically calculates your profit margins so you always know where you stand.
                        </p>
                    </div>
                    <div class="md:w-1/2 bg-gray-100 rounded-2xl h-64 md:h-80 flex items-center justify-center border border-gray-200">
                        <span class="text-gray-400">Expense Tracking UI Preview</span>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="flex flex-col md:flex-row items-center gap-10">
                    <div class="md:w-1/2">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6 text-indigo-600">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Financial Insights</h2>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Visual reports that make sense. Track overdue invoices, monitor monthly revenue, and identify your top clients. Export data to your favorite accounting software with a single click.
                        </p>
                    </div>
                    <div class="md:w-1/2 bg-gray-100 rounded-2xl h-64 md:h-80 flex items-center justify-center border border-gray-200">
                        <span class="text-gray-400">Analytics Graph Preview</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-indigo-600">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Ready to streamline your billing?</h2>
                <p class="mt-4 text-indigo-100 text-lg">Join thousands of freelancers who trust BillRoll.</p>
                <div class="mt-8">
                    <a href="/pricing" class="px-8 py-3 bg-white text-indigo-600 font-bold rounded-full shadow-lg hover:bg-gray-100 transition">View Pricing</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-1">
                    <span class="text-2xl font-bold text-indigo-400">BillRoll</span>
                    <p class="mt-4 text-gray-400">Making billing simple for freelancers and small businesses.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-gray-200">Product</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/features" class="hover:text-indigo-400 transition">Features</a></li>
                        <li><a href="/pricing" class="hover:text-indigo-400 transition">Pricing</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-gray-200">Company</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/about-us" class="hover:text-indigo-400 transition">About Us</a></li>
                        <li><a href="/privacy-policy" class="hover:text-indigo-400 transition">Privacy Policy</a></li>
                        <li><a href="/terms-and-conditions" class="hover:text-indigo-400 transition">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-gray-200">Support</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/contact-us" class="hover:text-indigo-400 transition">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 flex justify-between items-center">
                <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} BillRoll Inc.</p>
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>