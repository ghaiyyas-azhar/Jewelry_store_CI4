<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Nahecididi Boutique Admin - Inventory Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style type="text/tailwindcss">
        @layer base {
            :root {
                --primary: #d4af37;--deep-charcoal: #121212;
                --marble-white: #fdfdfb;
                --panel-charcoal: #1c1c1c;
                --border-subtle: #2d2d2d;
            }
        }
        body { 
            font-family: 'Manrope', sans-serif; 
            background-color: var(--deep-charcoal);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: var(--deep-charcoal); }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--primary); }
        .matrix-container { 
            overflow-x: auto; 
            scroll-behavior: smooth;
            scrollbar-gutter: stable;
        }
        .sticky-col { position: sticky; left: 0; z-index: 20; }
        .marble-texture {
            background-color: var(--marble-white);
            background-image: linear-gradient(120deg, rgba(0,0,0,0.01) 0%, rgba(255,255,255,0) 100%);
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#d4af37",
                        "charcoal": "#121212",
                        "marble": "#fdfdfb",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    }
                },
            },
        }
    </script>
</head>
<body class="text-slate-300 font-display min-h-screen">
<nav class="fixed left-0 top-0 h-full w-20 border-r border-[var(--border-subtle)] bg-[var(--deep-charcoal)] flex flex-col items-center py-8 z-[60]">
<div class="mb-12">
<span class="material-symbols-outlined text-primary text-3xl">diamond</span>
</div>
<div class="flex flex-col gap-8">
<button class="text-primary"><span class="material-symbols-outlined">dashboard</span></button>
<button class="text-slate-500 hover:text-primary transition-colors"><span class="material-symbols-outlined">inventory_2</span></button>
<button class="text-slate-500 hover:text-primary transition-colors"><span class="material-symbols-outlined">storefront</span></button>
<button class="text-slate-500 hover:text-primary transition-colors"><span class="material-symbols-outlined">analytics</span></button>
<button class="text-slate-500 hover:text-primary transition-colors"><span class="material-symbols-outlined">settings</span></button>
</div>
</nav>
<div class="ml-20">
<header class="sticky top-0 z-50 bg-[var(--deep-charcoal)]/90 backdrop-blur-xl border-b border-[var(--border-subtle)] px-10 py-6">
<div class="flex items-center justify-between gap-8">
<div class="flex flex-col">
<h1 class="text-2xl font-light tracking-[0.15em] text-white uppercase">
                    Nahecididi <span class="text-primary font-medium">Boutique Admin</span>
</h1>
<p class="text-[10px] uppercase tracking-[0.3em] text-slate-500 mt-1">Global Inventory &amp; Store Availability Management</p>
</div>
<div class="flex-1 max-w-2xl relative">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-500">search</span>
<input class="w-full bg-[var(--panel-charcoal)] border border-[var(--border-subtle)] rounded-full py-2.5 pl-12 pr-6 text-sm focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-slate-600" placeholder="Search Boutique, SKU, or Collection..." type="text"/>
</div>
<div class="flex items-center gap-6">
<div class="flex flex-col items-end">
<span class="text-[9px] text-slate-500 uppercase tracking-widest">Global Status</span>
<div class="flex items-center gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
<span class="text-xs font-medium text-emerald-500 uppercase tracking-tighter">Systems Live</span>
</div>
</div>
<button class="bg-primary text-charcoal px-6 py-2.5 rounded-full text-[11px] font-bold uppercase tracking-widest hover:brightness-110 transition-all flex items-center gap-2 shadow-lg shadow-primary/10">
<span class="material-symbols-outlined text-sm">sync_alt</span>
                    Sync Storefront
                </button>
