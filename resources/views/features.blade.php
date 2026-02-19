<x-layouts.app title="Features - BillRoll">
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
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative rounded-3xl border-gray-800 bg-gray-800 border-[14px] w-[300px] h-[600px] shadow-xl">
                        <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                        <div class="h-[64px] w-[3px] bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                        <div class="rounded-[2rem] overflow-hidden w-full h-full bg-white dark:bg-gray-800">
                            <img src="{{ asset('assets/img/invoice.jpeg') }}" class="w-full h-full object-cover" alt="Instant Invoicing App Screenshot">
                        </div>
                    </div>
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
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative rounded-3xl border-gray-800 bg-gray-800 border-[14px] w-[300px] h-[600px] shadow-xl">
                        <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                        <div class="h-[64px] w-[3px] bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                        <div class="rounded-[2rem] overflow-hidden w-full h-full bg-white dark:bg-gray-800">
                             <img src="{{ asset('assets/img/expense.jpeg') }}" class="w-full h-full object-cover" alt="Expense Tracking App Screenshot">
                        </div>
                    </div>
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
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative rounded-3xl border-gray-800 bg-gray-800 border-[14px] w-[300px] h-[600px] shadow-xl">
                        <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                        <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                        <div class="h-[64px] w-[3px] bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                        <div class="rounded-[2rem] overflow-hidden w-full h-full bg-white dark:bg-gray-800">
                            <img src="{{ asset('assets/img/finance.jpeg') }}" class="w-full h-full object-cover" alt="Financial Insights App Screenshot">
                        </div>
                    </div>
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
                <a href="/pricing" class="px-8 py-3 bg-white text-indigo-600 font-bold rounded-full shadow-lg hover:bg-gray-100 transition">Install Now</a>
            </div>
        </div>
    </section>
</x-layouts.app>