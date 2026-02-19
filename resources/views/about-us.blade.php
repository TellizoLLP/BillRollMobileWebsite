<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - BillRoll</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .animate-blob { animation: blob 7s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
    </style>
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

    <main>
        <!-- About Hero Section -->
        <section class="pt-32 pb-20 lg:pt-40 lg:pb-28 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10">
                <div class="absolute -top-20 -right-20 w-96 h-96 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
                <div class="absolute top-40 -left-20 w-72 h-72 bg-indigo-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="max-w-3xl mx-auto text-left lg:text-center">
                    <span class="text-indigo-600 font-semibold tracking-wider uppercase text-sm">About Us</span>
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-gray-900 mt-4 mb-8">
                        Simplifying the business of <span class="relative inline-block text-indigo-600">doing good work.</span>
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed font-light">
                        We believe that getting paid for your hard work shouldn't be the hardest part of your job. BillRoll exists to remove the friction between service and payment.
                    </p>
                </div>
            </div>
        </section>

        <!-- Our Story / Image Grid -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="relative">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-4 pt-12">
                                <div class="w-full h-48 bg-gray-100 rounded-2xl overflow-hidden shadow-lg">
                                    <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300"></div>
                                </div>
                                <div class="w-full h-64 bg-gray-100 rounded-2xl overflow-hidden shadow-lg">
                                    <div class="w-full h-full bg-gradient-to-tr from-indigo-100 to-white"></div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="w-full h-64 bg-gray-100 rounded-2xl overflow-hidden shadow-lg">
                                    <div class="w-full h-full bg-gradient-to-bl from-purple-100 to-white"></div>
                                </div>
                                <div class="w-full h-48 bg-gray-100 rounded-2xl overflow-hidden shadow-lg">
                                    <div class="w-full h-full bg-gradient-to-tl from-gray-200 to-gray-300"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
                        <div class="prose prose-lg text-gray-500">
                            <p class="mb-4">
                                Started in 2024, BillRoll began with a simple observation: mobile invoicing apps were either too complicated or too expensive for the solo freelancer.
                            </p>
                            <p class="mb-4">
                                Our founders, Isaac and Sarah, were running a design agency and found themselves spending Friday nights wrestling with spreadsheets instead of enjoying the weekend. They built the first version of BillRoll to solve their own problem.
                            </p>
                            <p>
                                Today, we serve thousands of freelancers, contractors, and small business owners who just want to send a bill and get back to what they love.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">What Drives Us</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <!-- Value 1 -->
                    <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-md transition duration-300 border border-gray-100">
                        <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center mb-6 text-indigo-600">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Simplicity First</h3>
                        <p class="text-gray-500 leading-relaxed">
                            We fight against feature bloat. If it doesn't help you get paid faster, it doesn't belong in our app.
                        </p>
                    </div>

                    <!-- Value 2 -->
                    <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-md transition duration-300 border border-gray-100">
                        <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center mb-6 text-purple-600">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Security & Trust</h3>
                        <p class="text-gray-500 leading-relaxed">
                            Your financial data is sacred. We maintain bank-level security standards and total transparency.
                        </p>
                    </div>

                    <!-- Value 3 -->
                    <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-md transition duration-300 border border-gray-100">
                        <div class="w-12 h-12 bg-pink-50 rounded-xl flex items-center justify-center mb-6 text-pink-600">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Customer Love</h3>
                        <p class="text-gray-500 leading-relaxed">
                            We're not just software providers; we're partners in your success. Our support is human and helpful.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-20 bg-indigo-900 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-indigo-800/50">
                    <div class="p-4">
                        <div class="text-4xl md:text-5xl font-bold mb-2">10k+</div>
                        <div class="text-indigo-200 text-sm uppercase tracking-widest">Active Users</div>
                    </div>
                    <div class="p-4">
                        <div class="text-4xl md:text-5xl font-bold mb-2">$50M</div>
                        <div class="text-indigo-200 text-sm uppercase tracking-widest">Invoices Processed</div>
                    </div>
                    <div class="p-4">
                        <div class="text-4xl md:text-5xl font-bold mb-2">135+</div>
                        <div class="text-indigo-200 text-sm uppercase tracking-widest">Countries Supported</div>
                    </div>
                    <div class="p-4">
                        <div class="text-4xl md:text-5xl font-bold mb-2">4.9</div>
                        <div class="text-indigo-200 text-sm uppercase tracking-widest">App Store Rating</div>
                    </div>
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
                    <p class="mt-4 text-gray-400">Making billing simple for freelancers and small businesses everywhere.</p>
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
                        <li><a href="/about-us" class="hover:text-indigo-400 transition text-indigo-400">About Us</a></li>
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
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} BillRoll Inc. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-indigo-400 transition"><span class="sr-only">Twitter</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg></a>
                    <a href="#" class="text-gray-400 hover:text-indigo-400 transition"><span class="sr-only">GitHub</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Simple mobile menu toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