</div>
</div>
</header>
<main class="p-10">
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
<div class="bg-[var(--panel-charcoal)] border border-[var(--border-subtle)] p-6 rounded-2xl">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary">category</span>
<span class="text-[10px] bg-white/5 px-2 py-1 rounded text-slate-400 font-mono">+2.4%</span>
</div>
<p class="text-[10px] text-slate-500 uppercase tracking-[0.2em] mb-1">Total Assets</p>
<p class="text-2xl font-light text-white">4,812 <span class="text-xs text-slate-500 font-normal">Units</span></p>
</div>
<div class="bg-[var(--panel-charcoal)] border border-[var(--border-subtle)] p-6 rounded-2xl">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary">location_on</span>
<span class="text-[10px] bg-white/5 px-2 py-1 rounded text-slate-400 font-mono">14 Cities</span>
</div>
<p class="text-[10px] text-slate-500 uppercase tracking-[0.2em] mb-1">Active Boutiques</p>
<p class="text-2xl font-light text-white">28 <span class="text-xs text-slate-500 font-normal">Managed</span></p>
</div>
<div class="bg-[var(--panel-charcoal)] border border-primary/20 p-6 rounded-2xl relative overflow-hidden">
<div class="absolute top-0 left-0 w-1 h-full bg-primary"></div>
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary">priority_high</span>
</div>
<p class="text-[10px] text-primary uppercase tracking-[0.2em] mb-1">Stock Alerts</p>
<p class="text-2xl font-light text-white">14 <span class="text-xs text-slate-500 font-normal">Action Required</span></p>
</div>
<div class="bg-[var(--panel-charcoal)] border border-[var(--border-subtle)] p-6 rounded-2xl">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary">verified</span>
</div>
<p class="text-[10px] text-slate-500 uppercase tracking-[0.2em] mb-1">BOPIS Efficiency</p>
<p class="text-2xl font-light text-white">96.8% <span class="text-xs text-slate-500 font-normal">Fill Rate</span></p>
</div>
</div>
<div class="flex items-center justify-between mb-6 px-4">
<div class="flex items-center gap-8">
<div class="group cursor-pointer">
<span class="text-[10px] text-slate-500 uppercase tracking-widest block mb-1">Collection</span>
<div class="flex items-center gap-2 text-sm text-white font-medium">
                        All High Jewelry <span class="material-symbols-outlined text-sm text-primary">expand_more</span>
</div>
</div>
<div class="h-8 w-[1px] bg-[var(--border-subtle)]"></div>
<div class="group cursor-pointer">
<span class="text-[10px] text-slate-500 uppercase tracking-widest block mb-1">Product Type</span>
<div class="flex items-center gap-2 text-sm text-white font-medium">
                        Rings &amp; Necklaces <span class="material-symbols-outlined text-sm text-primary">expand_more</span>
</div>
</div>
<div class="h-8 w-[1px] bg-[var(--border-subtle)]"></div>
<div class="group cursor-pointer">
<span class="text-[10px] text-slate-500 uppercase tracking-widest block mb-1">Region</span>
<div class="flex items-center gap-2 text-sm text-white font-medium">
                        EMEA &amp; APAC <span class="material-symbols-outlined text-sm text-primary">expand_more</span>
</div>
</div>
</div>
<div class="flex items-center gap-4">
<button class="flex items-center gap-2 px-4 py-2 border border-[var(--border-subtle)] rounded text-[11px] uppercase tracking-widest text-slate-400 hover:text-white transition-all">
<span class="material-symbols-outlined text-sm">filter_list</span>
                    Advanced Filters
                </button>
<button class="flex items-center gap-2 px-4 py-2 bg-white/5 border border-[var(--border-subtle)] rounded text-[11px] uppercase tracking-widest text-slate-400 hover:text-white transition-all">
<span class="material-symbols-outlined text-sm">file_download</span>
                    Export Matrix
                </button>
