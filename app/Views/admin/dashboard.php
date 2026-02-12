<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Nahecididi Boutique Admin</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#c59f59",
                        "charcoal": "#1a1a1a",
                        "background-light": "#f8f7f6",
                        "background-dark": "#121212",
                    },
                    fontFamily: {
                        "display": ["Manrope"]
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
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        :root {
            --primary-gold: #c59f59;
            --charcoal-deep: #1a1a1a;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200 font-display min-h-screen flex">
<aside class="w-64 border-r border-primary/10 bg-charcoal dark:bg-black hidden lg:flex flex-col sticky top-0 h-screen">
<div class="p-8">
<h1 class="text-2xl font-extrabold tracking-tight text-primary">NAHECIDIDI</h1>
<p class="text-[10px] tracking-[0.2em] uppercase text-white/40 font-semibold">Boutique Admin</p>
</div>
<nav class="flex-1 px-4 space-y-2">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-primary bg-primary/10 font-semibold transition-all" href="#">
<span class="material-icons text-xl">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/60 hover:text-white hover:bg-white/5 transition-all" href="#">
<span class="material-icons text-xl">inventory_2</span>
<span>Inventory</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-white hover:bg-white/5 transition-all font-semibold" href="#">
<span class="material-icons text-xl">shopping_bag</span>
<span>BOPIS Pickups</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/60 hover:text-white hover:bg-white/5 transition-all" href="#">
<span class="material-icons text-xl">calendar_today</span>
<span>Appointments</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-white/60 hover:text-white hover:bg-white/5 transition-all" href="#">
<span class="material-icons text-xl">people</span>
<span>Clients</span>
</a>
</nav>
<div class="p-6 border-t border-white/5">
<div class="flex items-center gap-3 mb-6">
<img class="w-10 h-10 rounded-full object-cover border border-primary/20" data-alt="Boutique Manager Portrait" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_M0q5IwV6FJS4gETrTiQpczuCZJXTMwTrhVx2QgNVRZAntzsdW0gQ5Xn0ZkJmqgkSQxpazrvfzIYr644SD1U7duaRFSeevZurmkMustBpqCvG6HXwogouGxM1RRIfkFmka_MWmUv02ODl3m6POPFPLvoeRSjHrAT0a-VSW4iuRcUop0sxObmBeTkS2uAhZRKG9_lWH_wYR_I4PCxLUy0r-o3QBgbcctOV9U50kZPHrQR8va2dvBokxEkaepDRvAwurDFZqDk6Rtw"/>
<div>
<p class="text-sm font-bold text-white">Julian V.</p>
<p class="text-xs text-white/40">Boutique Manager</p>
</div>
</div>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-white/60 hover:text-white hover:bg-white/5 transition-all text-sm" href="#">
<span class="material-icons text-lg">settings</span>
<span>Settings</span>
</a>
</div>
</aside>
<main class="flex-1 overflow-y-auto">
<header class="sticky top-0 z-10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-primary/10 px-8 py-6 flex justify-between items-center">
<div>
<h2 class="text-2xl font-bold tracking-tight text-charcoal dark:text-white">Admin Boutique Management</h2>
<p class="text-sm opacity-50">Wednesday, October 25, 2023</p>
</div>
<div class="flex items-center gap-4">
<div class="relative">
<span class="material-icons p-2 bg-white dark:bg-slate-800 rounded-full border border-primary/10 cursor-pointer">notifications</span>
<span class="absolute top-0 right-0 w-2 h-2 bg-primary rounded-full border-2 border-background-light"></span>
</div>
<div class="flex items-center gap-2 bg-white dark:bg-slate-800 px-4 py-2 rounded-full border border-primary/10">
<span class="w-2 h-2 bg-green-500 rounded-full"></span>
<span class="text-xs font-semibold tracking-wide uppercase">Store Open</span>
</div>
</div>
</header>
<section class="p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-primary/10 shadow-sm">
<p class="text-xs uppercase tracking-widest font-bold opacity-50 mb-1">Total Pickups</p>
<div class="flex items-end justify-between">
<h3 class="text-3xl font-bold">24</h3>
<span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded">+12% vs yest.</span>
</div>
</div>
<div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-primary/10 shadow-sm">
<p class="text-xs uppercase tracking-widest font-bold opacity-50 mb-1">Awaiting Collection</p>
<div class="flex items-end justify-between">
<h3 class="text-3xl font-bold">08</h3>
<span class="text-xs text-amber-600 bg-amber-100 px-2 py-1 rounded">High Priority</span>
</div>
</div>
<div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-primary/10 shadow-sm border-l-4 border-l-primary">
<p class="text-xs uppercase tracking-widest font-bold opacity-50 mb-1">Daily Value</p>
<div class="flex items-end justify-between">
<h3 class="text-3xl font-bold">$142,500</h3>
<span class="material-icons text-primary">auto_graph</span>
</div>
</div>
<div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-primary/10 shadow-sm">
<p class="text-xs uppercase tracking-widest font-bold opacity-50 mb-1">Avg. Processing</p>
<div class="flex items-end justify-between">
<h3 class="text-3xl font-bold">14<span class="text-sm font-normal opacity-50">min</span></h3>
<span class="material-icons text-slate-400">timer</span>
</div>
</div>
</section>
<section class="px-8 pb-12">
<div class="bg-white dark:bg-slate-900 rounded-xl shadow-xl border border-primary/10 overflow-hidden">
<div class="p-6 border-b border-primary/10 flex flex-col md:flex-row md:items-center justify-between gap-4">
<div class="flex p-1 bg-background-light dark:bg-slate-800 rounded-lg w-fit border border-primary/5">
<button class="px-6 py-2 rounded-md bg-white dark:bg-slate-700 shadow-sm text-sm font-bold text-primary transition-all">Today's Schedule</button>
<button class="px-6 py-2 rounded-md text-sm font-medium opacity-50 hover:opacity-100 transition-all">Upcoming</button>
<button class="px-6 py-2 rounded-md text-sm font-medium opacity-50 hover:opacity-100 transition-all">Past</button>
</div>
<div class="flex items-center gap-3">
<div class="relative group">
<span class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="pl-10 pr-4 py-2 bg-background-light dark:bg-slate-800 border-none rounded-lg text-sm focus:ring-1 focus:ring-primary w-64 transition-all" placeholder="Search orders..." type="text"/>
</div>
<button class="flex items-center gap-2 px-4 py-2 border border-primary/20 rounded-lg text-sm font-semibold hover:bg-primary/5">
<span class="material-icons text-sm">tune</span>
                        Filters
                    </button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-background-light/50 dark:bg-slate-800/50 text-charcoal/60 dark:text-white/40">
<th class="px-8 py-4 text-xs font-bold uppercase tracking-widest">Order ID</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-widest">Customer</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-widest">Scheduled Time</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-widest">Item Value</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-widest">Status</th>
<th class="px-8 py-4 text-xs font-bold uppercase tracking-widest text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-primary/5">
<tr class="hover:bg-primary/5 transition-colors group">
<td class="px-8 py-6 font-mono text-sm font-bold">#NH-90210</td>
<td class="px-6 py-6">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center text-xs font-bold text-primary">EC</div>
<div>
<p class="font-bold text-sm">Eleanor Campbell</p>
<p class="text-xs opacity-50">VIP Platinum Member</p>
</div>
</div>
</td>
<td class="px-6 py-6 text-sm">
<span class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                                10:30 AM <span class="opacity-50">(In 15m)</span>
</span>
</td>
<td class="px-6 py-6 font-bold text-sm">$42,000</td>
<td class="px-6 py-6">
<span class="px-3 py-1 bg-amber-50 dark:bg-amber-900/20 text-amber-600 dark:text-amber-400 text-[10px] font-bold uppercase tracking-wider rounded border border-amber-200 dark:border-amber-800">
                                Ready for Pickup
                            </span>
</td>
<td class="px-8 py-6 text-right">
<button class="bg-primary hover:bg-primary/90 text-white text-xs font-bold px-4 py-2 rounded-lg transition-all shadow-md shadow-primary/20">
                                Mark Collected
                            </button>
</td>
</tr>
<tr class="hover:bg-primary/5 transition-colors group">
<td class="px-8 py-6 font-mono text-sm font-bold">#NH-90184</td>
<td class="px-6 py-6">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-xs font-bold">MH</div>
<div>
<p class="font-bold text-sm">Marcus Holloway</p>
<p class="text-xs opacity-50">First-time Buyer</p>
</div>
</div>
</td>
<td class="px-6 py-6 text-sm">
<span class="opacity-50">11:45 AM</span>
</td>
<td class="px-6 py-6 font-bold text-sm">$8,450</td>
<td class="px-6 py-6">
<span class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-500 text-[10px] font-bold uppercase tracking-wider rounded border border-slate-200 dark:border-slate-700">
                                Awaiting Collection
                            </span>
</td>
<td class="px-8 py-6 text-right">
<button class="bg-primary/10 hover:bg-primary/20 text-primary text-xs font-bold px-4 py-2 rounded-lg transition-all">
                                View Details
                            </button>
</td>
</tr>
<tr class="hover:bg-primary/5 transition-colors group">
<td class="px-8 py-6 font-mono text-sm font-bold">#NH-90152</td>
<td class="px-6 py-6">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center text-xs font-bold text-primary">SW</div>
<div>
<p class="font-bold text-sm">Sophia Wellington</p>
<p class="text-xs opacity-50">VIP Gold Member</p>
</div>
</div>
</td>
<td class="px-6 py-6 text-sm">
<span class="opacity-50">01:15 PM</span>
</td>
<td class="px-6 py-6 font-bold text-sm">$118,200</td>
<td class="px-6 py-6">
<span class="px-3 py-1 bg-amber-50 dark:bg-amber-900/20 text-amber-600 dark:text-amber-400 text-[10px] font-bold uppercase tracking-wider rounded border border-amber-200 dark:border-amber-800">
                                Ready for Pickup
                            </span>
</td>
<td class="px-8 py-6 text-right">
<button class="bg-primary hover:bg-primary/90 text-white text-xs font-bold px-4 py-2 rounded-lg transition-all shadow-md shadow-primary/20">
                                Mark Collected
                            </button>
</td>
</tr>
<tr class="opacity-50 bg-slate-50 dark:bg-slate-800/20 grayscale transition-colors">
<td class="px-8 py-6 font-mono text-sm font-bold">#NH-89871</td>
<td class="px-6 py-6">
<div class="flex items-center gap-3">
<img class="w-8 h-8 rounded-full object-cover" data-alt="Client Avatar Photo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuALgsO7fEamGLO27Xzkf9Mik3JnoeJoH-m-5TAnNw7Q__gbXTCMYywL_UbxlkvffGV7fopj8aUS9LF-UnQWhzhFy2CvQwzWEgn69bRBbHjmz4SHiS9xZ8wEJd92LHENQwxmUnDRRvYeF6p9RCSkSXcMDfdcF_cXMAOIVA8RpfsXOC-s18_XbeniOOqa2KHUYpHM267YbhjrIM7S0ewrxU_fCbMyF_M4WHkUWsQiooScmCf9owUmJEvHkhyRKLODrLl0wtrR4tlLpNo"/>
<div>
<p class="font-bold text-sm">Isabella Thorne</p>
<p class="text-xs">VIP Diamond Member</p>
</div>
</div>
</td>
<td class="px-6 py-6 text-sm">
                            09:00 AM
                        </td>
<td class="px-6 py-6 font-bold text-sm">$56,000</td>
<td class="px-6 py-6">
<span class="px-3 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 text-[10px] font-bold uppercase tracking-wider rounded border border-green-200 dark:border-green-800">
                                Collected
                            </span>
</td>
<td class="px-8 py-6 text-right">
<span class="text-xs font-semibold uppercase italic px-4 py-2">Success</span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-6 bg-background-light/30 dark:bg-slate-800/30 flex justify-between items-center text-sm">
<p class="opacity-50">Showing 5 of 24 daily pickups</p>
<div class="flex gap-2">
<button class="p-2 border border-primary/10 rounded-lg hover:bg-white dark:hover:bg-slate-700 disabled:opacity-30" disabled="">
<span class="material-icons text-sm">chevron_left</span>
</button>
<button class="p-2 border border-primary/10 rounded-lg bg-white dark:bg-slate-700 shadow-sm font-bold text-primary">1</button>
<button class="p-2 border border-primary/10 rounded-lg hover:bg-white dark:hover:bg-slate-700 text-charcoal/50">2</button>
<button class="p-2 border border-primary/10 rounded-lg hover:bg-white dark:hover:bg-slate-700 text-charcoal/50">3</button>
<button class="p-2 border border-primary/10 rounded-lg hover:bg-white dark:hover:bg-slate-700">
<span class="material-icons text-sm">chevron_right</span>
</button>
</div>
</div>
</div>
</section>
<div class="fixed top-0 right-0 w-[450px] h-screen bg-white dark:bg-slate-900 shadow-2xl border-l border-primary/10 z-50 transform translate-x-full lg:translate-x-0 hidden lg:block overflow-y-auto translate-x-full">
<div class="p-8">
<div class="flex justify-between items-center mb-10">
<h3 class="text-xl font-bold text-charcoal dark:text-white">Order Details</h3>
<button class="material-icons opacity-50 hover:opacity-100 transition-all">close</button>
</div>
<div class="mb-8 p-6 bg-primary/5 rounded-xl border border-primary/10">
<p class="text-xs font-bold uppercase tracking-widest text-primary mb-4">Customer Profile</p>
<div class="flex items-center gap-4 mb-6">
<div class="w-16 h-16 rounded-full bg-primary/20 flex items-center justify-center text-2xl font-bold text-primary">EC</div>
<div>
<h4 class="text-lg font-bold text-charcoal dark:text-white">Eleanor Campbell</h4>
<p class="text-sm opacity-60">e.campbell@example.com</p>
<p class="text-sm font-semibold text-primary mt-1">Lifetime Spend: $248,000</p>
</div>
</div>
<div class="grid grid-cols-2 gap-4 text-xs">
<div class="p-3 bg-white dark:bg-slate-800 rounded-lg border border-primary/5">
<p class="opacity-50 mb-1 font-bold uppercase tracking-tighter">Preferred Metal</p>
<p class="font-bold">Platinum</p>
</div>
<div class="p-3 bg-white dark:bg-slate-800 rounded-lg border border-primary/5">
<p class="opacity-50 mb-1 font-bold uppercase tracking-tighter">Ring Size</p>
<p class="font-bold">5.5</p>
</div>
</div>
</div>
<div class="mb-10">
<p class="text-xs font-bold uppercase tracking-widest opacity-50 mb-6">Items to be Picked Up</p>
<div class="flex gap-4 p-4 border border-primary/10 rounded-xl mb-4 group hover:bg-background-light dark:hover:bg-slate-800 transition-all">
<div class="w-20 h-20 rounded-lg overflow-hidden bg-slate-100">
<img class="w-full h-full object-cover" data-alt="Diamond Ring Close-up" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrQEy991NB_E3roZuHs84FThbNhDr3D2j1sU4SBUFXZrjU_ZnIsTnOAPi6AK6YsDNlf6FWKgfncDMGESmeZjJU4n5WabXoqm-RABFitqvkGfMShfgPFvDPfQ1l86mfxjryR8lzUJ0_9jMl-qAcz80A5W2AV_G36au7E6wQuzbER2C7hnXASHKyDoD1ms8sdM5tW4VK2B0jUQa1LkUcXZzOdY-O0nrGywLOX1Dtif4YpsMDeZiUEa_GQc9MLRIZiHuHnp9a6xy6wIo"/>
</div>
<div class="flex-1 flex flex-col justify-center">
<p class="font-bold text-sm text-charcoal dark:text-white">Lumiere Solitaire Ring</p>
<p class="text-xs opacity-50">2.5 Carat, Platinum Band</p>
<p class="text-sm font-bold text-primary mt-1">$42,000.00</p>
</div>
</div>
</div>
<div class="space-y-4">
<button class="w-full py-4 bg-primary text-white font-bold rounded-xl shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all">
                    Complete Pickup
                </button>
<button class="w-full py-4 border border-primary/20 text-primary font-bold rounded-xl hover:bg-primary/5 transition-all">
                    Print Authentication Cert.
                </button>
</div>
<div class="mt-12 pt-8 border-t border-primary/10">
<p class="text-xs font-bold uppercase tracking-widest opacity-50 mb-4">Internal Staff Notes</p>
<div class="bg-background-light dark:bg-slate-800 p-4 rounded-lg text-sm italic border-l-4 border-primary">
                    "Customer requested champagne upon arrival. Prepare Private Viewing Room A for collection."
                </div>
</div>
</div>
</div>
</main>
<nav class="lg:hidden fixed bottom-0 left-0 right-0 bg-charcoal border-t border-primary/10 flex justify-around items-center p-4 z-50">
<span class="material-icons text-primary">dashboard</span>
<span class="material-icons text-white/40">inventory_2</span>
<span class="material-icons text-white/40">shopping_bag</span>
<span class="material-icons text-white/40">people</span>
<span class="material-icons text-white/40">notifications</span>
</nav>

</body></html>