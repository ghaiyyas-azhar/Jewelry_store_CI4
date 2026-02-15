<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Astra Choker Pickup Scheduler | Nahecididi</title>
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
        .calendar-day {
            @apply aspect-square flex items-center justify-center text-xs cursor-pointer transition-colors border border-transparent hover:border-primary/30;
        }
        .calendar-day.active {
            @apply bg-charcoal text-white;
        }
        .calendar-day.muted {
            @apply text-gray-300 pointer-events-none;
        }
        .time-slot {
            @apply border border-gray-200 py-3 text-center text-[10px] tracking-widest uppercase cursor-pointer transition-all hover:border-primary hover:text-primary;
        }
        .time-slot.selected {
            @apply border-primary bg-primary/5 text-primary font-bold;
        }
    </style>
</head>
<body class="marble-bg min-h-screen flex flex-col">
<header class="border-b border-primary/10 bg-white/90 backdrop-blur-md sticky top-0 z-50">
<div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
<div class="flex items-center space-x-12">
<a class="text-2xl font-bold tracking-[0.3em] text-charcoal uppercase" href="#">Nahecididi</a>
</div>
<div class="flex items-center space-x-4 text-[10px] tracking-[0.2em] font-bold text-gray-400 uppercase">
<span>Secure Checkout</span>
<span class="material-symbols-outlined text-sm">lock</span>
</div>
</div>
</header>
<main class="flex-grow max-w-6xl mx-auto w-full px-6 py-12">
<div class="flex flex-col lg:flex-row gap-16">
<div class="flex-grow lg:w-3/5">
<h1 class="text-3xl font-light tracking-tight mb-8">Schedule Your Boutique Pickup</h1>
<section class="mb-10">
<div class="flex items-center justify-between mb-6">
<h2 class="text-xs font-bold uppercase tracking-[0.2em]">Select Date</h2>
<span class="text-[10px] text-primary uppercase font-bold tracking-widest">October 2024</span>
</div>
<div class="bg-white border border-gray-100 p-6 shadow-sm">
<div class="grid grid-cols-7 gap-1 mb-4 text-center text-[9px] uppercase tracking-widest text-gray-400 font-bold">
<div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div><div>Sun</div>
</div>
<div class="grid grid-cols-7 gap-1">
<div class="calendar-day muted">30</div>
<div class="calendar-day">1</div>
<div class="calendar-day">2</div>
<div class="calendar-day">3</div>
<div class="calendar-day">4</div>
<div class="calendar-day">5</div>
<div class="calendar-day">6</div>
<div class="calendar-day">7</div>
<div class="calendar-day">8</div>
<div class="calendar-day">9</div>
<div class="calendar-day">10</div>
<div class="calendar-day">11</div>
<div class="calendar-day active">12</div>
<div class="calendar-day">13</div>
<div class="calendar-day">14</div>
<div class="calendar-day">15</div>
<div class="calendar-day">16</div>
<div class="calendar-day">17</div>
<div class="calendar-day">18</div>
<div class="calendar-day">19</div>
<div class="calendar-day">20</div>
<div class="calendar-day">21</div>
<div class="calendar-day">22</div>
<div class="calendar-day">23</div>
<div class="calendar-day">24</div>
<div class="calendar-day">25</div>
<div class="calendar-day">26</div>
<div class="calendar-day">27</div>
</div>
</div>
</section>
<section class="mb-10">
<h2 class="text-xs font-bold uppercase tracking-[0.2em] mb-6">Available Time Slots</h2>
<div class="grid grid-cols-3 gap-3">
<div class="time-slot">10:00 AM</div>
<div class="time-slot">11:30 AM</div>
<div class="time-slot selected">01:00 PM</div>
<div class="time-slot">02:30 PM</div>
<div class="time-slot">04:00 PM</div>
<div class="time-slot">05:30 PM</div>
</div>
</section>
<section class="bg-primary/5 p-8 border border-primary/10">
<h2 class="text-xs font-bold uppercase tracking-[0.2em] mb-4">Contact Details</h2>
<div class="grid grid-cols-2 gap-4">
<div>
<label class="block text-[9px] uppercase tracking-widest text-gray-500 mb-2">First Name</label>
<input class="w-full bg-white border-gray-200 text-sm focus:ring-primary focus:border-primary py-3" type="text" value="Julianne"/>
</div>
<div>
<label class="block text-[9px] uppercase tracking-widest text-gray-500 mb-2">Last Name</label>
<input class="w-full bg-white border-gray-200 text-sm focus:ring-primary focus:border-primary py-3" type="text" value="Moore"/>
</div>
<div class="col-span-2">
<label class="block text-[9px] uppercase tracking-widest text-gray-500 mb-2">Email for Confirmation</label>
<input class="w-full bg-white border-gray-200 text-sm focus:ring-primary focus:border-primary py-3" type="email" value="j.moore@client.com"/>
</div>
</div>
</section>
<div class="mt-12">
<a href="<?= base_url('success'); ?>"
   class="luxury-button w-full bg-charcoal text-white py-6 text-xs font-bold tracking-[0.3em] uppercase hover:bg-black text-center block">
    Confirm Pickup Appointment
