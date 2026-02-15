<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Your Bag | Nahecididi</title>
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
        .luxury-button {
            @apply transition-all duration-300 active:scale-[0.98];
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 200, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="marble-bg min-h-screen">
<header class="border-b border-primary/10 bg-white/90 backdrop-blur-md sticky top-0 z-50">
<div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
<div class="flex items-center space-x-12">
<a class="text-2xl font-bold tracking-[0.3em] text-charcoal uppercase" href="#">Nahecididi</a>
<nav class="hidden lg:flex space-x-8 text-[11px] font-semibold tracking-[0.2em]">
<a class="hover:text-primary transition-colors" href="#">NEW ARRIVALS</a>
<a class="hover:text-primary transition-colors" href="#">COLLECTIONS</a>
<a class="hover:text-primary transition-colors" href="#">HIGH JEWELRY</a>
<a class="hover:text-primary transition-colors" href="#">THE MAISON</a>
</nav>
</div>
<div class="flex items-center space-x-6">
<button class="hover:text-primary transition-colors"><span class="material-symbols-outlined">search</span></button>
<button class="hover:text-primary transition-colors"><span class="material-symbols-outlined">favorite</span></button>
<button class="hover:text-primary transition-colors flex items-center">
<span class="material-symbols-outlined">shopping_bag</span>
<span class="ml-1 text-[10px] tracking-tighter font-bold">(1)</span>
</button>
</div>
</div>
</header>
<main class="max-w-7xl mx-auto px-6 py-16">
<h1 class="text-3xl font-light tracking-widest text-charcoal mb-12 uppercase text-center lg:text-left">Shopping Bag</h1>
<div class="flex flex-col lg:flex-row gap-16">
<div class="w-full lg:w-[65%]">
<div class="border-b border-gray-100 pb-4 mb-8 hidden lg:flex text-[10px] uppercase tracking-[0.2em] text-gray-400">
<div class="w-1/2 text-left">Product</div>
<div class="w-1/4 text-center">Quantity</div>
<div class="w-1/4 text-right">Total</div>
</div>
<div class="flex flex-col lg:flex-row items-start lg:items-center py-8 border-b border-gray-100 gap-6 lg:gap-0">
<div class="flex items-center w-full lg:w-1/2">
<div class="w-32 h-32 bg-marble-accent rounded overflow-hidden flex-shrink-0">
<img alt="Astra Diamond Choker" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn1QKCpcE1NfKR3dvvYcclozLO29QRZET5ecKCwtAmHzr9O48is6LpVuFlm2SqfN_JjHpUIKIbD8twZkhZeBeMkzgLj25f0zDE7qV570kPD-3ZJrs0u0v5jUQNsI9f2dCp04ewGVu-zCM9nedwdA2pcgO2SZuALukoomA_IIDQWHnkVllCEGPolFpu__O-YBEWlrOyJ3rXTye831gGhNsCUQiJVTLtlD4v0spkMbUbb2ztajVYZ7Ea6bzMv72Zdb8QWqDla3EMmqo"/>
</div>
<div class="ml-6 flex flex-col">
<span class="text-[10px] uppercase tracking-widest text-primary font-bold mb-1">Celestial Light</span>
<h2 class="text-lg font-light text-charcoal mb-2">Astra Diamond Choker</h2>
<div class="flex items-center space-x-3">
<span class="bg-primary/10 text-primary text-[9px] font-bold px-2 py-0.5 rounded-sm uppercase tracking-tighter border border-primary/20">Boutique Pickup</span>
</div>
<button class="text-[10px] text-gray-400 hover:text-charcoal uppercase tracking-widest mt-4 flex items-center">
<span class="material-symbols-outlined text-xs mr-1">close</span> Remove
                            </button>
</div>
</div>
<div class="w-full lg:w-1/4 flex justify-center items-center">
<div class="flex items-center border border-gray-200">
<button class="px-3 py-1 text-gray-400 hover:text-charcoal">-</button>
<span class="px-4 py-1 text-xs font-medium">1</span>
<button class="px-3 py-1 text-gray-400 hover:text-charcoal">+</button>
</div>
</div>
<div class="w-full lg:w-1/4 text-left lg:text-right">
<p class="text-lg font-light text-charcoal">$32,400</p>
</div>
</div>
<div class="mt-8">
<a class="flex items-center text-[11px] uppercase tracking-[0.2em] text-gray-400 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-sm mr-2">arrow_back</span>
                        Continue Shopping
                    </a>
</div>
</div>
<div class="w-full lg:w-[35%]">
<div class="bg-white p-8 border border-gray-100 shadow-sm sticky top-32">
<h3 class="text-xs font-bold uppercase tracking-widest text-charcoal mb-8 border-b border-gray-50 pb-4">Order Summary</h3>
<div class="space-y-4 mb-8">
<div class="flex justify-between text-sm">
<span class="text-gray-500">Subtotal</span>
<span class="text-charcoal font-medium">$32,400</span>
</div>
<div class="flex justify-between text-sm">
<span class="text-gray-500">Luxury Tax</span>
<span class="text-charcoal font-medium">$2,592</span>
</div>
<div class="flex justify-between text-sm">
<span class="text-gray-500">Shipping</span>
<span class="text-primary font-medium">Complimentary</span>
</div>
<div class="pt-6 border-t border-gray-50 flex justify-between items-end">
<span class="text-xs font-bold uppercase tracking-widest">Estimated Total</span>
<span class="text-2xl font-light text-charcoal leading-none">$34,992</span>
</div>
</div>
<div class="bg-primary/5 p-4 rounded-sm mb-8 border border-primary/10">
<div class="flex items-start">
<span class="material-symbols-outlined text-primary text-xl mr-3">celebration</span>
<div>
<p class="text-[10px] font-bold uppercase tracking-widest text-charcoal mb-1">Complimentary Boutique Experience</p>
<p class="text-[10px] text-gray-500 leading-relaxed italic">Includes champagne reception, professional fitting, and a master artisan presentation.</p>
</div>
</div>
</div>
<div class="space-y-3">
<button class="luxury-button w-full bg-charcoal text-white py-5 text-xs font-bold tracking-[0.2em] uppercase hover:bg-black">
                            PROCEED TO CHECKOUT
                        </button>
<button class="luxury-button w-full bg-primary text-white py-5 text-xs font-bold tracking-[0.2em] uppercase hover:bg-primary-dark">
                            SCHEDULE PICKUP NOW
                        </button>
</div>
<div class="mt-8 flex flex-col items-center space-y-4 pt-8 border-t border-gray-50">
<p class="text-[10px] uppercase tracking-widest text-gray-400 flex items-center">
<span class="material-symbols-outlined text-xs mr-2">verified_user</span>
                            Secure &amp; Encrypted Checkout
                        </p>
<div class="flex space-x-4 opacity-30 grayscale">
<span class="material-icons text-xl">credit_card</span>
<span class="material-icons text-xl">payments</span>
<span class="material-icons text-xl">account_balance</span>
</div>
</div>
</div>
</div>
</div>
</main>
<footer class="mt-24 bg-white border-t border-primary/10 pt-16 pb-8">
<div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
<div class="space-y-6">
<h2 class="text-xl font-bold tracking-[0.3em] text-charcoal uppercase">Nahecididi</h2>
<p class="text-xs text-gray-500 leading-relaxed italic">Crafting timeless elegance and bespoke luxury since 1924. Every piece is a testament to the pursuit of perfection.</p>
<div class="flex space-x-4">
<a class="text-charcoal hover:text-primary transition-colors" href="#"><span class="material-icons text-xl">facebook</span></a>
<a class="text-charcoal hover:text-primary transition-colors" href="#"><span class="material-icons text-xl">camera_alt</span></a>
<a class="text-charcoal hover:text-primary transition-colors" href="#"><span class="material-icons text-xl">alternate_email</span></a>
</div>
</div>
<div>
<h4 class="text-[11px] font-bold uppercase tracking-widest mb-6">Services</h4>
<ul class="space-y-4 text-xs text-gray-500 uppercase tracking-widest">
<li><a class="hover:text-primary transition-colors" href="#">Book an Appointment</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Jewelry Care</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Complimentary Shipping</a></li>
</ul>
</div>
<div>
<h4 class="text-[11px] font-bold uppercase tracking-widest mb-6">Company</h4>
<ul class="space-y-4 text-xs text-gray-500 uppercase tracking-widest">
<li><a class="hover:text-primary transition-colors" href="#">Our Heritage</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Sustainability</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Store Locator</a></li>
</ul>
</div>
<div>
<h4 class="text-[11px] font-bold uppercase tracking-widest mb-6">Newsletter</h4>
<p class="text-xs text-gray-500 mb-6 italic">Join the world of Nahecididi for exclusive previews.</p>
<div class="flex border-b border-charcoal py-2">
<input class="bg-transparent border-none p-0 text-xs w-full focus:ring-0 outline-none placeholder:text-gray-300" placeholder="EMAIL ADDRESS" type="email"/>
<button class="text-charcoal text-[10px] font-bold uppercase tracking-widest hover:text-primary transition-colors">Join</button>
</div>
</div>
</div>
<div class="max-w-7xl mx-auto px-6 pt-8 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 text-[9px] text-gray-400 uppercase tracking-[0.2em]">
<p>© 2024 Nahecididi Fine Jewelry. All Rights Reserved.</p>
<div class="flex space-x-8">
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-primary transition-colors" href="#">Terms</a>
<a class="hover:text-primary transition-colors" href="#">Accessibility</a>
</div>
</div>
</footer>

</body></html>