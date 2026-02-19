<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-white">
        <!-- Background Elements -->
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <div class="absolute -top-[30%] -right-[10%] w-[70rem] h-[70rem] rounded-full bg-indigo-50/50 blur-3xl"></div>
            <div class="absolute top-[20%] -left-[10%] w-[50rem] h-[50rem] rounded-full bg-purple-50/50 blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-5xl mx-auto">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-50 text-indigo-600 font-medium text-sm mb-8 hover:bg-indigo-100 transition-colors cursor-default">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                    </span>
                    New Offline Mode 
                </div>
                
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold tracking-tight text-gray-900 mb-8 leading-[1.05]">
                    Invoice faster.<br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Get paid sooner.</span>
                </h1>
                
                <p class="text-xl md:text-2xl text-gray-600 mb-10 leading-relaxed max-w-2xl mx-auto">
                    The professional mobile billing app that works completely offline. Zero friction, zero complex setup.
                </p>
                
                <div class="flex flex-col sm:flex-row justify-center gap-4 items-center">
                    <a href="/pricing" class="group relative w-full sm:w-auto px-8 py-4 rounded-full bg-gray-900 text-white font-semibold text-lg hover:bg-gray-800 transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                        Install Now
                        <span class="absolute inset-x-0 -bottom-px block h-px w-full bg-gradient-to-r from-indigo-500/0 via-indigo-500/70 to-indigo-500/0 opacity-0 transition-opacity group-hover:opacity-100"></span>
                    </a>
                    <a href="/how-it-works" class="w-full sm:w-auto px-8 py-4 rounded-full bg-white text-gray-700 font-semibold text-lg border border-gray-200 hover:bg-gray-50 hover:border-gray-300 transition-all duration-200">
                        How it works
                    </a>
                </div>
                
                <div class="mt-8 flex items-center justify-center gap-x-8 gap-y-4 flex-wrap text-sm text-gray-500">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>100% Offline – No Internet Required</span>
                    </div>
                    <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Your Data Stays on Your Device</span>
                    </div>
                    <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Fast & Simple Billing</span>
                    </div>
                </div>
            </div>
            
            <!-- Mockup / Visual -->
            <div class="mt-20 relative mx-auto max-w-7xl px-4 flex justify-center items-center gap-4 sm:gap-10 perspective-[2000px] overflow-visible h-[650px]">
                 <!-- Glow effect -->
                 <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 h-[300px] bg-[#c1e3ec] blur-[100px] rounded-full"></div>

                 <!-- Left Phone Image -->
                 <div class="hidden sm:block relative z-10 w-[280px] h-[580px] rounded-[2.5rem] shadow-2xl opacity-80 transform -rotate-6 scale-95 transition-transform duration-500 hover:rotate-0 hover:scale-[0.98] border-[6px] border-gray-900 bg-gray-900 overflow-hidden flex-shrink-0">
                    <img src="{{ asset('assets/img/pos.jpeg') }}" alt="App Screen 1" class="w-full h-full object-cover">
                 </div>

                 <!-- Center Phone Image -->
                 <div class="relative z-20 w-[300px] h-[620px] rounded-[2.5rem] shadow-2xl ring-1 ring-white/20 transform transition-transform duration-300 hover:scale-[1.02] border-[8px] border-gray-900 bg-gray-900 overflow-hidden flex-shrink-0">
                    <img src="{{ asset('assets/img/dashboard.jpeg') }}" alt="App Main Screen" class="w-full h-full object-cover">
                 </div>

                 <!-- Right Phone Image -->
                 <div class="hidden sm:block relative z-10 w-[280px] h-[580px] rounded-[2.5rem] shadow-2xl opacity-80 transform rotate-6 scale-95 transition-transform duration-500 hover:rotate-0 hover:scale-[0.98] border-[6px] border-gray-900 bg-gray-900 overflow-hidden flex-shrink-0">
                    <img src="{{ asset('assets/img/more.jpeg') }}" alt="App Screen 3" class="w-full h-full object-cover">
                 </div>
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
                                <a href="/contact-us" class="text-indigo-600 font-semibold hover:text-indigo-800 transition flex items-center justify-center gap-2 group-hover:gap-3">
                                    Install Now<span aria-hidden="true">&rarr;</span>
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
                            <h3 class="text-4xl font-extrabold text-gray-900 mb-4 group-hover:text-indigo-600 transition">100% Offline Capable.</h3>
                            <p class="text-lg text-gray-600 max-w-md">No signal? No problem. Create invoices, manage clients, and track payments without an internet connection. Sync when you're back online.</p>
                        </div>
                        <div class="mt-8 flex items-end justify-end">
                            <span class="text-9xl font-black text-gray-200 group-hover:text-indigo-100 transition select-none">OFF</span>
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
                        <h3 class="text-2xl font-bold mb-2">Data Privacy First</h3>
                        <p class="text-gray-400">Your data stays on your device until you decide to back it up.</p>
                    </div>
                </div>

                <!-- Benefit 3: Visual / Image Based (abstract representation) -->
                <div class="bg-indigo-600 rounded-3xl p-10 text-white flex flex-col justify-between overflow-hidden relative group">
                    <div class="absolute right-0 top-0 w-32 h-32 bg-white/10 rounded-bl-full transition-transform group-hover:scale-150 duration-500"></div>
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-2">Lightning Fast</h3>
                        <p class="text-indigo-100">Zero loading times. The app runs directly on your phone's processor.</p>
                    </div>
                    <div class="mt-8 relative z-10">
                        <div class="flex space-x-2">
                            <svg class="w-8 h-8 text-white animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Benefit 4: Clean Typography -->
                <div class="col-span-1 md:col-span-2 bg-gray-50 rounded-3xl p-10 hover:bg-gray-100 transition duration-300 flex items-center">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Professional formatting, zero effort.</h3>
                        <p class="text-gray-600">Your invoices are a reflection of your brand. We make sure you look good every time using smart templates that come pre-loaded in the app.</p>
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

                    <!-- FAQ Iten 2 -->
                    <div class="border-b border-gray-200">
                        <button class="faq-btn w-full py-8 text-left focus:outline-none flex justify-between items-start group">
                            <span class="text-xl font-medium text-gray-900 group-hover:text-indigo-600 transition-colors pr-8">Where is my data stored?</span>
                            <span class="relative flex-shrink-0 ml-4 h-6 w-6 text-gray-400 group-hover:text-indigo-600 transition">
                                <svg class="w-6 h-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </span>
                        </button>
                        <div class="faq-content hidden pb-8 text-gray-600 text-lg leading-relaxed">
                            <p>Your data lives on your device first. This ensures maximum privacy and instant loading times. We offer secure, optional cloud backups so you can restore your data if you switch phones or reinstall the app.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="border-b border-gray-200">
                        <button class="faq-btn w-full py-8 text-left focus:outline-none flex justify-between items-start group">
                            <span class="text-xl font-medium text-gray-900 group-hover:text-indigo-600 transition-colors pr-8">Do I need an internet connection?</span>
                            <span class="relative flex-shrink-0 ml-4 h-6 w-6 text-gray-400 group-hover:text-indigo-600 transition">
                                <svg class="w-6 h-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </span>
                        </button>
                        <div class="faq-content hidden pb-8 text-gray-600 text-lg leading-relaxed">
                                <p>No. BillRoll is built to be 100% offline-capable. You can generate invoices, manage inventory, and record payments in remote areas without signal. The app effectively functions as a digital notebook that fits in your pocket.</p>
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
                            <span class="text-xl font-medium text-gray-900 group-hover:text-indigo-600 transition-colors pr-8">How do I send the invoices?</span>
                            <span class="relative flex-shrink-0 ml-4 h-6 w-6 text-gray-400 group-hover:text-indigo-600 transition">
                                <svg class="w-6 h-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </span>
                        </button>
                        <div class="faq-content hidden pb-8 text-gray-600 text-lg leading-relaxed">
                                <p>Once you're back online, you can share invoices via WhatsApp, Email, or SMS directly from the app. You can also generate PDFs offline to print via a Bluetooth printer or save for later.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>