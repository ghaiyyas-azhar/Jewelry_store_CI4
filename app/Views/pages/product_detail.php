<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?= $product['name'] ?> | Nahecididi</title>
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
<body class="marble-bg">
<header class="border-b border-primary/10 bg-white/90 backdrop-blur-md sticky top-0 z-50">
<div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
<div class="flex items-center space-x-12">
<a class="text-2xl font-bold tracking-[0.3em] text-charcoal uppercase" href="#">Nahecididi</a>
<nav class="hidden lg:flex space-x-8 text-[11px] font-semibold tracking-[0.2em]">
<a class="hover:text-primary transition-colors" href="#">NEW ARRIVALS</a>
<a class="text-primary" href="#">COLLECTIONS</a>
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
<main class="max-w-7xl mx-auto px-6 py-12">
<nav class="flex text-[10px] uppercase tracking-widest text-gray-400 mb-12">
<a class="hover:text-primary transition-colors" href="#">Collections</a>
<span class="mx-3">/</span>
<a class="hover:text-primary transition-colors" href="#">Celestial Light</a>
<span class="mx-3">/</span>
<span class="text-charcoal font-bold"><?= $product['name'] ?></span>
</nav>
<div class="flex flex-col lg:flex-row gap-16">
<div class="w-full lg:w-[55%]">
<div class="relative group bg-marble-accent aspect-square overflow-hidden rounded shadow-sm">
<img alt="<?= $product['name'] ?>" 
     class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" 
     src="<?= $product['image'] ?>"/>
<div class="absolute bottom-6 left-6 flex space-x-2">
<div class="w-2 h-2 rounded-full bg-primary"></div>
<div class="w-2 h-2 rounded-full bg-white/50 hover:bg-white transition-colors cursor-pointer"></div>
<div class="w-2 h-2 rounded-full bg-white/50 hover:bg-white transition-colors cursor-pointer"></div>
</div>
</div>
<div class="grid grid-cols-4 gap-4 mt-4">
<div class="aspect-square bg-marble-accent cursor-pointer opacity-100 border border-primary/30">
<img alt="Detail 1" class="w-full h-full object-cover" src="<?= $product['image'] ?>"/>
</div>
<div class="aspect-square bg-marble-accent cursor-pointer opacity-60 hover:opacity-100 transition-opacity">
<img alt="Detail 2" class="w-full h-full object-cover grayscale" src="<?= $product['image'] ?>"/>
</div>
<div class="aspect-square bg-marble-accent cursor-pointer opacity-60 hover:opacity-100 transition-opacity">
<img alt="Detail 3" class="w-full h-full object-cover scale-150" src="<?= $product['image'] ?>"/>
</div>
<div class="aspect-square bg-marble-accent flex items-center justify-center cursor-pointer opacity-60 hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-3xl">play_circle</span>
</div>
</div>
</div>
<div class="w-full lg:w-[45%] flex flex-col">
<div class="border-b border-gray-100 pb-8">
<p class="text-[11px] uppercase tracking-[0.4em] text-primary font-bold mb-4"><?= $product['collection_name'] ?> Collection</p>
<h1 class="text-4xl lg:text-5xl font-light tracking-tight text-charcoal mb-4">
    <?= $product['name'] ?>
</h1>
<p class="text-2xl font-light text-charcoal">
    $<?= number_format($product['price']) ?>
</p>
</div>
<div class="py-8 space-y-6">
<div>
<h3 class="text-xs font-bold uppercase tracking-widest text-charcoal mb-3">Specifications</h3>
<ul class="text-sm text-gray-600 space-y-2 leading-relaxed">
<li class="flex justify-between border-b border-gray-50 py-2">
<span>Material</span>
<span class="text-charcoal font-medium"><?= $product['material'] ?></span>
</li>
<li class="flex justify-between border-b border-gray-50 py-2">
<span>Gemstones</span>
<span class="text-charcoal font-medium">Round Brilliant Diamonds</span>
</li>
<li class="flex justify-between border-b border-gray-50 py-2">
<span>Carat Weight</span>
<span class="text-charcoal font-medium">4.5 Carat Total Weight</span>
</li>
<li class="flex justify-between border-b border-gray-50 py-2">
<span>Clarity</span>
<span class="text-charcoal font-medium">VVS1 - E Color</span>
</li>
</ul>
</div>
<div class="pt-4 space-y-4">
<button class="luxury-button w-full bg-charcoal text-white py-5 text-xs font-bold tracking-[0.2em] uppercase hover:bg-black">
                        ADD TO BAG
                    </button>
