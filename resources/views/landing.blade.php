<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BillRoll - Mobile Billing Simplifed</title>
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
                    <a href="#faq" class="text-gray-600 hover:text-indigo-600 font-medium transition">FAQ</a>
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
                <a href="#faq" class="block py-2 text-gray-600 hover:text-indigo-600 font-medium">FAQ</a>
                <a href="/pricing" class="block mt-4 px-5 py-3 text-center rounded-lg bg-indigo-600 text-white font-semibold">Get Started</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-gray-900 mb-6">
                        Invoicing for the <span class="text-indigo-600">modern mobile business</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                        Create, send, and track professional invoices directly from your phone. BillRoll helps freelancers and small businesses get paid faster.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="/pricing" class="px-8 py-4 rounded-full bg-indigo-600 text-white font-bold text-lg hover:bg-indigo-700 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            Start Free Trial
                        </a>
                        <a href="/features" class="px-8 py-4 rounded-full bg-white text-gray-700 border border-gray-200 font-bold text-lg hover:bg-gray-50 transition">
                            Learn More
                        </a>
                    </div>
                </div>
                
                <!-- Mockup / Visual -->
                <div class="mt-16 relative mx-auto max-w-4xl">
                    <div class="bg-gray-100 rounded-2xl shadow-2xl border border-gray-200 aspect-[16/9] flex items-center justify-center overflow-hidden z-10 relative bg-white/50 backdrop-blur-sm">
                        <div class="text-gray-400 text-lg font-medium">App Dashboard Mockup Placeholder</div>
                    </div>
                     <!-- Decorative blobs -->
                    <div class="absolute -top-12 -left-12 w-64 h-64 bg-purple-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
                    <div class="absolute -top-12 -right-12 w-64 h-64 bg-indigo-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
                    <div class="absolute -bottom-8 left-20 w-64 h-64 bg-pink-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
                </div>
            </div>
        </section>

        <!-- Problem - Agitate - Solution Section -->
        <section class="py-24 bg-white relative overflow-hidden">
            <!-- Decorative background element -->
            <div class="absolute top-0 left-1/2 w-full -translate-x-1/2 h-full bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-gray-50 via-white to-white z-0"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-3xl mx-auto text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 leading-tight">
                        Still writing bills in <span class="relative inline-block">
                            notebooks?
                            <svg class="absolute -bottom-2 w-full h-3 text-red-400 opacity-60" viewBox="0 0 100 10" preserveAspectRatio="none">
                                <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="3" fill="none" />
                            </svg>
                        </span>
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Pain Point 1 -->
                    <div class="group p-8 rounded-2xl bg-gray-50 hover:bg-white border border-transparent hover:border-gray-100 hover:shadow-xl transition duration-300">
                        <div class="text-gray-300 group-hover:text-red-400 transition-colors duration-300 mb-4">
                            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Manual Mistakes</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Calculation errors are costing you money every single day.</p>
                    </div>

                    <!-- Pain Point 2 -->
                    <div class="group p-8 rounded-2xl bg-gray-50 hover:bg-white border border-transparent hover:border-gray-100 hover:shadow-xl transition duration-300">
                        <div class="text-gray-300 group-hover:text-red-400 transition-colors duration-300 mb-4">
                            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 12H4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">No Stock Tracking</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Running out of items without knowing when to reorder.</p>
                    </div>

                    <!-- Pain Point 3 -->
                    <div class="group p-8 rounded-2xl bg-gray-50 hover:bg-white border border-transparent hover:border-gray-100 hover:shadow-xl transition duration-300">
                         <div class="text-gray-300 group-hover:text-red-400 transition-colors duration-300 mb-4">
                            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">No Sales Reports</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Flying blind on your business performance and growth.</p>
                    </div>

                    <!-- Pain Point 4 -->
                    <div class="group p-8 rounded-2xl bg-gray-50 hover:bg-white border border-transparent hover:border-gray-100 hover:shadow-xl transition duration-300">
                         <div class="text-gray-300 group-hover:text-red-400 transition-colors duration-300 mb-4">
                            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">GST Confusion</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Struggling to keep up with complex tax compliance.</p>
                    </div>
                </div>

                <div class="mt-20 text-center">
                    <p class="text-lg text-gray-500 mb-6 font-medium">It doesn't have to be this hard.</p>
                    <div class="inline-block relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                        <div class="relative bg-white ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                            <div class="space-y-2 p-8 text-center">
                                <h3 class="text-2xl md:text-3xl font-bold text-gray-900">Switch to smart mobile billing in <span class="text-indigo-600">2 minutes</span>.</h3>
                                <div class="pt-6">
                                    <a href="/pricing" class="text-indigo-600 font-semibold hover:text-indigo-800 transition flex items-center justify-center gap-2 group-hover:gap-3">
                                        Get Started Free <span aria-hidden="true">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section (Modern Minimalist Design) -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 tracking-tight sm:text-4xl">Why BillRoll?</h2>
                    <p class="mt-4 text-xl text-gray-500">Designed for the future of work.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Benefit 1: Big Typography -->
                    <div class="col-span-1 md:col-span-2 bg-gray-50 rounded-3xl p-10 hover:bg-gray-100 transition duration-300 group">
                        <div class="h-full flex flex-col justify-between">
                            <div>
                                <h3 class="text-4xl font-extrabold text-gray-900 mb-4 group-hover:text-indigo-600 transition">Get Paid 2x Faster.</h3>
                                <p class="text-lg text-gray-600 max-w-md">Stop chasing clients. Automated reminders and instant payment links mean money in your account sooner.</p>
                            </div>
                            <div class="mt-8 flex items-end justify-end">
                                <span class="text-9xl font-black text-gray-200 group-hover:text-indigo-100 transition select-none">2x</span>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 2: Minimalist Card -->
                    <div class="bg-black text-white rounded-3xl p-10 flex flex-col justify-between hover:scale-[1.02] transition duration-300">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mb-6 backdrop-blur-sm">
                            <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2">Secure by Default</h3>
                            <p class="text-gray-400">Bank-level encryption keeps your financial data safe.</p>
                        </div>
                    </div>

                    <!-- Benefit 3: Visual / Image Based (abstract representation) -->
                    <div class="bg-indigo-600 rounded-3xl p-10 text-white flex flex-col justify-between overflow-hidden relative group">
                        <div class="absolute right-0 top-0 w-32 h-32 bg-white/10 rounded-bl-full transition-transform group-hover:scale-150 duration-500"></div>
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold mb-2">Work Anywhere</h3>
                            <p class="text-indigo-100">Syncs across all your devices instantly.</p>
                        </div>
                        <div class="mt-8 relative z-10">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 bg-white rounded-full animate-bounce"></div>
                                <div class="w-3 h-3 bg-white rounded-full animate-bounce delay-100"></div>
                                <div class="w-3 h-3 bg-white rounded-full animate-bounce delay-200"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 4: Clean Typography -->
                    <div class="col-span-1 md:col-span-2 bg-gray-50 rounded-3xl p-10 hover:bg-gray-100 transition duration-300 flex items-center">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Professional formatting, zero effort.</h3>
                            <p class="text-gray-600">Your invoices are a reflection of your brand. We make sure you look good every time using smart templates that adjust to your content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Teaser Section -->
        <section class="py-24 bg-white">
            <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-gray-900 rounded-3xl p-8 md:p-16 overflow-hidden relative">
                    <!-- Abstract geometric decoration -->
                    <div class="absolute top-0 right-0 -mt-10 -mr-10 w-64 h-64 bg-gray-800 rounded-full opacity-50 blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-64 h-64 bg-indigo-900 rounded-full opacity-50 blur-3xl"></div>

                    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-4xl md:text-5xl font-bold text-white tracking-tight mb-6">
                                Start for <span class="text-indigo-400">$0</span>.
                            </h2>
                            <p class="text-xl text-gray-400 max-w-md">
                                No credit card needed. Upgrade only when you have more than 3 clients. Simple as that.
                            </p>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-6 lg:justify-end">
                            <div class="text-center sm:text-left">
                                <span class="block text-3xl font-bold text-white mb-1">Free</span>
                                <span class="text-gray-500 text-sm">For individuals</span>
                            </div>
                            <div class="hidden sm:block w-px h-12 bg-gray-700"></div>
                             <div class="text-center sm:text-left">
                                <span class="block text-3xl font-bold text-white mb-1">$15</span>
                                <span class="text-gray-500 text-sm">For teams</span>
                            </div>
                            
                            <a href="/pricing" class="mt-6 sm:mt-0 sm:ml-8 inline-flex items-center justify-center px-8 py-4 rounded-full bg-white text-gray-900 font-bold hover:bg-gray-100 transition duration-300">
                                View Full Pricing
                                <svg class="w-5 h-5 ml-2 -mr-1 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section id="faq" class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24">
                    <!-- Section Header (Sticky on desktop) -->
                    <div class="lg:col-span-4 self-start lg:sticky lg:top-32">
                        <span class="text-indigo-600 font-semibold tracking-wider uppercase text-sm">Support</span>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mt-2 mb-6">FAQs</h2>
                        <p class="text-gray-500 text-lg">
                            Everything you need to know about BillRoll. Can't find the answer you're looking for? <a href="/contact-us" class="text-indigo-600 underline hover:text-indigo-800">Chat to our team.</a>
                        </p>
                    </div>

                    <!-- FAQ Items -->
                    <div class="lg:col-span-8 space-y-1">
                        <!-- FAQ Item 1 -->
                        <div class="border-b border-gray-200">
                            <button class="faq-btn w-full py-8 text-left focus:outline-none flex justify-between items-start group">
                                <span class="text-xl font-medium text-gray-900 group-hover:text-indigo-600 transition-colors pr-8">Can I customize my invoice design?</span>
                                <span class="relative flex-shrink-0 ml-4 h-6 w-6 text-gray-400 group-hover:text-indigo-600 transition">
                                    <svg class="w-6 h-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </span>
                            </button>
                            <div class="faq-content hidden pb-8 text-gray-600 text-lg leading-relaxed">
                                <p>Yes! Our improved editor allows you to add your logo, choose from 5 professional templates, customize colors to match your brand, and even add custom terms and conditions footer text.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="border-b border-gray-200">
                            <button class="faq-btn w-full py-8 text-left focus:outline-none flex justify-between items-start group">
                                <span class="text-xl font-medium text-gray-900 group-hover:text-indigo-600 transition-colors pr-8">How secure is my financial data?</span>
                                <span class="relative flex-shrink-0 ml-4 h-6 w-6 text-gray-400 group-hover:text-indigo-600 transition">
                                    <svg class="w-6 h-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </span>
                            </button>
                            <div class="faq-content hidden pb-8 text-gray-600 text-lg leading-relaxed">
                                <p>Security is our top priority. We use 256-bit SSL encryption (the same level as banks) to protect your data. We never store credit card details directly; all payments are processed through Stripe.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="border-b border-gray-200">
                            <button class="faq-btn w-full py-8 text-left focus:outline-none flex justify-between items-start group">
                                <span class="text-xl font-medium text-gray-900 group-hover:text-indigo-600 transition-colors pr-8">Can I cancel my subscription anytime?</span>
                                <span class="relative flex-shrink-0 ml-4 h-6 w-6 text-gray-400 group-hover:text-indigo-600 transition">
                                    <svg class="w-6 h-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </span>
                            </button>
                            <div class="faq-content hidden pb-8 text-gray-600 text-lg leading-relaxed">
                                 <p>Absolutely. There are no lock-in contracts. You can downgrade to the free plan or cancel your account entirely at any time from your dashboard settings.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="border-b border-gray-200">
                            <button class="faq-btn w-full py-8 text-left focus:outline-none flex justify-between items-start group">
                                <span class="text-xl font-medium text-gray-900 group-hover:text-indigo-600 transition-colors pr-8">Do you support multiple currencies?</span>
                                <span class="relative flex-shrink-0 ml-4 h-6 w-6 text-gray-400 group-hover:text-indigo-600 transition">
                                    <svg class="w-6 h-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </span>
                            </button>
                            <div class="faq-content hidden pb-8 text-gray-600 text-lg leading-relaxed">
                                 <p>Yes, BillRoll supports over 135 currencies. You can set a default currency for your account and also specify different currencies for individual clients if needed.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="border-b border-gray-200">
                            <button class="faq-btn w-full py-8 text-left focus:outline-none flex justify-between items-start group">
                                <span class="text-xl font-medium text-gray-900 group-hover:text-indigo-600 transition-colors pr-8">Is there a mobile app?</span>
                                <span class="relative flex-shrink-0 ml-4 h-6 w-6 text-gray-400 group-hover:text-indigo-600 transition">
                                    <svg class="w-6 h-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </span>
                            </button>
                            <div class="faq-content hidden pb-8 text-gray-600 text-lg leading-relaxed">
                                 <p>Our web platform is fully responsive and works perfectly on mobile browsers. We are currently developing native apps for iOS and Android which will be released in Q4.</p>
                            </div>
                        </div>
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

        // FAQ Accordion
        const faqBtns = document.querySelectorAll('.faq-btn');

        faqBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const content = btn.nextElementSibling;
                const icon = btn.querySelector('svg');
                
                // Toggle current
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');

                // Optional: Close others
                faqBtns.forEach(otherBtn => {
                    if (otherBtn !== btn) {
                        otherBtn.nextElementSibling.classList.add('hidden');
                        otherBtn.querySelector('svg').classList.remove('rotate-180');
                    }
                });
            });
        });
    </script>
</body>
</html>