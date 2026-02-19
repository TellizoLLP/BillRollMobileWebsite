<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - BillRoll</title>
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
        <!-- Contact Hero Split -->
        <section class="min-h-screen flex items-center pt-20">
            <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24">
                    
                    <!-- Left Column: Context -->
                    <div class="flex flex-col justify-center py-12 lg:py-20">
                        <span class="text-indigo-600 font-semibold tracking-wider uppercase text-sm mb-4">Contact Us</span>
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Let's start a conversation.</h1>
                        <p class="text-xl text-gray-500 mb-10 leading-relaxed">
                            Have questions about pricing, features, or enterprise solutions? We're here to help you get the most out of BillRoll.
                        </p>

                        <div class="space-y-8">
                            <!-- Contact Detail 1 -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-indigo-50 text-indigo-600">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-900">Email us</h3>
                                    <p class="mt-1 text-gray-500">
                                        <a href="mailto:support@billroll.com" class="hover:text-indigo-600 transition">support@billroll.com</a>
                                    </p>
                                    <p class="text-gray-400 text-sm mt-1">Typical response time: Within 2 hours</p>
                                </div>
                            </div>

                            <!-- Contact Detail 2 -->
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-indigo-50 text-indigo-600">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-900">Visit us</h3>
                                    <p class="mt-1 text-gray-500">
                                        123 Innovation Drive<br>
                                        Suite 400<br>
                                        San Francisco, CA 94107
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Form -->
                    <div class="py-12 lg:py-20 bg-gray-50 rounded-3xl p-8 lg:p-12 self-center">
                        <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Full name</label>
                                <div class="mt-1">
                                    <input type="text" name="name" id="name" autocomplete="name" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-xl bg-white" placeholder="John Doe">
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <div class="mt-1">
                                    <input type="email" name="email" id="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-xl bg-white" placeholder="you@example.com">
                                </div>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <div class="mt-1">
                                    <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-xl bg-white" placeholder="How can we help you?"></textarea>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="w-full inline-flex justify-center py-4 px-6 border border-transparent shadow-sm text-base font-medium rounded-xl text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                    Send Message
                                </button>
                            </div>
                        </form>
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
                        <li><a href="/about-us" class="hover:text-indigo-400 transition">About Us</a></li>
                        <li><a href="/privacy-policy" class="hover:text-indigo-400 transition">Privacy Policy</a></li>
                        <li><a href="/terms-and-conditions" class="hover:text-indigo-400 transition">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-gray-200">Support</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/contact-us" class="hover:text-indigo-400 transition text-indigo-400">Contact Us</a></li>
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
