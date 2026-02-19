<footer class="bg-slate-50 border-t border-slate-200 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-8 lg:gap-12 mb-12">
            <!-- Brand Column -->
            <div class="lg:col-span-2">
                <a href="/" class="flex items-center gap-2 mb-4 group">
                    <div
                        class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center text-white font-bold text-lg">
                        B</div>
                    <span class="text-xl font-bold text-slate-900 tracking-tight">BillRoll</span>
                </a>
                <p class="text-slate-500 mb-6 max-w-sm leading-relaxed text-sm">
                    Making billing simple and professional for freelancers and small businesses everywhere. Streamline
                    your finances today.
                </p>
                <div class="flex space-x-4">
                    <a href="#"
                        class="flex items-center justify-center transition-all duration-300 hover:bg-slate-100 p-2 rounded-lg">
                        <span class="sr-only">Google Play</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 256 283">
                            <path fill="#ea4335"
                                d="M119.553 134.916L1.06 259.061a32.14 32.14 0 0 0 47.062 19.071l133.327-75.934z" />
                            <path fill="#fbbc04"
                                d="M239.37 113.814L181.715 80.79l-64.898 56.95l65.162 64.28l57.216-32.67a31.345 31.345 0 0 0 0-55.537z" />
                            <path fill="#4285f4"
                                d="M1.06 23.487A30.6 30.6 0 0 0 0 31.61v219.327a32.3 32.3 0 0 0 1.06 8.124l122.555-120.966z" />
                            <path fill="#34a853"
                                d="m120.436 141.274l61.278-60.483L48.564 4.503A32.85 32.85 0 0 0 32.051 0C17.644-.028 4.978 9.534 1.06 23.399z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Links Column 1 -->
            <div>
                <h4 class="font-bold text-slate-900 mb-4 text-sm uppercase tracking-wider">Product</h4>
                <ul class="space-y-3">
                    <li><a href="/features"
                            class="text-slate-500 hover:text-indigo-600 transition-colors text-sm">Features</a></li>
                    <li><a href="/how-it-works"
                            class="text-slate-500 hover:text-indigo-600 transition-colors text-sm">How it Works</a></li>
                </ul>
            </div>

            <!-- Links Column 2 -->
            <div>
                <h4 class="font-bold text-slate-900 mb-4 text-sm uppercase tracking-wider">Company</h4>
                <ul class="space-y-3">
                    <li><a href="/about-us" class="text-slate-500 hover:text-indigo-600 transition-colors text-sm">About
                            Us</a></li>
                </ul>
            </div>

            <!-- Links Column 3 -->
            <div>
                <h4 class="font-bold text-slate-900 mb-4 text-sm uppercase tracking-wider">Support</h4>
                <ul class="space-y-3">
                    <li><a href="/contact-us"
                            class="text-slate-500 hover:text-indigo-600 transition-colors text-sm">Contact Us</a></li>
                </ul>
            </div>

            <!-- Links Column 4 (Legal) -->
            <div>
                <h4 class="font-bold text-slate-900 mb-4 text-sm uppercase tracking-wider">Legal</h4>
                <ul class="space-y-3">
                    <li><a href="/privacy-policy"
                            class="text-slate-500 hover:text-indigo-600 transition-colors text-sm">Privacy Policy</a>
                    </li>
                    <li><a href="/terms-and-conditions"
                            class="text-slate-500 hover:text-indigo-600 transition-colors text-sm">Terms &
                            Conditions</a></li>
                    <li><a href="/data-storage-policy"
                            class="text-slate-500 hover:text-indigo-600 transition-colors text-sm">Data Policy</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-slate-200 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-slate-400 text-xs">&copy; {{ date('Y') }} BillRoll Inc. All rights reserved.</p>
            <div class="flex space-x-6">
                <span class="flex items-center gap-2 text-slate-400 text-xs font-medium">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Systems Operational
                </span>
            </div>
        </div>
    </div>
</footer>
