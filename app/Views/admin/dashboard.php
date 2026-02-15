<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Nahecididi Admin | Overview Dashboard</title>
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
            @apply flex items-center space-x-3 px-6 py-4 text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 hover:text-primary hover:bg-white/5 transition-all;
        }
        .admin-sidebar-item.active {
            @apply text-primary bg-white/5 border-r-2 border-primary;
        }
        .luxury-card {
            @apply bg-panel-dark border border-white/10 rounded-sm p-6;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 200, 'GRAD' 0, 'opsz' 24;
        }
        .chart-grid-line {
            stroke: rgba(255, 255, 255, 0.05);
            stroke-width: 1;
        }
    </style>
</head>
<body class="bg-background-dark">
<div class="flex min-h-screen">
<aside class="w-72 bg-charcoal border-r border-white/10 flex flex-col fixed h-full">
<div class="p-8 border-b border-white/10">
<a class="text-xl font-bold tracking-[0.3em] text-white uppercase" href="#">Nahecididi</a>
<p class="text-[9px] tracking-[0.2em] text-primary mt-2 font-bold uppercase">Boutique Management</p>
</div>
<nav class="flex-1 py-6">
<a class="admin-sidebar-item active" href="#">
<span class="material-symbols-outlined text-xl">dashboard</span>
<span>Overview</span>
</a>
<a class="admin-sidebar-item" href="#">
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
<div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center border border-primary/30 text-primary font-bold text-[10px]">
                    NY
                </div>
