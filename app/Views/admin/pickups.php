<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Nahecididi Admin | Boutique Management</title>
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
                        "background-dark": "#121212",
                        "charcoal": "#1a1a1a",
                        "panel-dark": "#1e1e1e",
                        "gold-accent": "#e8ba30"
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
            @apply bg-background-dark text-white;
        }
        .admin-sidebar-item {
            @apply flex items-center space-x-3 px-6 py-4 text-xs font-bold uppercase tracking-[0.2em] text-gray-400 hover:text-primary hover:bg-white/5 transition-all;
        }
        .admin-sidebar-item.active {
            @apply text-primary bg-white/5 border-r-2 border-primary;
        }
        .luxury-card {
            @apply bg-panel-dark border border-white/10 rounded-sm;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 200, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-dark">
<div class="flex min-h-screen">
<aside class="w-72 bg-charcoal border-r border-white/10 flex flex-col">
<div class="p-8 border-b border-white/10">
<a class="text-xl font-bold tracking-[0.3em] text-white uppercase" href="#">Nahecididi</a>
<p class="text-[9px] tracking-[0.2em] text-primary mt-2 font-bold uppercase">Boutique Management</p>
</div>
<nav class="flex-1 py-6">
<a class="admin-sidebar-item" href="#">
<span class="material-symbols-outlined text-xl">dashboard</span>
<span>Overview</span>
</a>
<a class="admin-sidebar-item active" href="#">
<span class="material-symbols-outlined text-xl">shopping_bag</span>
<span>Pickups</span>
</a>
<a class="admin-sidebar-item" href="#">
<span class="material-symbols-outlined text-xl">calendar_month</span>
<span>Appointments</span>
</a>
<a class="admin-sidebar-item" href="#">
<span class="material-symbols-outlined text-xl">inventory_2</span>
<span>Inventory</span>
</a>
<a class="admin-sidebar-item" href="#">
<span class="material-symbols-outlined text-xl">group</span>
<span>Clients</span>
</a>
</nav>
<div class="p-6 border-t border-white/10">
<div class="flex items-center space-x-3">
<div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center border border-primary/30">
<span class="text-[10px] font-bold text-primary uppercase">NY</span>
</div>
<div>
<p class="text-[10px] font-bold tracking-widest uppercase">New York Flagship</p>
<p class="text-[9px] text-gray-500 uppercase">Station Manager</p>
</div>
</div>
</div>
</aside>
<main class="flex-1 flex flex-col">
<header class="h-20 bg-charcoal/50 backdrop-blur-md border-b border-white/10 px-8 flex items-center justify-between sticky top-0 z-50">
<h2 class="text-xs font-bold tracking-[0.4em] uppercase text-gray-400">Dashboard / Boutique Pickups</h2>
<div class="flex items-center space-x-6">
<button class="text-gray-400 hover:text-white transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-0 right-0 w-1.5 h-1.5 bg-primary rounded-full"></span>
</button>
<button class="text-gray-400 hover:text-white transition-colors">
<span class="material-symbols-outlined">settings</span>
</button>
</div>
</header>
<div class="p-12 max-w-6xl w-full mx-auto">
<div class="flex justify-between items-end mb-12">
<div>
<h1 class="text-3xl font-light tracking-tight text-white mb-2">Daily Schedule</h1>
<p class="text-xs uppercase tracking-[0.2em] text-primary font-bold">Today, October 24, 2024</p>
</div>
<div class="flex space-x-4">
<div class="text-right">
<p class="text-[10px] text-gray-500 uppercase tracking-widest">Status</p>
<p class="text-xs font-bold text-white uppercase tracking-widest">4 Pending Pickups</p>
</div>
</div>
</div>
<div class="luxury-card overflow-hidden ring-1 ring-primary/30 shadow-2xl shadow-primary/5 mb-8">
<div class="bg-primary/10 border-b border-primary/20 px-8 py-4 flex justify-between items-center">
<span class="text-[10px] font-bold uppercase tracking-[0.3em] text-primary flex items-center">
<span class="material-symbols-outlined text-sm mr-2">priority_high</span>
                            High Priority Fulfillment
                        </span>
<span class="text-[10px] font-bold uppercase tracking-[0.2em] bg-primary text-black px-3 py-1 rounded-full">
                            Ready for Pickup
                        </span>
</div>
<div class="p-8 flex flex-col lg:flex-row lg:items-center gap-12">
<div class="flex items-center space-x-6 lg:w-1/3">
<div class="w-24 h-24 bg-charcoal rounded overflow-hidden border border-white/5">
<img alt="Astra Diamond Choker" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn1QKCpcE1NfKR3dvvYcclozLO29QRZET5ecKCwtAmHzr9O48is6LpVuFlm2SqfN_JjHpUIKIbD8twZkhZeBeMkzgLj25f0zDE7qV570kPD-3ZJrs0u0v5jUQNsI9f2dCp04ewGVu-zCM9nedwdA2pcgO2SZuALukoomA_IIDQWHnkVllCEGPolFpu__O-YBEWlrOyJ3rXTye831gGhNsCUQiJVTLtlD4v0spkMbUbb2ztajVYZ7Ea6bzMv72Zdb8QWqDla3EMmqo"/>
</div>
<div>
<p class="text-[10px] text-primary uppercase font-bold tracking-widest mb-1">SKU: NH-AST-2024</p>
<h3 class="text-lg font-medium text-white">Astra Diamond Choker</h3>
<p class="text-sm text-gray-500 italic">18k White Gold, 4.5 CTW</p>
</div>
</div>
<div class="flex-1 grid grid-cols-2 md:grid-cols-3 gap-8">
<div>
<p class="text-[10px] text-gray-500 uppercase tracking-widest mb-2">Customer</p>
<p class="text-sm font-bold text-white uppercase tracking-wider">Julianna Mercer</p>
<p class="text-[10px] text-gray-400 mt-1 uppercase">VVIP Platinum Client</p>
</div>
<div>
<p class="text-[10px] text-gray-500 uppercase tracking-widest mb-2">Scheduled Time</p>
<p class="text-sm font-bold text-white uppercase tracking-wider flex items-center">
<span class="material-symbols-outlined text-primary text-sm mr-2">schedule</span>
                                    2:00 PM
                                </p>
<p class="text-[10px] text-gray-400 mt-1 uppercase">Today</p>
</div>
<div class="hidden md:block">
<p class="text-[10px] text-gray-500 uppercase tracking-widest mb-2">Order Value</p>
<p class="text-sm font-bold text-white tracking-wider">$32,400.00</p>
<p class="text-[10px] text-green-500 mt-1 uppercase">Payment Confirmed</p>
</div>
</div>
<div class="flex flex-col space-y-3 lg:w-64">
<button class="w-full bg-primary hover:bg-primary-dark text-black py-3 text-[10px] font-bold uppercase tracking-[0.2em] transition-all rounded-sm">
                                Mark as Collected
                            </button>
<button class="w-full border border-white/20 hover:border-primary/50 text-white py-3 text-[10px] font-bold uppercase tracking-[0.2em] transition-all rounded-sm">
                                View Order Details
                            </button>
</div>
</div>
</div>
<div class="grid grid-cols-1 gap-4">
<h4 class="text-[10px] font-bold uppercase tracking-[0.3em] text-gray-500 mt-8 mb-4">Upcoming Appointments</h4>
<div class="luxury-card p-6 flex items-center justify-between bg-charcoal/30 opacity-70">
<div class="flex items-center space-x-6">
<p class="text-xs font-bold text-gray-400 uppercase w-20">4:30 PM</p>
<div>
<p class="text-xs font-bold uppercase tracking-wider text-white">Elysian Drop Earrings</p>
<p class="text-[10px] text-gray-500 uppercase">Marcus Thorne</p>
</div>
</div>
<div class="flex items-center space-x-4">
<span class="text-[9px] uppercase tracking-widest text-gray-500">Awaiting Prep</span>
<button class="text-white hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
</div>
<div class="luxury-card p-6 flex items-center justify-between bg-charcoal/30 opacity-70">
<div class="flex items-center space-x-6">
<p class="text-xs font-bold text-gray-400 uppercase w-20">5:15 PM</p>
<div>
<p class="text-xs font-bold uppercase tracking-wider text-white">Solstice Band (Resizing)</p>
<p class="text-[10px] text-gray-500 uppercase">Sarah Jenkins</p>
</div>
</div>
<div class="flex items-center space-x-4">
<span class="text-[9px] uppercase tracking-widest text-gray-500">In Workshop</span>
<button class="text-white hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
</div>
</div>
<div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="p-6 border-l border-primary/30 bg-white/5">
<p class="text-[9px] uppercase tracking-[0.3em] text-gray-500 mb-1">Total Daily Value</p>
<p class="text-xl font-light text-white">$142,800</p>
</div>
<div class="p-6 border-l border-primary/30 bg-white/5">
<p class="text-[9px] uppercase tracking-[0.3em] text-gray-500 mb-1">Completed Today</p>
<p class="text-xl font-light text-white">12 Items</p>
</div>
<div class="p-6 border-l border-primary/30 bg-white/5">
<p class="text-[9px] uppercase tracking-[0.3em] text-gray-500 mb-1">Pending Pickups</p>
<p class="text-xl font-light text-white">04 Items</p>
</div>
</div>
</div>
</main>
</div>

</body></html>