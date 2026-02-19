<x-layouts.app title="About Us - BillRoll">
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
                            Founded in 2020, Tellizo IT Solutions was built with a mission to create simple, practical software solutions for modern businesses.
                        </p>
                        <p class="mb-4">
                           BillRoll was developed after recognizing that many mobile invoicing apps were either too complicated or too expensive for solo freelancers and small business owners. The goal was simple: make billing fast, clear, and stress-free.
                        </p>
                        <p>
                            Today, BillRoll helps freelancers, contractors, and small business owners create invoices effortlessly so they can focus on growing their business instead of managing paperwork.
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
</x-layouts.app>
