<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Astra Choker Digital Pass | Nahecididi</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#e8ba30",
                        "primary-dark": "#cfa528",
                        "background-light": "#fcfcfc",
                        "background-dark": "#1a1814",
                        "charcoal": "#1a1a1a",
                        "marble-accent": "#f1f0ee"
                    },
                    fontFamily: {
                        "display": ["Noto Serif", "serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        body {
            font-family: 'Noto Serif', serif;
            @apply bg-background-light text-charcoal;
        }
        .marble-bg {
            background-color: #fcfcfc;
            background-image: radial-gradient(circle at 20% 20%, rgba(232, 186, 48, 0.02) 0%, transparent 50%),
                              radial-gradient(circle at 80% 80%, rgba(232, 186, 48, 0.01) 0%, transparent 50%);
        }
        .luxury-card {
            background: white;
            box-shadow: 0 10px 40px -10px rgba(0,0,0,0.05);
            border: 1px solid rgba(232, 186, 48, 0.1);
        }
        .qr-placeholder {
            background: repeating-conic-gradient(#1a1a1a 0% 25%, white 0% 50%) 50% / 15px 15px;
        }
    </style>
</head>
<body class="marble-bg min-h-screen flex flex-col">
<header class="border-b border-primary/10 bg-white/90 backdrop-blur-md sticky top-0 z-50">
<div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
<div class="flex items-center space-x-12">
<a class="text-2xl font-bold tracking-[0.3em] text-charcoal uppercase" href="#">Nahecididi</a>
</div>
<div class="hidden md:block">
<p class="text-[10px] tracking-[0.3em] uppercase text-gray-400">Order Confirmation</p>
</div>
</div>
</header>
<main class="flex-grow flex items-center justify-center py-16 px-6">
<div class="max-w-4xl w-full">
<div class="text-center mb-12">
<span class="material-symbols-outlined text-primary text-5xl mb-4">check_circle</span>
<?php if (session()->getFlashdata('success_message')): ?>
    <div class="mb-6 text-green-600 text-sm uppercase tracking-widest">
        <?= session()->getFlashdata('success_message'); ?>
    </div>
<?php endif; ?>
<h1 class="text-3xl font-light tracking-tight text-charcoal mb-2">Reservation Confirmed</h1>
<p class="text-gray-500 text-sm tracking-widest uppercase">Order #NH7829-AD</p>
</div>
<div class="luxury-card flex flex-col md:flex-row overflow-hidden">
<div class="w-full md:w-1/2 p-10 border-r border-gray-100">
<div class="mb-8">
<p class="text-[10px] uppercase tracking-[0.4em] text-primary font-bold mb-2">Reserved Item</p>
<h2 class="text-2xl font-light mb-4">Astra Diamond Choker</h2>
<img alt="Astra Diamond Choker" class="w-full aspect-square object-cover rounded shadow-sm mb-6" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn1QKCpcE1NfKR3dvvYcclozLO29QRZET5ecKCwtAmHzr9O48is6LpVuFlm2SqfN_JjHpUIKIbD8twZkhZeBeMkzgLj25f0zDE7qV570kPD-3ZJrs0u0v5jUQNsI9f2dCp04ewGVu-zCM9nedwdA2pcgO2SZuALukoomA_IIDQWHnkVllCEGPolFpu__O-YBEWlrOyJ3rXTye831gGhNsCUQiJVTLtlD4v0spkMbUbb2ztajVYZ7Ea6bzMv72Zdb8QWqDla3EMmqo"/>
<div class="space-y-2 text-xs text-gray-500 uppercase tracking-widest">
<div class="flex justify-between border-b border-gray-50 pb-2">
<span>Boutique</span>
<span class="text-charcoal">Fifth Avenue Flagship</span>
</div>
<div class="flex justify-between border-b border-gray-50 pb-2">
<span>Pickup Time</span>
<span class="text-charcoal">Today, 4:30 PM</span>
</div>
</div>
</div>
<div class="bg-marble-accent p-6 rounded">
<h3 class="text-[10px] font-bold uppercase tracking-[0.2em] mb-4 flex items-center">
<span class="material-symbols-outlined text-sm mr-2">inventory_2</span>
                        What to Bring
                    </h3>
<ul class="space-y-3">
<li class="flex items-start text-[11px] text-gray-600">
<span class="material-symbols-outlined text-primary text-sm mr-2">check</span>
<span>A valid government-issued photo ID</span>
</li>
<li class="flex items-start text-[11px] text-gray-600">
<span class="material-symbols-outlined text-primary text-sm mr-2">check</span>
<span>This digital pass (QR Code)</span>
</li>
<li class="flex items-start text-[11px] text-gray-600">
<span class="material-symbols-outlined text-primary text-sm mr-2">check</span>
<span>The credit card used for reservation</span>
</li>
</ul>
</div>
</div>
<div class="w-full md:w-1/2 p-10 bg-white flex flex-col items-center justify-center text-center">
<div class="mb-8">
<h3 class="text-xs font-bold uppercase tracking-[0.3em] mb-2">Boutique Verification</h3>
<p class="text-[11px] text-gray-400 italic">Present this code to your Personal Jeweler upon arrival</p>
</div>
<div class="relative p-4 border-2 border-primary/20 rounded-xl mb-8">
<div class="w-48 h-48 bg-white p-2">
<div class="w-full h-full qr-placeholder opacity-20"></div>
<div class="absolute inset-0 flex items-center justify-center">
<div class="bg-white p-4">
<span class="material-symbols-outlined text-6xl text-charcoal">qr_code_2</span>
</div>
</div>
</div>
</div>
<div class="space-y-4 w-full">
<button class="w-full bg-charcoal text-white py-4 text-[10px] font-bold tracking-[0.2em] uppercase hover:bg-black transition-all">
                        Add to Apple Wallet
                    </button>
<button class="w-full border border-gray-200 text-charcoal py-4 text-[10px] font-bold tracking-[0.2em] uppercase hover:bg-gray-50 transition-all flex items-center justify-center">
<span class="material-symbols-outlined text-sm mr-2">print</span>
                        Print Receipt
                    </button>
</div>
<p class="mt-8 text-[10px] text-gray-400 uppercase tracking-widest leading-loose">
                    Need assistance?<br/>
                    Contact Concierge at 1-800-NAHE-924
                </p>
</div>
</div>
<div class="mt-12 text-center">
<a href="<?= base_url('collections'); ?>"
   class="text-[11px] text-primary font-bold uppercase tracking-[0.2em] hover:text-primary-dark transition-colors inline-flex items-center">
    <span class="material-symbols-outlined text-sm mr-2">arrow_back</span>
    Return to Collections
</a>
</div>
</div>
</main>
<footer class="bg-white border-t border-primary/10 py-8">
<div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-[9px] text-gray-400 uppercase tracking-[0.2em]">
<p>© 2024 Nahecididi Fine Jewelry. All Rights Reserved.</p>
<div class="flex space-x-8 mt-4 md:mt-0">
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-primary transition-colors" href="#">Terms of Boutique Pickup</a>
</div>
</div>
</footer>

</body></html>