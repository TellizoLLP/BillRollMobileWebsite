<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data & Storage Policy - BillRoll</title>
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

    <main class="pt-32 pb-20 lg:pt-40 lg:pb-28">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-8">Data & Storage Policy</h1>
            
            <div class="prose prose-lg text-gray-600 max-w-none">
                <p>Last updated: {{ date('F d, Y') }}</p>
                
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Introduction</h2>
                    <p>BillRoll is designed to be a completely offline-first application. We respect your privacy and data sovereignty. Unlike many other apps, BillRoll does not require you to create an account, does not connect to a central server to store your data, and does not collect any personal information about you or your clients.</p>
                </section>

                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">2. Where Data is Stored</h2>
                    <p>All data you generate within the BillRoll application—including invoices, client details, business settings, and history—is stored <strong>locally on your Android device</strong>. We do not have access to your data, and it never leaves your device unless you explicitly choose to share it (e.g., emailing an invoice PDF).</p>
                </section>

                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">3. How to Delete Data</h2>
                    <p>Since your data is stored locally, you have full control over its deletion. To clear all data associated with the BillRoll app:</p>
                    <ol class="list-decimal pl-6 space-y-2 mt-4">
                        <li>Go to your Android device <strong>Settings</strong>.</li>
                        <li>Tap on <strong>Apps</strong> or <strong>Application Manager</strong>.</li>
                        <li>Find and select <strong>BillRoll</strong>.</li>
                        <li>Tap on <strong>Storage</strong>.</li>
                        <li>Tap <strong>Clear Data</strong> or <strong>Clear Storage</strong>.</li>
                    </ol>
                    <p class="mt-4 text-sm bg-yellow-50 p-4 rounded-lg border border-yellow-200">
                        <span class="font-bold text-yellow-800">Note:</span> This action will remove all invoices, settings, and client information from the app.
                    </p>
                </section>

                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Uninstalling the App</h2>
                    <p>Please be aware that <strong>uninstalling the BillRoll application will also permanently delete all data</strong> associated with it. Because we do not store backups on a server, uninstalling the app wipes the local database from your device storage.</p>
                </section>

                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Data Recovery</h2>
                    <p>Because there is no cloud backup or server-side storage, <strong>deleted data cannot be recovered</strong>. Once you clear the app data or uninstall the application, your information is gone forever. We strongly recommend searching for any exported PDF invoices if you need to retrieve past billing information.</p>
                </section>

                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Third-Party Sharing</h2>
                    <p>We do not share, sell, or rent your data to any third parties. Your business data stays on your phone. The only time data "leaves" the app is when you perform an action to share it yourself, such as sending a generated invoice PDF via email or another messaging app.</p>
                </section>
            </div>
        </div>
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
                        <li><a href="/data-storage-policy" class="hover:text-indigo-400 transition text-indigo-400">Data Policy</a></li>
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
            </div>
        </div>
    </footer>

    <script>
        // Simple mobile menu toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        if(btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>
