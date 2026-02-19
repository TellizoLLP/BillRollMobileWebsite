<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pricing - BillRoll</title>
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
                    <a href="/pricing" class="text-indigo-600 font-medium transition">Pricing</a>
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
                <a href="/pricing" class="block py-2 text-indigo-600 font-medium">Pricing</a>
                <a href="/#faq" class="block py-2 text-gray-600 hover:text-indigo-600 font-medium">FAQ</a>
                <a href="/pricing" class="block mt-4 px-5 py-3 text-center rounded-lg bg-indigo-600 text-white font-semibold">Get Started</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Pricing Hero -->
        <section class="pt-32 pb-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">
                    Simple, transparent <span class="text-indigo-600">pricing</span>
                </h1>
                <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">
                    Choose the plan that's right for your business. No hidden fees. Cancel anytime.
                </p>

                <!-- Pricing Toggle (Monthly/Yearly) - Visual only for now -->
                <div class="mt-12 flex justify-center items-center space-x-4">
                    <span class="text-gray-900 font-medium">Monthly</span>
                    <button class="relative rounded-full w-14 h-8 bg-indigo-600 focus:outline-none">
                        <span class="absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition-transform transform translate-x-6"></span>
                    </button>
                    <span class="text-gray-500 font-medium">Yearly <span class="text-green-500 text-sm font-bold ml-1">(Save 20%)</span></span>
                </div>
            </div>
        </section>

        <!-- Pricing Cards -->
        <section class="py-20 -mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <!-- Starter Plan -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:border-indigo-300 transition relative shadow-sm hover:shadow-md">
                        <h3 class="text-lg font-semibold text-gray-900 text-center uppercase tracking-wide">Starter</h3>
                        <div class="mt-4 text-center">
                            <span class="text-4xl font-extrabold text-gray-900">$0</span>
                            <span class="text-gray-500">/mo</span>
                        </div>
                        <p class="mt-4 text-gray-500 text-center text-sm">Forever free for individuals</p>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                3 Invoices per month
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Basic Expense Tracking
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Email Support
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="#" class="block w-full py-3 px-6 text-center rounded-lg border border-indigo-600 text-indigo-600 font-semibold hover:bg-indigo-50 transition">Get Started</a>
                        </div>
                    </div>

                    <!-- Pro Plan (Highlights) -->
                    <div class="bg-white border-2 border-indigo-600 rounded-2xl p-8 relative shadow-xl transform md:-translate-y-4 z-10">
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-indigo-600 text-white px-4 py-1 rounded-full text-sm font-bold shadow-md">
                            Most Popular
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 text-center uppercase tracking-wide">Pro</h3>
                        <div class="mt-4 text-center">
                            <span class="text-4xl font-extrabold text-gray-900">$19</span>
                            <span class="text-gray-500">/mo</span>
                        </div>
                        <p class="mt-4 text-gray-500 text-center text-sm">For growing businesses</p>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Unlimited Invoices
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Advanced Reports
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Priority Support
                            </li>
                             <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Custom Branding
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="#" class="block w-full py-3 px-6 text-center rounded-lg bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition shadow-lg">Start Free Trial</a>
                        </div>
                    </div>

                    <!-- Enterprise Plan -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:border-indigo-300 transition relative shadow-sm hover:shadow-md">
                        <h3 class="text-lg font-semibold text-gray-900 text-center uppercase tracking-wide">Enterprise</h3>
                        <div class="mt-4 text-center">
                            <span class="text-4xl font-extrabold text-gray-900">$49</span>
                            <span class="text-gray-500">/mo</span>
                        </div>
                        <p class="mt-4 text-gray-500 text-center text-sm">For large teams</p>
                        <ul class="mt-8 space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Everything in Pro
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Team Collaboration
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Dedicated Account Manager
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="/contact-us" class="block w-full py-3 px-6 text-center rounded-lg border border-indigo-600 text-indigo-600 font-semibold hover:bg-indigo-50 transition">Contact Sales</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section for Pricing Context -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-extrabold text-gray-900">Payment FAQ</h2>
                </div>
                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-medium text-gray-900">What payment methods do you accept?</h3>
                        <p class="mt-2 text-gray-600">We accept major credit cards (Visa, Mastercard, Amex) and PayPal.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-medium text-gray-900">Is there a refund policy?</h3>
                        <p class="mt-2 text-gray-600">We offer a 14-day money-back guarantee if you're not satisfied with our service.</p>
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