<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'BillRoll - Mobile Billing Simplifed' }}</title>
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

    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    <script>
        // Simple mobile menu toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }

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