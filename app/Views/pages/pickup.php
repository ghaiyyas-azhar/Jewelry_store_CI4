<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Nahecididi - Boutique Pickup Scheduler</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&amp;family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#c59f59",
                        "background-light": "#f8f7f6",
                        "background-dark": "#1e1a14",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"],
                        "serif": ["Cormorant Garamond", "serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        body {
            font-family: 'Manrope', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        .brand-font {
            font-family: 'Cormorant Garamond', serif;
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-stone-800 dark:text-stone-200 min-h-screen">
<header class="border-b border-stone-200 dark:border-stone-800 bg-white/80 dark:bg-stone-900/80 backdrop-blur-md sticky top-0 z-50">
<div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
<div class="flex items-center gap-2">
<span class="material-icons text-primary text-sm">lock</span>
<span class="text-[10px] uppercase tracking-[0.2em] font-semibold text-stone-500">Secure Checkout</span>
</div>
<div class="brand-font text-3xl font-light tracking-[0.15em] text-stone-900 dark:text-white">
            NAHECIDIDI
        </div>
<div class="flex items-center gap-4">
<a class="text-[10px] text-stone-500 hover:text-primary transition-colors uppercase tracking-[0.2em] font-bold" href="#">Return to Boutique</a>
</div>
</div>
</header>
<main class="max-w-7xl mx-auto px-6 py-12">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
<div class="lg:col-span-7 space-y-12">
<section>
<div class="flex items-baseline gap-4 mb-8">
<span class="text-3xl font-light text-primary brand-font italic">01</span>
<h2 class="text-2xl font-light tracking-tight uppercase brand-font">Schedule Your Nahecididi Visit</h2>
</div>
<div class="bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 rounded-xl p-8 shadow-sm">
<div class="mb-10">
<div class="flex items-center justify-between mb-6">
<h3 class="font-medium text-stone-900 dark:text-white uppercase tracking-wider text-sm">October 2023</h3>
<div class="flex gap-4">
<button class="p-2 hover:bg-stone-100 dark:hover:bg-stone-800 rounded-full text-stone-400"><span class="material-icons text-sm">chevron_left</span></button>
<button class="p-2 hover:bg-stone-100 dark:hover:bg-stone-800 rounded-full text-stone-400"><span class="material-icons text-sm">chevron_right</span></button>
</div>
</div>
<div class="grid grid-cols-7 gap-2 text-center text-[10px] uppercase tracking-widest text-stone-400 mb-4 font-bold">
<div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div><div>Sun</div>
</div>
<div class="grid grid-cols-7 gap-1 text-sm">
<button class="h-12 flex items-center justify-center text-stone-300 cursor-not-allowed">25</button>
<button class="h-12 flex items-center justify-center text-stone-300 cursor-not-allowed">26</button>
<button class="h-12 flex items-center justify-center text-stone-300 cursor-not-allowed">27</button>
<button class="h-12 flex items-center justify-center text-stone-300 cursor-not-allowed">28</button>
<button class="h-12 flex items-center justify-center text-stone-300 cursor-not-allowed">29</button>
<button class="h-12 flex items-center justify-center text-stone-300 cursor-not-allowed">30</button>
<button class="h-12 flex items-center justify-center hover:bg-stone-50 dark:hover:bg-stone-800 border border-transparent">1</button>
<button class="h-12 flex items-center justify-center hover:bg-stone-50 dark:hover:bg-stone-800 border border-transparent">2</button>
<button class="h-12 flex items-center justify-center hover:bg-stone-50 dark:hover:bg-stone-800 border border-transparent">3</button>
<button class="h-12 flex items-center justify-center bg-primary text-white rounded-lg font-bold">4</button>
<button class="h-12 flex items-center justify-center hover:bg-stone-50 dark:hover:bg-stone-800 border border-transparent">5</button>
<button class="h-12 flex items-center justify-center hover:bg-stone-50 dark:hover:bg-stone-800 border border-transparent">6</button>
<button class="h-12 flex items-center justify-center hover:bg-stone-50 dark:hover:bg-stone-800 border border-transparent">7</button>
<button class="h-12 flex items-center justify-center hover:bg-stone-50 dark:hover:bg-stone-800 border border-transparent">8</button>
<button class="h-12 flex items-center justify-center hover:bg-stone-50 dark:hover:bg-stone-800 border border-transparent">9</button>
<button class="h-12 flex items-center justify-center hover:bg-stone-50 dark:hover:bg-stone-800 border border-transparent">10</button>
</div>
</div>
<div>
<h3 class="font-medium text-stone-900 dark:text-white uppercase tracking-wider text-sm mb-6 flex items-center gap-2">
                            Available Appointments <span class="text-[10px] bg-primary/10 text-primary px-2 py-0.5 rounded-full font-bold">October 4</span>
</h3>
<div class="grid grid-cols-3 sm:grid-cols-4 gap-3">
<button class="py-3 px-4 text-xs font-semibold border border-stone-200 dark:border-stone-700 rounded-lg hover:border-primary transition-all">10:00 AM</button>
<button class="py-3 px-4 text-xs font-semibold bg-primary text-white border border-primary rounded-lg">11:30 AM</button>
<button class="py-3 px-4 text-xs font-semibold border border-stone-200 dark:border-stone-700 rounded-lg hover:border-primary transition-all">01:00 PM</button>
<button class="py-3 px-4 text-xs font-semibold border border-stone-200 dark:border-stone-700 rounded-lg opacity-40 cursor-not-allowed">02:30 PM</button>
<button class="py-3 px-4 text-xs font-semibold border border-stone-200 dark:border-stone-700 rounded-lg hover:border-primary transition-all">04:00 PM</button>
<button class="py-3 px-4 text-xs font-semibold border border-stone-200 dark:border-stone-700 rounded-lg hover:border-primary transition-all">05:30 PM</button>
</div>
<p class="mt-6 text-xs text-stone-400 italic flex items-center gap-2">
<span class="material-icons text-sm">info</span>
                            All Nahecididi boutique visits include a private presentation and expert sizing.
                        </p>
</div>
</div>
</section>
<section>
<div class="flex items-baseline gap-4 mb-8">
<span class="text-3xl font-light text-primary brand-font italic">02</span>
<h2 class="text-2xl font-light tracking-tight uppercase brand-font">Collector Information</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="text-[10px] uppercase tracking-widest font-bold text-stone-500">Full Name</label>
<input class="w-full bg-white dark:bg-stone-900 border-stone-200 dark:border-stone-800 rounded-lg focus:ring-primary focus:border-primary px-4 py-3 text-sm" placeholder="Julianne Vane" type="text"/>
</div>
<div class="space-y-2">
<label class="text-[10px] uppercase tracking-widest font-bold text-stone-500">Email Address</label>
<input class="w-full bg-white dark:bg-stone-900 border-stone-200 dark:border-stone-800 rounded-lg focus:ring-primary focus:border-primary px-4 py-3 text-sm" placeholder="j.vane@example.com" type="email"/>
</div>
<div class="space-y-2 md:col-span-2">
<label class="text-[10px] uppercase tracking-widest font-bold text-stone-500">Phone Number (For SMS Reminders)</label>
<input class="w-full bg-white dark:bg-stone-900 border-stone-200 dark:border-stone-800 rounded-lg focus:ring-primary focus:border-primary px-4 py-3 text-sm" placeholder="+1 (555) 000-0000" type="tel"/>
</div>
<div class="space-y-2 md:col-span-2">
<label class="text-[10px] uppercase tracking-widest font-bold text-stone-500">Special Requests or Occasion</label>
<textarea class="w-full bg-white dark:bg-stone-900 border-stone-200 dark:border-stone-800 rounded-lg focus:ring-primary focus:border-primary px-4 py-3 text-sm" placeholder="Is this a gift? Any specific requests for your Nahecididi experience..." rows="3"></textarea>
</div>
</div>
</section>
</div>
<div class="lg:col-span-5">
<div class="sticky top-32 space-y-8">
<div class="bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 rounded-xl overflow-hidden shadow-sm">
<div class="h-48 relative">
<img alt="Modern high-end street map visualization" class="w-full h-full object-cover grayscale contrast-125" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHnfQx9B5FgtrDfviHVJAux2XMO0m0p_6L0ogOHwO5gaMLgZdL-1WsUjXIIe3CqA1D1c1jrqeQZxFRzKl12AiiX_NHHHvgD506ZpzznlG9pSDOBDwDAjjyNb8M0475QZ8CGZLxyrIZ1eB2jB2Nv2l_0xBEDuwbob4T4BJFeefAW9aIEM2XX6wNW05grAmZKCLPrkPncV4f4davOIdW5ujCXfyrA4GPQYXYHa5Bbj6ghjIxjO27voNN9cwy88hLtRi9tLdTsUyN_ok"/>
<div class="absolute inset-0 bg-primary/10 mix-blend-multiply"></div>
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
<span class="material-icons text-primary text-4xl drop-shadow-lg">location_on</span>
</div>
</div>
<div class="p-6">
<h3 class="text-sm font-bold uppercase tracking-widest mb-2 brand-font">Nahecididi Flagship Boutique</h3>
<p class="text-xs text-stone-500 leading-relaxed mb-4">
                            26 Place Vendôme, 75001 Paris, France<br/>
                            Open daily: 10:00 AM — 07:00 PM
                        </p>
<div class="flex gap-4 border-t border-stone-100 dark:border-stone-800 pt-4">
<div class="flex items-center gap-1.5 text-[10px] uppercase tracking-tighter font-semibold text-stone-400">
<span class="material-icons text-sm">local_bar</span> Private Lounge
                            </div>
<div class="flex items-center gap-1.5 text-[10px] uppercase tracking-tighter font-semibold text-stone-400">
<span class="material-icons text-sm">diamond</span> Master Goldsmith
                            </div>
</div>
</div>
</div>
<div class="bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 rounded-xl p-6 shadow-sm">
<h3 class="text-[10px] font-bold uppercase tracking-[0.2em] mb-6 pb-4 border-b border-stone-100 dark:border-stone-800 flex justify-between items-center">
<span>Digital Receipt</span>
<span class="brand-font text-primary italic font-normal normal-case text-base tracking-normal">Nahecididi</span>
</h3>
<div class="flex gap-4 mb-8">
<div class="w-24 h-24 bg-background-light dark:bg-stone-800 rounded-lg overflow-hidden flex-shrink-0 border border-stone-100 dark:border-stone-700">
<img alt="Luxury diamond gold necklace" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6BmVn44JH0TKpTSfHhLc_P8U9QiVf1WH7vCpPkZ_xr1iJAG9K5XAFTR_xabdUcgVhjFkxnmJL8VzPoVtLmjGI7wXo6_vPWWE5hMr6RRmA9Gzko4FumvrawDmmvl-oNuHJ4fvg5cfvzU4VSq-SQJejTQ4ltXhUgY4V_LNPxTuM3jtGmJFyK7GGsrRdu3vsZ8rttaxHpjx8ULiUoLizkBIGjfAV6XutE1ACfoZgyS1Ge_b4fekvlKZ19f1H6Im8tVhTRc5Tmo-yM1E"/>
</div>
<div class="flex flex-col justify-center">
<h4 class="text-sm font-medium text-stone-900 dark:text-white mb-1">Celestial Solitaire Necklace</h4>
<p class="text-xs text-stone-500 mb-2">18k Champagne Gold • 1.5ct Diamond</p>
<p class="text-sm font-bold text-primary">$12,450.00</p>
</div>
</div>
<div class="space-y-3 mb-8">
<div class="flex justify-between text-xs">
<span class="text-stone-500">Subtotal</span>
<span class="font-medium">$12,450.00</span>
</div>
<div class="flex justify-between text-xs">
<span class="text-stone-500">Boutique Appointment</span>
<span class="text-emerald-600 font-medium uppercase text-[10px] tracking-widest">Complimentary</span>
</div>
<div class="flex justify-between text-xs">
<span class="text-stone-500">Tax (Estimated)</span>
<span class="font-medium">$1,058.25</span>
</div>
<div class="pt-4 border-t border-stone-100 dark:border-stone-800 flex justify-between items-baseline">
<span class="text-sm font-bold uppercase tracking-widest">Total</span>
<span class="text-xl font-light text-stone-900 dark:text-white">$13,508.25</span>
</div>
</div>
<button class="w-full bg-primary hover:bg-stone-800 dark:hover:bg-primary/90 text-white py-5 rounded-lg font-bold text-sm uppercase tracking-[0.2em] transition-all flex items-center justify-center gap-2 group">
                        Confirm Appointment
                        <span class="material-icons text-lg group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
<p class="text-center mt-6 text-[10px] text-stone-400 uppercase tracking-widest">
                        Secure payment processed by Nahecididi Concierge
                    </p>
</div>
</div>
</div>
</div>
</main>
<footer class="mt-20 border-t border-stone-200 dark:border-stone-800 py-12 bg-white dark:bg-stone-900">
<div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
<div class="flex gap-12 text-[10px] uppercase tracking-widest font-bold text-stone-400">
<a class="hover:text-primary transition-colors" href="#">Client Service</a>
<a class="hover:text-primary transition-colors" href="#">Sustainability</a>
<a class="hover:text-primary transition-colors" href="#">Privacy</a>
</div>
<p class="text-[10px] text-stone-400 uppercase tracking-[0.2em]">
            © 2023 Nahecididi Fine Jewelry. All Rights Reserved.
        </p>
</div>
</footer>

</body></html>