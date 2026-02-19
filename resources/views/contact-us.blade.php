<x-layouts.app title="Contact Us - BillRoll">
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
</x-layouts.app>