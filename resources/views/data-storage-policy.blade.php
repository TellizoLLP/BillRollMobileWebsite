<x-layouts.app title="Data & Storage Policy - BillRoll">
    <div class="pt-32 pb-20 lg:pt-40 lg:pb-28">
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
    </div>
</x-layouts.app>