</a>
</div>
</div>
<aside class="w-full lg:w-2/5">
<div class="sticky top-32">
<div class="bg-white border border-gray-100 p-8 shadow-sm">
<h2 class="text-xs font-bold uppercase tracking-[0.2em] mb-8 pb-4 border-b border-gray-50">Your Selection</h2>
<div class="flex gap-6 mb-8">
<div class="w-24 h-24 bg-marble-accent flex-shrink-0">
<img alt="Astra Diamond Choker" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn1QKCpcE1NfKR3dvvYcclozLO29QRZET5ecKCwtAmHzr9O48is6LpVuFlm2SqfN_JjHpUIKIbD8twZkhZeBeMkzgLj25f0zDE7qV570kPD-3ZJrs0u0v5jUQNsI9f2dCp04ewGVu-zCM9nedwdA2pcgO2SZuALukoomA_IIDQWHnkVllCEGPolFpu__O-YBEWlrOyJ3rXTye831gGhNsCUQiJVTLtlD4v0spkMbUbb2ztajVYZ7Ea6bzMv72Zdb8QWqDla3EMmqo"/>
</div>
<div class="flex flex-col justify-center">
<p class="text-[10px] uppercase tracking-widest text-primary font-bold mb-1">Celestial Light</p>
<h3 class="text-sm font-medium tracking-tight mb-2">Astra Diamond Choker</h3>
<p class="text-sm font-bold">$32,400</p>
</div>
</div>
<div class="space-y-6 pt-6 border-t border-gray-50">
<div>
<p class="text-[10px] uppercase tracking-widest text-gray-400 font-bold mb-3">Pickup Location</p>
<div class="flex items-start">
<span class="material-symbols-outlined text-primary mr-3 text-xl">location_on</span>
<div>
<p class="text-xs font-bold text-charcoal leading-relaxed uppercase tracking-tight">New York Fifth Avenue Flagship</p>
<p class="text-[11px] text-gray-500 mt-1">712 5th Ave, New York, NY 10019</p>
<p class="text-[11px] text-primary font-medium mt-1 italic">Ready in 2 hours</p>
</div>
</div>
</div>
<div class="bg-marble-accent p-4 space-y-2">
<div class="flex justify-between text-xs">
<span class="text-gray-500 uppercase tracking-widest text-[9px]">Subtotal</span>
<span>$32,400.00</span>
</div>
<div class="flex justify-between text-xs">
<span class="text-gray-500 uppercase tracking-widest text-[9px]">Boutique Pickup</span>
<span class="text-primary font-bold uppercase text-[9px] tracking-widest">Complimentary</span>
</div>
<div class="flex justify-between text-xs pt-2 border-t border-white/50">
<span class="font-bold uppercase tracking-[0.1em]">Total</span>
<span class="font-bold">$32,400.00</span>
</div>
</div>
<div class="flex items-center text-[10px] text-gray-400 italic">
<span class="material-symbols-outlined text-sm mr-2">verified</span>
                            Authenticity &amp; Boutique Service Guaranteed
                        </div>
</div>
</div>
<p class="text-center mt-6 text-[9px] text-gray-400 uppercase tracking-widest">
                    Need assistance? Call <a class="text-primary hover:underline" href="#">1-800-NAHECIDIDI</a>
</p>
</div>
</aside>
</div>
</main>
<footer class="mt-24 bg-white border-t border-primary/10 pt-12 pb-8">
<div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 text-[9px] text-gray-400 uppercase tracking-[0.2em]">
<p>© 2024 Nahecididi Fine Jewelry. All Rights Reserved.</p>
<div class="flex space-x-8">
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-primary transition-colors" href="#">Terms of Boutique Service</a>
<a class="hover:text-primary transition-colors" href="#">Contact Us</a>
</div>
</div>
</footer>

</body></html>