<a href="<?= base_url('pickup'); ?>" 
   class="luxury-button w-full border-2 border-primary text-primary py-5 text-xs font-bold tracking-[0.2em] uppercase hover:bg-primary hover:text-white text-center block">
    RESERVE FOR BOUTIQUE PICKUP
</a>
</div>
<div class="bg-primary/5 p-8 border border-primary/10 rounded-sm mt-8">
<div class="flex items-center justify-between mb-6">
<h3 class="text-xs font-bold uppercase tracking-widest text-charcoal flex items-center">
<span class="material-symbols-outlined mr-2 text-primary">store</span>
                            Check Boutique Availability
                        </h3>
<div class="bg-green-100 text-green-800 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-tighter">
                            Ready in 2 Hours
                        </div>
</div>
<div class="space-y-4">
<div class="relative">
<select class="w-full bg-white border border-gray-200 py-3 pl-4 pr-10 text-xs font-medium focus:ring-primary focus:border-primary appearance-none uppercase tracking-widest outline-none">
<option>New York - Fifth Avenue Flagship</option>
<option>Paris - Place Vendôme</option>
<option>London - Bond Street</option>
<option>Dubai - Mall of the Emirates</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-2.5 text-primary pointer-events-none">expand_more</span>
</div>
<p class="text-[11px] text-gray-500 italic flex items-center">
<span class="material-symbols-outlined text-xs mr-1">info</span>
                            Visit us for a personalized fitting session with our experts.
                        </p>
</div>
</div>
<div class="grid grid-cols-2 gap-8 pt-8 text-[10px] uppercase tracking-[0.2em] text-gray-400">
<div class="flex flex-col items-center text-center space-y-3">
<span class="material-symbols-outlined text-2xl text-primary">verified_user</span>
<span>Lifetime Warranty</span>
</div>
<div class="flex flex-col items-center text-center space-y-3">
<span class="material-symbols-outlined text-2xl text-primary">local_shipping</span>
<span>Complimentary Shipping</span>
</div>
</div>
</div>
</div>
</div>
<div class="mt-24 border-t border-gray-100 pt-12">
<div class="flex space-x-12 border-b border-gray-100 mb-8 overflow-x-auto pb-px">
<button class="pb-4 text-xs font-bold uppercase tracking-widest border-b-2 border-primary text-charcoal whitespace-nowrap">The Design</button>
<button class="pb-4 text-xs font-bold uppercase tracking-widest border-b-2 border-transparent text-gray-400 hover:text-charcoal whitespace-nowrap transition-colors">Details &amp; Care</button>
<button class="pb-4 text-xs font-bold uppercase tracking-widest border-b-2 border-transparent text-gray-400 hover:text-charcoal whitespace-nowrap transition-colors">Shipping &amp; Returns</button>
</div>
<div class="max-w-3xl">
<p class="text-lg leading-relaxed text-gray-600 font-light italic mb-6">
                "The Astra Diamond Choker captures the ethereal glow of the midnight sky. Each diamond is hand-selected and meticulously set in 18k white gold to create a continuous ribbon of light that dances with every movement."
            </p>
<p class="text-sm leading-relaxed text-gray-500">
                Inspired by celestial formations, this masterpiece from the Nahecididi archives represents the pinnacle of contemporary high jewelry. Our master artisans spent over 80 hours hand-setting each individual stone to ensure a seamless flow and maximum brilliance.
            </p>
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