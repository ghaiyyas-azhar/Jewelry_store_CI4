<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Nahecididi Admin | Inventory Management</title>
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
                        "gold-accent": "#e8ba30",
                        "champagne": "#f3e5ab"
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
        .champagne-btn {
            @apply bg-[#d4af37] hover:bg-[#c5a028] text-black py-2.5 px-6 text-[10px] font-bold uppercase tracking-[0.2em] transition-all rounded-sm flex items-center;
        }
        .gold-progress-bar {
            @apply h-1 bg-white/10 rounded-full overflow-hidden w-24;
        }
        .gold-progress-fill {
            @apply h-full bg-primary;
        }
        table thead th {
            @apply text-[10px] uppercase tracking-[0.2em] text-gray-500 font-bold py-4 px-6 border-b border-white/10 text-left;
        }
        table tbody td {
            @apply py-4 px-6 border-b border-white/5 text-sm align-middle;
        }
    </style>
</head>
<body class="bg-background-dark">
<div class="flex min-h-screen">
<aside class="w-72 bg-charcoal border-r border-white/10 flex flex-col sticky h-screen top-0">
<div class="p-8 border-b border-white/10">
<a class="text-xl font-bold tracking-[0.3em] text-white uppercase" href="#">Nahecididi</a>
<p class="text-[9px] tracking-[0.2em] text-primary mt-2 font-bold uppercase">Boutique Management</p>
</div>
<nav class="flex-1 py-6">
<a class="admin-sidebar-item" href="#">
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
<a class="admin-sidebar-item active" href="#">
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
<p class="text-[9px] text-gray-500 uppercase">Inventory Manager</p>
</div>
</div>
</div>
</aside>
<main class="flex-1 flex flex-col">
<header class="h-20 bg-charcoal/50 backdrop-blur-md border-b border-white/10 px-8 flex items-center justify-between sticky top-0 z-50">
<h2 class="text-xs font-bold tracking-[0.4em] uppercase text-gray-400">Dashboard / Global Inventory</h2>
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
<div class="p-12 max-w-7xl w-full mx-auto">
<div class="flex justify-between items-end mb-12">
<div>
<h1 class="text-3xl font-light tracking-tight text-white mb-2">Inventory Management</h1>
<p class="text-xs uppercase tracking-[0.2em] text-primary font-bold">Manage your luxury collection</p>
</div>
<div class="flex space-x-4">
<button class="border border-white/20 hover:border-primary/50 text-white py-2.5 px-6 text-[10px] font-bold uppercase tracking-[0.2em] transition-all rounded-sm flex items-center">
<span class="material-symbols-outlined text-sm mr-2">download</span>
                        Export Report
                    </button>
<button class="champagne-btn">
<span class="material-symbols-outlined text-sm mr-2">add</span>
                        Add New Item
                    </button>
</div>
</div>
<div class="luxury-card mb-8 p-6 flex flex-wrap items-center gap-6">
<div class="relative flex-1 min-w-[300px]">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 text-lg">search</span>
<input class="w-full bg-charcoal border-white/10 focus:border-primary text-sm py-2.5 pl-12 pr-4 tracking-wider placeholder-gray-600 focus:ring-0" placeholder="Search collection, SKU, or stones..." type="text"/>
</div>
<select class="bg-charcoal border-white/10 text-xs font-bold uppercase tracking-widest text-gray-400 focus:border-primary focus:ring-0 min-w-[160px]">
<option>All Categories</option>
<option>Chokers</option>
<option>Earrings</option>
<option>Bands</option>
<option>Watchmaking</option>
</select>
<select class="bg-charcoal border-white/10 text-xs font-bold uppercase tracking-widest text-gray-400 focus:border-primary focus:ring-0 min-w-[160px]">
<option>All Locations</option>
<option>New York Flagship</option>
<option>Paris Boutique</option>
<option>London Mayfair</option>
</select>
</div>
<div class="luxury-card overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr>
<th>Product</th>
<th>SKU</th>
<th>Category</th>
<th>Stock Level</th>
<th>Location</th>
<th>Status</th>
<th class="text-right">Actions</th>
</tr>
</thead>
<tbody>
<tr class="hover:bg-white/5 transition-colors group">
<td>
<div class="flex items-center space-x-4">
<div class="w-12 h-12 bg-charcoal rounded border border-white/5 overflow-hidden flex-shrink-0">
<img alt="Astra Diamond Choker" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn1QKCpcE1NfKR3dvvYcclozLO29QRZET5ecKCwtAmHzr9O48is6LpVuFlm2SqfN_JjHpUIKIbD8twZkhZeBeMkzgLj25f0zDE7qV570kPD-3ZJrs0u0v5jUQNsI9f2dCp04ewGVu-zCM9nedwdA2pcgO2SZuALukoomA_IIDQWHnkVllCEGPolFpu__O-YBEWlrOyJ3rXTye831gGhNsCUQiJVTLtlD4v0spkMbUbb2ztajVYZ7Ea6bzMv72Zdb8QWqDla3EMmqo"/>
</div>
<div>
<p class="font-medium text-white tracking-wide">Astra Diamond Choker</p>
<p class="text-[10px] text-gray-500 uppercase">18k White Gold, 4.5 CTW</p>
</div>
</div>
</td>
<td class="text-xs text-gray-400 font-mono tracking-widest">NH-AST-2024</td>
<td class="text-[10px] text-gray-400 uppercase tracking-widest">High Jewelry</td>
<td>
<div class="flex flex-col space-y-1.5">
<div class="flex justify-between text-[9px] uppercase tracking-widest text-gray-500">
<span>2 / 5</span>
<span class="text-primary font-bold">40%</span>
</div>
<div class="gold-progress-bar">
<div class="gold-progress-fill w-[40%]"></div>
</div>
</div>
</td>
<td class="text-[10px] text-gray-400 uppercase tracking-widest">New York Flagship</td>
<td>
<span class="inline-flex items-center px-2 py-0.5 rounded text-[9px] font-bold uppercase tracking-[0.1em] bg-red-500/10 text-red-500 border border-red-500/20">
                                        Low Stock
                                    </span>
</td>
<td class="text-right">
<button class="text-gray-500 hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-white/5 transition-colors group">
<td>
<div class="flex items-center space-x-4">
<div class="w-12 h-12 bg-charcoal rounded border border-white/5 overflow-hidden flex-shrink-0">
<img alt="Elysian Drop Earrings" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDH5nC204GEocWxILC8C3qab5MQzmw8ekhd96f9vfl2hQE4OlEMxHTFcgNi3Lyv5GrZaWiUflNCGf6mVDJ5NyqvCVQI1e1yurq6HwPiaDq1hWQYh_gMK_Gf1xZOjOY_9ts1SIDmaVxAgMPNrDZ2NBH8oOwHESjCBaMcqeULJCM3roFRCp0aRmI2ECBrH_gOMMdfWIJYC-KwGD-nb8xGBcdvHFhAHjpmeNmqXAm4L792v9sEMsskcCEJDKBdUgAzB75KxM6U1StkW_M"/>
</div>
<div>
<p class="font-medium text-white tracking-wide">Elysian Drop Earrings</p>
<p class="text-[10px] text-gray-500 uppercase">Rose Gold, Pink Diamonds</p>
</div>
</div>
</td>
<td class="text-xs text-gray-400 font-mono tracking-widest">NH-ELY-7721</td>
<td class="text-[10px] text-gray-400 uppercase tracking-widest">Earrings</td>
<td>
<div class="flex flex-col space-y-1.5">
<div class="flex justify-between text-[9px] uppercase tracking-widest text-gray-500">
<span>8 / 10</span>
<span class="text-primary font-bold">80%</span>
</div>
<div class="gold-progress-bar">
<div class="gold-progress-fill w-[80%]"></div>
</div>
</div>
</td>
<td class="text-[10px] text-gray-400 uppercase tracking-widest">London Mayfair</td>
<td>
<span class="inline-flex items-center px-2 py-0.5 rounded text-[9px] font-bold uppercase tracking-[0.1em] bg-green-500/10 text-green-500 border border-green-500/20">
                                        In Stock
                                    </span>
</td>
<td class="text-right">
<button class="text-gray-500 hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-white/5 transition-colors group">
<td>
<div class="flex items-center space-x-4">
<div class="w-12 h-12 bg-charcoal rounded border border-white/5 overflow-hidden flex-shrink-0">
<img alt="Solstice Band" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByQ_Hetz5HV99mqFMRTxyvG5s9iqXDiRZ7gQuI3AgoPaZpl2wM31X9KUJveNFKBWM0AwrdYZv5YQg8L9JeD1LKeSDypnR0wVRXSr7DIFyEcif2YjdUOHVlg3EEUAErN9kFwbrNK0EgRTzCEqHV9NqgoP3BvXRQmCq5BYY7kwt41eBQ9JSef53-ikK2_gPb_za1Qi86MOzdP9BQB663E1rQ3BUs1aNRBxgdreZHsWWZuymdFy5FHLvNTqdgE7HRKPzo80-kYB78yR4"/>
</div>
<div>
<p class="font-medium text-white tracking-wide">Solstice Band</p>
<p class="text-[10px] text-gray-500 uppercase">Platinum, Baguette Cut</p>
</div>
</div>
</td>
<td class="text-xs text-gray-400 font-mono tracking-widest">NH-SOL-0129</td>
<td class="text-[10px] text-gray-400 uppercase tracking-widest">Rings</td>
<td>
<div class="flex flex-col space-y-1.5">
<div class="flex justify-between text-[9px] uppercase tracking-widest text-gray-500">
<span>1 / 15</span>
<span class="text-primary font-bold">7%</span>
</div>
<div class="gold-progress-bar">
<div class="gold-progress-fill w-[7%]"></div>
</div>
</div>
</td>
<td class="text-[10px] text-gray-400 uppercase tracking-widest">Paris Boutique</td>
<td>
<span class="inline-flex items-center px-2 py-0.5 rounded text-[9px] font-bold uppercase tracking-[0.1em] bg-red-500/10 text-red-500 border border-red-500/20">
                                        Low Stock
                                    </span>
</td>
<td class="text-right">
<button class="text-gray-500 hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-white/5 transition-colors group">
<td>
<div class="flex items-center space-x-4">
<div class="w-12 h-12 bg-charcoal rounded border border-white/5 overflow-hidden flex-shrink-0">
<img alt="Celestial Watch" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuALD8uSWTLp-CZLNlDT7mKQnBva31tsGdctpKDEVI0vxIETDn0kD1YBMQz4FO9SxOtcvW3cVfwu9e1m5bpp6DjT0OpsEuZCd6sYGs5dQyDlzh4PiArws2C1tRvMHLpkNi6f8RdoporjcKY7X2yatTm3N_bNBsx1nK-thJ58VNbmL_O2p89ZZ4w3mNYowxya192brHSUVeAYh9-RnD-yFwVaVTqpcu7mEz6xh3X0g6XP8vA4lLnsNzfukMU5WRwzElPlAZgWvaps3j8"/>
</div>
<div>
<p class="font-medium text-white tracking-wide">Celestial Moonphase</p>
<p class="text-[10px] text-gray-500 uppercase">White Gold Case, Alligator</p>
</div>
</div>
</td>
<td class="text-xs text-gray-400 font-mono tracking-widest">NH-WCH-8800</td>
<td class="text-[10px] text-gray-400 uppercase tracking-widest">Watchmaking</td>
<td>
<div class="flex flex-col space-y-1.5">
<div class="flex justify-between text-[9px] uppercase tracking-widest text-gray-500">
<span>4 / 4</span>
<span class="text-primary font-bold">100%</span>
</div>
<div class="gold-progress-bar">
<div class="gold-progress-fill w-[100%]"></div>
</div>
</div>
</td>
<td class="text-[10px] text-gray-400 uppercase tracking-widest">New York Flagship</td>
<td>
<span class="inline-flex items-center px-2 py-0.5 rounded text-[9px] font-bold uppercase tracking-[0.1em] bg-green-500/10 text-green-500 border border-green-500/20">
                                        In Stock
                                    </span>
</td>
<td class="text-right">
<button class="text-gray-500 hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-6 border-t border-white/10 flex items-center justify-between">
<p class="text-[10px] text-gray-500 uppercase tracking-[0.2em]">Showing 1-4 of 128 products</p>
<div class="flex space-x-2">
<button class="p-2 border border-white/10 hover:border-primary text-gray-500 hover:text-primary transition-all rounded-sm">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
<button class="p-2 border border-white/10 hover:border-primary text-gray-500 hover:text-primary transition-all rounded-sm">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
</div>
<div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="p-6 border-l border-primary/30 bg-white/5">
<p class="text-[9px] uppercase tracking-[0.3em] text-gray-500 mb-1">Total Collection Value</p>
<p class="text-xl font-light text-white">$4.2M</p>
</div>
<div class="p-6 border-l border-primary/30 bg-white/5">
<p class="text-[9px] uppercase tracking-[0.3em] text-gray-500 mb-1">Items Below Threshold</p>
<p class="text-xl font-light text-red-400">08 Pieces</p>
</div>
<div class="p-6 border-l border-primary/30 bg-white/5">
<p class="text-[9px] uppercase tracking-[0.3em] text-gray-500 mb-1">Inbound Stock (Weekly)</p>
<p class="text-xl font-light text-white">15 Items</p>
</div>
</div>
</div>
</main>
</div>

</body></html>