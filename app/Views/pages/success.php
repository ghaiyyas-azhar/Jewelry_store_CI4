<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Nahecididi | Digital Pickup Pass</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
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
                        "luxury-charcoal": "#1a1a1a",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
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
        @media print {
            .no-print { display: none !important; }
            .print-only { display: block !important; }
            body { background: white !important; }
            .pass-card { border: 1px solid #c59f59 !important; box-shadow: none !important; }
        }
        .luxury-gradient {
            background: linear-gradient(135deg, rgba(197, 159, 89, 0.05) 0%, rgba(197, 159, 89, 0) 100%);
        }
        .qr-glow {
            box-shadow: 0 0 20px rgba(197, 159, 89, 0.15);
        }
        .brand-tracking {
            letter-spacing: 0.4em;
        }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-luxury-charcoal dark:text-gray-100 min-h-screen antialiased">
<nav class="no-print border-b border-primary/10 py-6 px-8 flex justify-between items-center bg-white dark:bg-background-dark/50 backdrop-blur-md sticky top-0 z-50">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-3xl">diamond</span>
<span class="brand-tracking uppercase font-bold text-xl">NAHECIDIDI</span>
</div>
<div class="flex items-center gap-6 text-sm uppercase tracking-widest font-medium">
<a class="hover:text-primary transition-colors" href="#">Collections</a>
<a class="hover:text-primary transition-colors" href="#">Boutiques</a>
<a class="material-icons-round text-2xl hover:text-primary transition-colors" href="#">person_outline</a>
</div>
</nav>
<main class="max-w-5xl mx-auto px-4 py-12 lg:py-20">
<header class="text-center mb-16 no-print">
<div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 mb-6">
<span class="material-icons-round text-primary text-4xl">check_circle</span>
</div>
<h1 class="text-4xl lg:text-5xl font-extralight tracking-tight mb-4">Your piece is being prepared.</h1>
<p class="text-luxury-charcoal/60 dark:text-gray-400 max-w-lg mx-auto leading-relaxed text-lg">
            Thank you for choosing Nahecididi. We are getting your order ready for collection at our flagship boutique.
        </p>
</header>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
<section class="lg:col-span-7">
<div class="pass-card bg-luxury-charcoal rounded-xl shadow-2xl overflow-hidden relative border border-white/5">
<div class="absolute inset-0 opacity-10 pointer-events-none luxury-gradient"></div>
<div class="border-b border-white/5 bg-black/20 p-6 flex flex-col items-center justify-center text-center relative z-10">
<div class="flex items-center gap-2 mb-1">
<span class="material-symbols-outlined text-primary text-2xl">diamond</span>
<span class="brand-tracking uppercase font-bold text-white text-lg">NAHECIDIDI</span>
</div>
<p class="text-[10px] text-primary/80 uppercase tracking-[0.3em] font-medium">Official Digital Pickup Pass</p>
</div>
<div class="p-8 lg:p-12 relative z-10">
<div class="flex justify-between items-start mb-12">
<div>
<p class="text-primary uppercase tracking-[0.2em] text-xs font-bold mb-1">Confirmation Details</p>
<h2 class="text-white text-2xl font-light">Order #NAH-982410</h2>
</div>
<div class="text-right">
<p class="text-white/40 uppercase tracking-widest text-[10px] mb-1">Status</p>
<span class="px-3 py-1 bg-primary/20 text-primary border border-primary/30 rounded-full text-[10px] uppercase font-bold tracking-tighter">Ready in 2h</span>
</div>
</div>
<div class="bg-white rounded-xl p-8 mb-12 flex flex-col items-center justify-center qr-glow">
<div class="w-48 h-48 mb-4 flex items-center justify-center border-4 border-primary/5 rounded-lg">
<img alt="Scan ready QR Code for order pickup" class="w-full h-full object-contain" data-alt="Modern QR code for digital store pickup" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDV78ysT1k1-jmYiTvC-lbTGHc3Rs20PrUIVUwjG0o2yCK0HmoDvx3WQMjpQy8j5YkxFzW1CL23XztWnJspkouV7GaFXEsM0Z1vhdFaers33qXc2r9qKM6x0oHPkw9CSHGmw3c_N0UgWtACx9QTFtdBMmgctuY3lhbVuH1Ok3bv37kbs--yVhWLrcDJaNXGjgomQtxu3Tm5oNpUfCWMkbjat_yYGPS9a0aTXAsWV4e0_6CNi0uICutx1Lfwx0pdPTAi0_KSnLU2O_c"/>
</div>
<p class="text-luxury-charcoal/40 text-[10px] uppercase tracking-widest font-semibold">Scan at Concierge Desk</p>
</div>
<div class="grid grid-cols-2 gap-8 border-t border-white/10 pt-8">
<div>
<h4 class="text-white/40 uppercase tracking-widest text-[10px] mb-3">Pickup Location</h4>
<p class="text-white text-sm font-medium leading-relaxed">Fifth Avenue Flagship<br/>711 5th Ave, New York, NY</p>
<a class="text-primary text-xs flex items-center gap-1 mt-2 hover:underline" href="#">
<span class="material-icons-round text-sm">near_me</span> View Map
                            </a>
</div>
<div>
<h4 class="text-white/40 uppercase tracking-widest text-[10px] mb-3">Pickup Window</h4>
<p class="text-white text-sm font-medium leading-relaxed">Today, Oct 24<br/>11:00 AM - 8:00 PM</p>
<p class="text-white/40 text-xs mt-2 italic">Standard boutique hours</p>
</div>
</div>
</div>
<div class="h-4 bg-primary flex gap-2 overflow-hidden items-center justify-center">
<div class="w-2 h-2 rounded-full bg-luxury-charcoal/20 shrink-0"></div>
<div class="w-2 h-2 rounded-full bg-luxury-charcoal/20 shrink-0"></div>
<div class="w-2 h-2 rounded-full bg-luxury-charcoal/20 shrink-0"></div>
<div class="w-2 h-2 rounded-full bg-luxury-charcoal/20 shrink-0"></div>
<div class="w-2 h-2 rounded-full bg-luxury-charcoal/20 shrink-0"></div>
<div class="w-2 h-2 rounded-full bg-luxury-charcoal/20 shrink-0"></div>
<div class="w-2 h-2 rounded-full bg-luxury-charcoal/20 shrink-0"></div>
<div class="w-2 h-2 rounded-full bg-luxury-charcoal/20 shrink-0"></div>
</div>
</div>
<div class="mt-8 flex flex-wrap gap-4 no-print">
<button class="flex-1 min-w-[180px] bg-primary text-white py-4 rounded-lg font-bold tracking-widest uppercase text-xs flex items-center justify-center gap-2 hover:bg-primary/90 transition-all shadow-lg shadow-primary/20">
<span class="material-icons-round text-lg">download</span> Download PDF
                </button>
<button class="flex-1 min-w-[180px] border border-primary/30 text-primary py-4 rounded-lg font-bold tracking-widest uppercase text-xs flex items-center justify-center gap-2 hover:bg-primary/5 transition-all" onclick="window.print()">
<span class="material-icons-round text-lg">print</span> Print Pass
                </button>
<button class="flex-1 min-w-[180px] bg-black text-white py-4 rounded-lg font-bold tracking-widest uppercase text-xs flex items-center justify-center gap-2 hover:bg-black/90 transition-all">
<span class="material-icons-round text-lg">add_to_home_screen</span> Apple Wallet
                </button>
</div>
</section>
<aside class="lg:col-span-5 space-y-8">
<div class="bg-white dark:bg-luxury-charcoal/50 p-8 rounded-xl border border-primary/10">
<h3 class="text-lg font-light mb-6 tracking-wide">Essential for Pickup</h3>
<ul class="space-y-6">
<li class="flex gap-4">
<div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
<span class="material-icons-round text-primary text-xl">badge</span>
</div>
<div>
<p class="font-bold text-sm">Valid Government ID</p>
<p class="text-xs text-luxury-charcoal/60 dark:text-gray-400 mt-1 leading-relaxed">Passport, Driver's License or National ID matching the name on order.</p>
</div>
</li>
<li class="flex gap-4">
<div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
<span class="material-icons-round text-primary text-xl">qr_code_2</span>
</div>
<div>
<p class="font-bold text-sm">Digital or Printed Pass</p>
<p class="text-xs text-luxury-charcoal/60 dark:text-gray-400 mt-1 leading-relaxed">Present the QR code on your phone or bring a printed copy.</p>
</div>
</li>
<li class="flex gap-4">
<div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
<span class="material-icons-round text-primary text-xl">credit_score</span>
</div>
<div>
<p class="font-bold text-sm">Original Payment Method</p>
<p class="text-xs text-luxury-charcoal/60 dark:text-gray-400 mt-1 leading-relaxed">Please bring the card used for the transaction for verification.</p>
</div>
</li>
</ul>
</div>
<div class="border-t border-primary/10 pt-8">
<div class="flex justify-between items-center mb-6">
<h3 class="text-lg font-light tracking-wide">Order Summary</h3>
<span class="text-xs text-luxury-charcoal/40 uppercase tracking-widest">2 Items</span>
</div>
<div class="space-y-4 mb-6">
<div class="flex gap-4 items-center">
<div class="w-16 h-16 bg-white dark:bg-white/5 rounded-lg border border-primary/10 p-1">
<img alt="Diamond solitaire ring" class="w-full h-full object-cover rounded-md" data-alt="Luxury diamond solitaire engagement ring white gold" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAf9Hz8tDF_T0eb4ScPE8FhK8jlWbhQH8hP_B5uknclMXJJUNva5z2fP-2RPooVAqUju1p3zsh7GGKTZNRgpMJYAv2UxaqSFBM4TPtgPqaqPfv0CSGPjjRqwIEu5pc0BoJdMOJ508Y98hVpeAJeeSk12N6R7RIDP3h_D_WDO_THe_EmPAbxUXaZi-8xGr7pdDUv3pR31OUVet6lWY0mfHPZJGNnby0BrwxYEBzXjWohc4bkTMCMsva-n-zeIua-HzDTvD4BnCQVYbM"/>
</div>
<div class="flex-1">
<p class="text-sm font-semibold">Eternal Solitaire Ring</p>
<p class="text-[11px] text-luxury-charcoal/40 dark:text-gray-400">18k White Gold • 1.5 Carat</p>
</div>
<p class="text-sm font-medium">$12,400</p>
</div>
<div class="flex gap-4 items-center">
<div class="w-16 h-16 bg-white dark:bg-white/5 rounded-lg border border-primary/10 p-1">
<img alt="Gold link bracelet" class="w-full h-full object-cover rounded-md" data-alt="Elegant 18k gold link bracelet jewelry" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpGK0mBzlyH0R1g5q_jm-4lHFy4_MyKHyn-mDH4TNlaADclhmUmrtqabFINI1Z4NTkZWRHS6GnRN8ScPiVp3d-_AoD6kvVOAu8gnV2_tug8E-2MgOalxcqzrgx2tr-sb2-a4oOFIH6QrB7-HLbYz7J8An9PIksFNgYf7akbJ9deaj0ZpPuucRULcyKjV3Gkr-K16xnD7O9EFhP9l2JoEVuJCnw28NVKdexlZn3Tp-KFXgmJlpAWGeIvED1mQ2ExEyn8J5vG5GeiYM"/>
</div>
<div class="flex-1">
<p class="text-sm font-semibold">Classic Link Bracelet</p>
<p class="text-[11px] text-luxury-charcoal/40 dark:text-gray-400">18k Yellow Gold</p>
</div>
<p class="text-sm font-medium">$3,850</p>
</div>
</div>
<div class="bg-primary/5 p-4 rounded-lg space-y-2">
<div class="flex justify-between text-xs">
<span class="text-luxury-charcoal/60 dark:text-gray-400">Subtotal</span>
<span>$16,250.00</span>
</div>
<div class="flex justify-between text-xs">
<span class="text-luxury-charcoal/60 dark:text-gray-400">Boutique Tax</span>
<span>$1,442.18</span>
</div>
<div class="flex justify-between text-sm font-bold border-t border-primary/10 pt-2 mt-2">
<span>Total</span>
<span class="text-primary">$17,692.18</span>
</div>
</div>
</div>
<div class="text-center pt-8">
<p class="text-xs text-luxury-charcoal/40 dark:text-gray-400 uppercase tracking-widest mb-4">Need Assistance?</p>
<div class="flex justify-center gap-8">
<a class="text-sm font-medium flex items-center gap-2 hover:text-primary transition-colors" href="tel:+12125550198">
<span class="material-icons-round text-primary">call</span> (212) 555-0198
                    </a>
<a class="text-sm font-medium flex items-center gap-2 hover:text-primary transition-colors" href="mailto:concierge@nahecididi.com">
<span class="material-icons-round text-primary">mail</span> Concierge
                    </a>
</div>
</div>
</aside>
</div>
</main>
<section class="mt-20 border-t border-primary/10 no-print">
<div class="h-[400px] bg-gray-200 relative">
<div class="absolute inset-0 bg-luxury-charcoal/40 flex items-center justify-center">
<div class="bg-white p-6 rounded-xl shadow-2xl text-center max-w-xs transform -translate-y-8">
<span class="material-icons-round text-primary text-3xl mb-2">location_on</span>
<h4 class="font-bold mb-1">Nahecididi Flagship</h4>
<p class="text-xs text-luxury-charcoal/60 mb-4">711 5th Ave, New York, NY 10022</p>
<button class="text-xs uppercase font-bold text-primary tracking-widest">Open in Maps</button>
</div>
</div>
<img alt="New York Fifth Avenue Map" class="w-full h-full object-cover grayscale opacity-50" data-location="New York, USA" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrjsnkGpfPiFZk9Ewoj7sKkfJoy-7-Q6OMb_dBGYng4EiFj5vOffXvOnUJfs8QFB6DfP9aPVBTaHUYAltlvzLkWY_p_Ja_IBf_RCYaL0naEO3fMEroynNhJk8osT3YZ-mF0bxsgUSd2CqnNkYKnDtPDV1CBFP_jhwtFHEzpxyL3pkd-5x0btDMYDp0m4u5am7riIwOpC4LcW1u3BVx-v8yO76dqrFisOwLt_IlojUrcP2oSjQLCFn_wgxOQAHJg8xM-NRswZjlGvI"/>
</div>
</section>
<footer class="py-12 px-8 border-t border-primary/10 no-print">
<div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
<div class="flex items-center gap-2 grayscale opacity-50">
<span class="material-symbols-outlined text-primary text-xl">diamond</span>
<span class="brand-tracking uppercase font-bold text-sm">NAHECIDIDI</span>
</div>
<div class="flex gap-8 text-[10px] uppercase tracking-widest font-semibold text-luxury-charcoal/40 dark:text-gray-500">
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-primary transition-colors" href="#">Terms of Sale</a>
<a class="hover:text-primary transition-colors" href="#">Pickup Policy</a>
</div>
<p class="text-[10px] text-luxury-charcoal/30">© 2024 Nahecididi Luxury Group.</p>
</div>
</footer>

</body></html>