<div>
<p class="text-[10px] font-bold tracking-widest uppercase">New York Flagship</p>
<p class="text-[9px] text-gray-500 uppercase">Station Manager</p>
</div>
</div>
</div>
</aside>
<main class="flex-1 ml-72 flex flex-col">
<header class="h-20 bg-charcoal/50 backdrop-blur-md border-b border-white/10 px-8 flex items-center justify-between sticky top-0 z-50">
<h2 class="text-xs font-bold tracking-[0.4em] uppercase text-gray-400">Dashboard / Overview</h2>
<div class="flex items-center space-x-6">
<div class="relative">
<input class="bg-white/5 border-white/10 text-[10px] uppercase tracking-widest py-2 px-4 focus:ring-primary focus:border-primary w-64 rounded-sm text-white" placeholder="Search orders..." type="text"/>
<span class="material-symbols-outlined absolute right-3 top-2 text-gray-500 text-sm">search</span>
</div>
<button class="text-gray-400 hover:text-white transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-0 right-0 w-1.5 h-1.5 bg-primary rounded-full"></span>
</button>
</div>
</header>
<div class="p-12 max-w-7xl w-full mx-auto">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
<div class="luxury-card border-l-2 border-l-primary">
<p class="text-[10px] uppercase tracking-[0.3em] text-gray-500 mb-2">Total Daily Sales</p>
<div class="flex items-baseline space-x-2">
<span class="text-3xl font-light text-white">$142,800</span>
<span class="text-[10px] text-green-500 font-bold">+12% vs. yesterday</span>
</div>
</div>
<div class="luxury-card border-l-2 border-l-primary">
<p class="text-[10px] uppercase tracking-[0.3em] text-gray-500 mb-2">Pending Pickups</p>
<div class="flex items-baseline space-x-2">
<span class="text-3xl font-light text-white">04</span>
<span class="text-[10px] text-primary font-bold uppercase tracking-widest">High Priority</span>
</div>
</div>
<div class="luxury-card border-l-2 border-l-primary">
<p class="text-[10px] uppercase tracking-[0.3em] text-gray-500 mb-2">Active Appointments</p>
<div class="flex items-baseline space-x-2">
<span class="text-3xl font-light text-white">08</span>
<span class="text-[10px] text-gray-500 font-bold uppercase tracking-widest">Until 8:00 PM</span>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<div class="lg:col-span-2 luxury-card">
<div class="flex justify-between items-center mb-8">
<div>
<h3 class="text-xs font-bold uppercase tracking-[0.3em] text-white">Performance Trends</h3>
<p class="text-[10px] text-gray-500 uppercase tracking-widest mt-1">Weekly Sales Revenue</p>
</div>
<div class="flex space-x-4">
<button class="text-[9px] font-bold text-primary uppercase border-b border-primary pb-1">Week</button>
<button class="text-[9px] font-bold text-gray-500 uppercase hover:text-white pb-1 transition-colors">Month</button>
</div>
</div>
<div class="h-64 w-full relative">
<svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 800 200">
<line class="chart-grid-line" x1="0" x2="800" y1="40" y2="40"></line>
<line class="chart-grid-line" x1="0" x2="800" y1="80" y2="80"></line>
<line class="chart-grid-line" x1="0" x2="800" y1="120" y2="120"></line>
<line class="chart-grid-line" x1="0" x2="800" y1="160" y2="160"></line>
<path d="M0,160 L133,140 L266,100 L400,120 L533,60 L666,80 L800,40" fill="none" stroke="#e8ba30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
<path d="M0,160 L133,140 L266,100 L400,120 L533,60 L666,80 L800,40 V200 H0 Z" fill="url(#goldGradient)" opacity="0.1"></path>
<defs>
<linearGradient id="goldGradient" x1="0%" x2="0%" y1="0%" y2="100%">
<stop offset="0%" style="stop-color:#e8ba30;stop-opacity:1"></stop>
<stop offset="100%" style="stop-color:#e8ba30;stop-opacity:0"></stop>
</linearGradient>
</defs>
<circle cx="0" cy="160" fill="#e8ba30" r="3"></circle>
<circle cx="133" cy="140" fill="#e8ba30" r="3"></circle>
<circle cx="266" cy="100" fill="#e8ba30" r="3"></circle>
<circle cx="400" cy="120" fill="#e8ba30" r="3"></circle>
<circle cx="533" cy="60" fill="#e8ba30" r="3"></circle>
<circle cx="666" cy="80" fill="#e8ba30" r="3"></circle>
<circle cx="800" cy="40" fill="#e8ba30" r="3"></circle>
</svg>
<div class="flex justify-between mt-4">
<span class="text-[9px] text-gray-500 uppercase font-bold">Mon</span>
<span class="text-[9px] text-gray-500 uppercase font-bold">Tue</span>
<span class="text-[9px] text-gray-500 uppercase font-bold">Wed</span>
<span class="text-[9px] text-gray-500 uppercase font-bold">Thu</span>
<span class="text-[9px] text-gray-500 uppercase font-bold">Fri</span>
<span class="text-[9px] text-gray-500 uppercase font-bold">Sat</span>
<span class="text-[9px] text-gray-500 uppercase font-bold">Sun</span>
</div>
</div>
</div>
<div class="luxury-card">
<h3 class="text-xs font-bold uppercase tracking-[0.3em] text-white mb-6">Recent Activity</h3>
<div class="space-y-6">
<div class="flex items-start space-x-4 border-b border-white/5 pb-4">
<div class="w-8 h-8 rounded-sm bg-primary/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary text-sm">payments</span>
</div>
<div class="flex-1">
<p class="text-[10px] font-bold text-white uppercase tracking-wider">Transaction Complete</p>
<p class="text-[9px] text-gray-500 mt-1 uppercase">Astra Diamond Choker • $32,400</p>
<p class="text-[8px] text-primary/70 mt-1">2 mins ago</p>
</div>
</div>
<div class="flex items-start space-x-4 border-b border-white/5 pb-4">
<div class="w-8 h-8 rounded-sm bg-primary/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary text-sm">inventory_2</span>
</div>
<div class="flex-1">
<p class="text-[10px] font-bold text-white uppercase tracking-wider">Status Updated</p>
<p class="text-[9px] text-gray-500 mt-1 uppercase">Order #7742: Ready for Pickup</p>
<p class="text-[8px] text-primary/70 mt-1">15 mins ago</p>
</div>
</div>
<div class="flex items-start space-x-4 border-b border-white/5 pb-4">
<div class="w-8 h-8 rounded-sm bg-primary/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary text-sm">calendar_today</span>
</div>
<div class="flex-1">
<p class="text-[10px] font-bold text-white uppercase tracking-wider">New Appointment</p>
<p class="text-[9px] text-gray-500 mt-1 uppercase">Julianna Mercer • Private Viewing</p>
<p class="text-[8px] text-primary/70 mt-1">45 mins ago</p>
</div>
</div>
<div class="flex items-start space-x-4">
<div class="w-8 h-8 rounded-sm bg-primary/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary text-sm">check_circle</span>
</div>
<div class="flex-1">
<p class="text-[10px] font-bold text-white uppercase tracking-wider">Pickup Confirmed</p>
<p class="text-[9px] text-gray-500 mt-1 uppercase">Elysian Drops • Client Collected</p>
<p class="text-[8px] text-primary/70 mt-1">1 hour ago</p>
</div>
</div>
</div>
<button class="w-full mt-8 py-3 border border-white/10 text-[9px] font-bold uppercase tracking-[0.2em] text-gray-400 hover:text-primary hover:border-primary transition-all">
                        View All Activity
                    </button>
</div>
</div>
<div class="mt-12">
<h4 class="text-[10px] font-bold uppercase tracking-[0.3em] text-primary mb-6">High Priority Fulfillment</h4>
<div class="luxury-card overflow-hidden ring-1 ring-primary/30 shadow-2xl shadow-primary/5">
<div class="bg-primary/10 border-b border-primary/20 px-8 py-4 flex justify-between items-center -mx-6 -mt-6 mb-6">
<span class="text-[10px] font-bold uppercase tracking-[0.3em] text-primary flex items-center">
<span class="material-symbols-outlined text-sm mr-2">priority_high</span>
                            Astra Choker Pickup Entry
                        </span>
<span class="text-[10px] font-bold uppercase tracking-[0.2em] bg-primary text-black px-3 py-1 rounded-full">
                            Ready for Pickup
                        </span>
</div>
<div class="flex flex-col lg:flex-row lg:items-center gap-12">
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
</div>
</div>
</main>
</div>

</body></html>