</div>
</div>
<div class="matrix-container rounded-2xl border border-[var(--border-subtle)] bg-[var(--panel-charcoal)] shadow-2xl overflow-hidden">
<table class="w-full border-collapse">
<thead>
<tr class="bg-[var(--deep-charcoal)]/50 border-b border-[var(--border-subtle)]">
<th class="sticky-col top-0 left-0 bg-[var(--panel-charcoal)] z-30 p-6 text-left min-w-[340px] border-r border-[var(--border-subtle)]">
<span class="text-[11px] uppercase tracking-[0.3em] font-semibold text-primary">Product Master</span>
</th>
<th class="p-6 min-w-[180px] border-r border-[var(--border-subtle)] text-center">
<p class="text-[9px] text-slate-500 uppercase tracking-[0.2em] mb-1">New York</p>
<h3 class="text-xs font-bold text-white tracking-widest uppercase">5th Avenue</h3>
</th>
<th class="p-6 min-w-[180px] border-r border-[var(--border-subtle)] text-center">
<p class="text-[9px] text-slate-500 uppercase tracking-[0.2em] mb-1">Paris</p>
<h3 class="text-xs font-bold text-white tracking-widest uppercase">Vendôme</h3>
</th>
<th class="p-6 min-w-[180px] border-r border-[var(--border-subtle)] text-center">
<p class="text-[9px] text-slate-500 uppercase tracking-[0.2em] mb-1">London</p>
<h3 class="text-xs font-bold text-white tracking-widest uppercase">Bond St.</h3>
</th>
<th class="p-6 min-w-[180px] border-r border-[var(--border-subtle)] text-center">
<p class="text-[9px] text-slate-500 uppercase tracking-[0.2em] mb-1">Tokyo</p>
<h3 class="text-xs font-bold text-white tracking-widest uppercase">Ginza</h3>
</th>
<th class="p-6 min-w-[180px] border-r border-[var(--border-subtle)] text-center">
<p class="text-[9px] text-slate-500 uppercase tracking-[0.2em] mb-1">Dubai</p>
<h3 class="text-xs font-bold text-white tracking-widest uppercase">The Mall</h3>
</th>
<th class="p-6 min-w-[180px] border-[var(--border-subtle)] text-center">
<p class="text-[9px] text-slate-500 uppercase tracking-[0.2em] mb-1">Hong Kong</p>
<h3 class="text-xs font-bold text-white tracking-widest uppercase">Landmark</h3>
</th>
</tr>
</thead>
<tbody class="divide-y divide-[var(--border-subtle)]">
<tr class="group hover:bg-white/[0.02] transition-colors">
<td class="sticky-col left-0 bg-[var(--panel-charcoal)] z-20 p-5 border-r border-[var(--border-subtle)] group-hover:bg-[#1f1f1f] transition-colors">
<div class="flex items-center gap-5">
<div class="relative w-20 h-20 bg-black rounded overflow-hidden border border-white/10 group-hover:border-primary/40 transition-all">
<img alt="Jewelry Item" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDy6WFnB8KHteotalc1q0AzizIrRHH5ZW3x4aTh5jhY3Y_VRCRJOzkwzcGd-gPh4ijHgt5UbNLXU1_sp263hUnhXrIRFvHjds97nlqIsnY24ngY4fmwQhyWLeo9vj6v0lKmY3NlMfFRqStctPbABsbK_mbmN7UxDUDSY-8l3OyhqIupbwmVM0lRKRKSNdz57obYV5c5Z4H20bL80EqpdkCtMCrSNwgu9ZGXEuRNCBzSCVH5M-rYKl42iOSeyfqxPCmThjt3nldCOt0"/>
</div>
<div>
<h4 class="text-[13px] font-medium text-white tracking-wide uppercase">Étoile Solitaire</h4>
<p class="text-[10px] text-slate-500 font-mono mt-1">SKU: LUX-77210-PLAT</p>
<div class="flex gap-2 mt-2">
<span class="px-2 py-0.5 border border-primary/30 text-primary text-[8px] font-bold rounded uppercase tracking-widest">Bridal</span>
<span class="px-2 py-0.5 border border-white/10 text-slate-400 text-[8px] font-bold rounded uppercase tracking-widest">Platinum</span>
</div>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)]">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-primary">12</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)]">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">4</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)] bg-primary/5">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-bold text-primary">1</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">Low Stock</span>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)]">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">8</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)] opacity-40">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-slate-500">0</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-slate-600 font-bold">Out of Stock</span>
</div>
</div>
</td>
<td class="p-5">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">3</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
</tr>
<tr class="group hover:bg-white/[0.02] transition-colors">
<td class="sticky-col left-0 bg-[var(--panel-charcoal)] z-20 p-5 border-r border-[var(--border-subtle)] group-hover:bg-[#1f1f1f] transition-colors">
<div class="flex items-center gap-5">
<div class="relative w-20 h-20 bg-black rounded overflow-hidden border border-white/10 group-hover:border-primary/40 transition-all">
<img alt="Jewelry Item" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBS9N-HfHbkX0G-c6yqTAKHp6cxeS0cJaQ7RCycv_ONp_TvkBhsbSGeurGsUQRsuefYdrVxUOw6EN5EwHqCJnF-4HP1ikfuM57AVX9LN2qUQ67NglJK7C5vd4xtKZdDYPCQQqbgEBzLD_Tw99K2j0JJDjNNuCUQbjMWKINWL95h66hFe9ZESK1DDuoAaQrNz05BXi7qADIXSBB6wTrz8Jm3lut6RO0pEwN12ihp2fuqSCq-RKOr11mHAiktjGApwzCIw5nbrxdAjk8"/>
</div>
<div>
<h4 class="text-[13px] font-medium text-white tracking-wide uppercase">Aurelia Gold Choker</h4>
<p class="text-[10px] text-slate-500 font-mono mt-1">SKU: LUX-902-18K</p>
<div class="flex gap-2 mt-2">
<span class="px-2 py-0.5 border border-primary/30 text-primary text-[8px] font-bold rounded uppercase tracking-widest">High Jewelry</span>
<span class="px-2 py-0.5 border border-white/10 text-slate-400 text-[8px] font-bold rounded uppercase tracking-widest">18k Gold</span>
</div>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)]">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">2</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)]">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">5</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)]">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">3</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)] bg-primary/5">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-bold text-primary">1</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">Low Stock</span>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)]">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">4</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
<td class="p-5">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">6</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
</tr>
<tr class="group hover:bg-white/[0.02] transition-colors">
<td class="sticky-col left-0 bg-[var(--panel-charcoal)] z-20 p-5 border-r border-[var(--border-subtle)] group-hover:bg-[#1f1f1f] transition-colors">
<div class="flex items-center gap-5">
<div class="relative w-20 h-20 bg-black rounded overflow-hidden border border-white/10 group-hover:border-primary/40 transition-all">
<img alt="Jewelry Item" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBSyVTNwIwow3i6MDSLArnTmgAxbYAjmoN-yWpDoF3m-twKQLB_Up1qjIupiSEW0TWHGiLZKXtIvUukSC5G1PZVCKjxoBHKTM-8KuacTQneLUEfxLixrbhgagDk1l2_QckJPj_gHkwGk_LnlpYa9oWM_Kgl9jkq_oA61R25SuMP7xgEZUggMZTUX_tpzhRAKyF7xkRmXH87b01ymhtTp0OwG-VdMi-75Wfz9ct6FmtJv1nUIPNQ9Dgw_6FIjeiRZXGDP90jrBUP9bA"/>
</div>
<div>
<h4 class="text-[13px] font-medium text-white tracking-wide uppercase">Celestial Studs</h4>
<p class="text-[10px] text-slate-500 font-mono mt-1">SKU: LUX-1140-DIA</p>
<div class="flex gap-2 mt-2">
<span class="px-2 py-0.5 border border-primary/30 text-primary text-[8px] font-bold rounded uppercase tracking-widest">Classic</span>
<span class="px-2 py-0.5 border border-white/10 text-slate-400 text-[8px] font-bold rounded uppercase tracking-widest">Diamond</span>
</div>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)]">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">15</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)]">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">22</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)]">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">11</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)]">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">9</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
<td class="p-5 border-r border-[var(--border-subtle)]">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">18</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
<td class="p-5">
<div class="flex flex-col items-center gap-3">
<span class="text-lg font-light text-white">14</span>
<div class="flex flex-col items-center gap-1.5">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
<span class="text-[8px] uppercase tracking-widest text-primary font-bold">In-Stock</span>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<footer class="mt-10 flex items-center justify-between pb-20">
<div class="flex items-center gap-6">
<p class="text-[11px] text-slate-500 uppercase tracking-widest">Displaying 1-25 of 1,248 Items</p>
<div class="flex items-center gap-1">
<button class="w-8 h-8 flex items-center justify-center text-slate-500 hover:text-white transition-colors"><span class="material-symbols-outlined text-base">chevron_left</span></button>
<button class="w-8 h-8 flex items-center justify-center rounded border border-primary text-primary text-[10px] font-bold">01</button>
<button class="w-8 h-8 flex items-center justify-center rounded hover:bg-white/5 text-slate-400 text-[10px] transition-colors">02</button>
<button class="w-8 h-8 flex items-center justify-center rounded hover:bg-white/5 text-slate-400 text-[10px] transition-colors">03</button>
<span class="text-slate-700 px-2">...</span>
<button class="w-8 h-8 flex items-center justify-center rounded hover:bg-white/5 text-slate-400 text-[10px] transition-colors">50</button>
<button class="w-8 h-8 flex items-center justify-center text-slate-500 hover:text-white transition-colors"><span class="material-symbols-outlined text-base">chevron_right</span></button>
</div>
</div>
<div class="flex items-center gap-4">
<div class="bg-primary/5 border border-primary/20 px-4 py-2 rounded-full flex items-center gap-3">
<span class="w-2 h-2 rounded-full bg-primary shadow-[0_0_8px_var(--primary)]"></span>
<span class="text-[10px] font-bold text-primary uppercase tracking-[0.2em]">Real-time Inventory Link Active</span>
</div>
<button class="flex items-center gap-2 px-5 py-2.5 bg-white text-charcoal rounded-full text-[11px] font-bold uppercase tracking-widest hover:bg-primary transition-all">
<span class="material-symbols-outlined text-sm">inventory</span>
                    Quick Stock Entry
                </button>
</div>
</footer>
</main>
<div class="fixed bottom-10 right-10 bg-white/5 backdrop-blur-2xl border border-white/10 px-6 py-4 rounded-2xl flex items-center gap-6 shadow-2xl z-50">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-emerald-500/20 flex items-center justify-center">
<span class="material-symbols-outlined text-emerald-500 text-lg">check_circle</span>
</div>
<div>
<p class="text-[11px] text-white font-medium uppercase tracking-wider">Sync Completed</p>
<p class="text-[9px] text-slate-400">All boutique levels updated successfully.</p>
</div>
</div>
<div class="h-8 w-[1px] bg-white/10"></div>
<button class="text-primary text-[10px] font-bold uppercase tracking-widest hover:text-white transition-colors">View Logs</button>
</div>
</div>

</body></html>