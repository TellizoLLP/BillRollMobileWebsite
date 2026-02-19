<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How It Works - BillRoll</title>
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
                    <a href="/features" class="text-gray-600 hover:text-indigo-600 font-medium transition">Features</a>
                    <a href="/how-it-works" class="text-indigo-600 font-medium transition">How it Works</a>
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
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
            <div class="px-4 pt-2 pb-4 space-y-1">
                <a href="/features" class="block py-2 text-gray-600 hover:text-indigo-600 font-medium">Features</a>
                <a href="/how-it-works" class="block py-2 text-indigo-600 font-medium">How it Works</a>
                <a href="/pricing" class="block py-2 text-gray-600 hover:text-indigo-600 font-medium">Pricing</a>
                <a href="/#faq" class="block py-2 text-gray-600 hover:text-indigo-600 font-medium">FAQ</a>
                <a href="/pricing" class="block mt-4 px-5 py-3 text-center rounded-lg bg-indigo-600 text-white font-semibold">Get Started</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Title Header -->
        <section class="pt-32 pb-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">Start Billing in <span class="text-indigo-600">3 Simple Steps</span></h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    No complex setup. No training required. BillRoll is designed to be intuitive from the moment you sign up.
                </p>
            </div>
        </section>

        <!-- Step 1: Add a Product -->
        <section class="py-20 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row items-center gap-16">
                    <div class="md:w-1/2 relative">
                        <div class="absolute -top-10 -left-10 w-40 h-40 bg-indigo-100 rounded-full blur-3xl opacity-60"></div>
                        <div class="relative z-10 bg-white p-8 rounded-2xl shadow-xl border border-gray-100 transform -rotate-2 hover:rotate-0 transition duration-500">
                             <!-- Visual representation of adding product -->
                             <div class="flex items-center space-x-4 mb-6 border-b border-gray-100 pb-4">
                                <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center text-indigo-600">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="h-2 w-24 bg-gray-200 rounded mb-1"></div>
                                    <div class="h-2 w-16 bg-gray-100 rounded"></div>
                                </div>
                             </div>
                             <div class="space-y-3">
                                <div class="h-10 bg-gray-50 rounded border border-gray-200 w-full"></div>
                                <div class="h-10 bg-gray-50 rounded border border-gray-200 w-full"></div>
                                <div class="flex justify-end">
                                    <div class="h-8 w-20 bg-indigo-600 rounded"></div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <span class="text-indigo-600 font-bold tracking-wider uppercase text-sm mb-2 block">Step 1</span>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Add your Products or Services</h2>
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            Start by populating your inventory. Whether you sell physical goods or hours of service, simply add the name, price, and optional description.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Categorize items for easy access</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Set tax rates per item automatically</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Connecting Line -->
        <div class="hidden md:block w-px h-24 bg-gray-200 mx-auto"></div>

        <!-- Step 2: Go to POS -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row-reverse items-center gap-16">
                    <div class="md:w-1/2 relative">
                         <div class="absolute -top-10 -right-10 w-40 h-40 bg-purple-100 rounded-full blur-3xl opacity-60"></div>
                         <div class="relative z-10 bg-white p-8 rounded-2xl shadow-xl border border-gray-100 transform rotate-2 hover:rotate-0 transition duration-500">
                            <!-- Visual representation of POS Grid -->
                            <div class="grid grid-cols-2 gap-3">
                                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                                    <div class="w-8 h-8 bg-indigo-100 rounded-full mx-auto mb-2"></div>
                                    <div class="h-2 w-12 bg-gray-200 rounded mx-auto"></div>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg text-center">
                                    <div class="w-8 h-8 bg-gray-200 rounded-full mx-auto mb-2"></div>
                                    <div class="h-2 w-12 bg-gray-200 rounded mx-auto"></div>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg text-center">
                                    <div class="w-8 h-8 bg-gray-200 rounded-full mx-auto mb-2"></div>
                                    <div class="h-2 w-12 bg-gray-200 rounded mx-auto"></div>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg text-center">
                                    <div class="w-8 h-8 bg-gray-200 rounded-full mx-auto mb-2"></div>
                                    <div class="h-2 w-12 bg-gray-200 rounded mx-auto"></div>
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="md:w-1/2">
                        <span class="text-indigo-600 font-bold tracking-wider uppercase text-sm mb-2 block">Step 2</span>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Open the Mobile POS</h2>
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            Tap "POS" in your navigation bar. Your products are instantly arranged in a touch-friendly grid, ready for fast selection.
                        </p>
                        <p class="text-gray-500 italic">
                            "The interface is so clean, I was able to train my new staff member in 5 minutes."
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Connecting Line -->
        <div class="hidden md:block w-px h-24 bg-gray-200 mx-auto"></div>

        <!-- Step 3: Start Billing -->
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row items-center gap-16">
                    <div class="md:w-1/2 relative">
                         <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-green-100 rounded-full blur-3xl opacity-60"></div>
                         <div class="relative z-10 bg-gray-900 p-8 rounded-2xl shadow-2xl transform -rotate-1 hover:rotate-0 transition duration-500 text-white">
                            <!-- Visual representation of Invoice -->
                            <div class="flex justify-between items-center mb-6 border-b border-gray-700 pb-4">
                                <span class="font-bold">INVOICE #1024</span>
                                <span class="text-green-400 font-mono">$1,250.00</span>
                            </div>
                            <div class="space-y-4 mb-6">
                                <div class="flex justify-between text-sm text-gray-400">
                                    <span>Web Design Service</span>
                                    <span>$800.00</span>
                                </div>
                                <div class="flex justify-between text-sm text-gray-400">
                                    <span>Hosting (1 Year)</span>
                                    <span>$450.00</span>
                                </div>
                            </div>
                            <button class="w-full bg-indigo-600 py-3 rounded text-white font-semibold">Send Invoice</button>
                         </div>
                    </div>
                    <div class="md:w-1/2">
                        <span class="text-indigo-600 font-bold tracking-wider uppercase text-sm mb-2 block">Step 3</span>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Tap to Bill & Send</h2>
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            Tap items to add them to the cart. Review the total, apply any discounts, and hit generate. You can print via Bluetooth or send a PDF link instantly via WhatsApp or Email.
                        </p>
                        <div class="bg-indigo-50 p-4 rounded-lg border border-indigo-100">
                            <p class="text-indigo-800 font-medium text-sm">
                                🚀 Pro Tip: Save customer details to auto-fill invoices next time!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-24 bg-gray-900 relative overflow-hidden">
             <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
             <div class="absolute bottom-0 left-0 w-64 h-64 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
             
             <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
                 <h2 class="text-3xl md:text-5xl font-bold text-white mb-8">Ready to streamline your sales?</h2>
                 <p class="text-xl text-gray-400 mb-10">Join thousands of business owners who save 10+ hours a week with BillRoll.</p>
                 <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/pricing" class="px-8 py-4 rounded-full bg-white text-gray-900 font-bold text-lg hover:bg-gray-100 transition">
                        Get Started for Free
                    </a>
                 </div>
             </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 border-t border-gray-800">
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
