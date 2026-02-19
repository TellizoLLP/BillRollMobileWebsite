<x-layouts.app title="Pricing - BillRoll">
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
</x-layouts.app>