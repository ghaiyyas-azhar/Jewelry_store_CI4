<?php $title = "Nahecididi | Luxury Jewelry & Private Viewings"; ?>
<?= $this->include('layout/header'); ?>

<script src="<?= base_url('assets/js/app.js') ?>"></script>

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
<main class="flex-grow max-w-6xl mx-auto w-full px-6 py-12">
        <!-- BACK BUTTON -->
<div class="mb-8">
    <a href="<?= base_url('collections'); ?>" 
       class="inline-flex items-center text-xs uppercase tracking-[0.3em] text-gray-500 hover:text-primary transition-colors">

        <span class="material-symbols-outlined mr-2 text-sm">
            arrow_back
        </span>

        Back to Product Details
    </a>
</div>
<div class="flex flex-col lg:flex-row gap-16">
<div class="flex-grow lg:w-3/5">
<h1 class="text-3xl font-light tracking-tight mb-8">Schedule Your Boutique Pickup</h1>
<section class="mb-10">
<form action="<?= base_url('pickup/save') ?>" method="post">

<section class="mb-10">
<div class="flex items-center justify-between mb-6">
<h2 class="text-xs font-bold uppercase tracking-[0.2em]">Select Date</h2>
<div class="flex items-center gap-4">
    <button type="button" onclick="changeMonth(-1)">
        <span class="material-symbols-outlined text-primary text-sm">chevron_left</span>
    </button>

    <span id="monthLabel"
        class="text-[10px] text-primary uppercase font-bold tracking-widest">
    </span>

    <button type="button" onclick="changeMonth(1)">
        <span class="material-symbols-outlined text-primary text-sm">chevron_right</span>
    </button>
</div>
</div>

<div class="bg-white border border-gray-100 p-6 shadow-sm">

<div class="grid grid-cols-7 gap-1 mb-4 text-center text-[9px] uppercase tracking-widest text-gray-400 font-bold">
<div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div><div>Sun</div>
</div>

<div id="calendarGrid" class="grid grid-cols-7 gap-1"></div>
</div>
</section>

<input type="hidden" name="pickup_date" id="pickup_date">
</section>
<section class="mb-10">
<h2 class="text-xs font-bold uppercase tracking-[0.2em] mb-6">Available Time Slots</h2>
<div class="grid grid-cols-3 gap-3">
<div class="time-slot" onclick="selectTime(this)">10:00 AM</div>
<div class="time-slot" onclick="selectTime(this)">11:30 AM</div>
<div class="time-slot" onclick="selectTime(this)">01:00 PM</div>
<div class="time-slot" onclick="selectTime(this)">02:30 PM</div>
<div class="time-slot" onclick="selectTime(this)">04:00 PM</div>
<div class="time-slot" onclick="selectTime(this)">05:30 PM</div>
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

<h2 class="text-xs font-bold uppercase tracking-[0.2em] mb-8 pb-4 border-b border-gray-50">
    Your Selection
</h2>

<div class="flex gap-6 mb-8">

    <div class="w-24 h-24 bg-marble-accent flex-shrink-0">
        <img 
            alt="<?= esc($product['name']) ?>"
            class="w-full h-full object-cover"
            src="<?= base_url('uploads/products/'.$product['image']) ?>"
        />
    </div>

    <div class="flex flex-col justify-center">
        <p class="text-[10px] uppercase tracking-widest text-primary font-bold mb-1">
            <?= esc($product['collection_name']) ?>
        </p>

        <h3 class="text-sm font-medium tracking-tight mb-2">
            <?= esc($product['name']) ?>
        </h3>

        <p class="text-sm font-bold">
            $<?= number_format($product['price'], 0, ',', ',') ?>
        </p>
    </div>

</div>

<div class="space-y-6 pt-6 border-t border-gray-50">

<div>
<p class="text-[10px] uppercase tracking-widest text-gray-400 font-bold mb-3">
    Pickup Location
</p>

<div class="flex items-start">
<span class="material-symbols-outlined text-primary mr-3 text-xl">
location_on
</span>

<div>
<p class="text-xs font-bold text-charcoal leading-relaxed uppercase tracking-tight">
New York Fifth Avenue Flagship
</p>

<p class="text-[11px] text-gray-500 mt-1">
712 5th Ave, New York, NY 10019
</p>

<p class="text-[11px] text-primary font-medium mt-1 italic">
Ready in 2 hours
</p>
</div>

</div>
</div>

<div class="bg-marble-accent p-4 space-y-2">

<div class="flex justify-between text-xs">
<span class="text-gray-500 uppercase tracking-widest text-[9px]">
Subtotal
</span>
<span>
$<?= number_format($product['price'], 2) ?>
</span>
</div>

<div class="flex justify-between text-xs">
<span class="text-gray-500 uppercase tracking-widest text-[9px]">
Boutique Pickup
</span>
<span class="text-primary font-bold uppercase text-[9px] tracking-widest">
Complimentary
</span>
</div>

<div class="flex justify-between text-xs pt-2 border-t border-white/50">
<span class="font-bold uppercase tracking-[0.1em]">
Total
</span>
<span class="font-bold">
$<?= number_format($product['price'], 2) ?>
</span>
</div>

</div>

<div class="flex items-center text-[10px] text-gray-400 italic">
<span class="material-symbols-outlined text-sm mr-2">
verified
</span>
Authenticity & Boutique Service Guaranteed
</div>

</div>
</div>
</div>

<p class="text-center mt-6 text-[9px] text-gray-400 uppercase tracking-widest">
Need assistance? Call 
<a class="text-primary hover:underline" href="#">
1-800-NAHECIDIDI
</a>
</p>

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
<script>
let currentDate = new Date();
let today = new Date();
today.setHours(0,0,0,0);

function renderCalendar() {

    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();

    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);

    document.getElementById('monthLabel').innerText =
        firstDay.toLocaleString('default', { month: 'long', year: 'numeric' });

    const grid = document.getElementById('calendarGrid');
    grid.innerHTML = '';

    // offset start (Mon based)
    let startDay = firstDay.getDay();
    startDay = startDay === 0 ? 6 : startDay - 1;

    for (let i = 0; i < startDay; i++) {
        grid.innerHTML += `<div></div>`;
    }

    for (let day = 1; day <= lastDay.getDate(); day++) {

        let date = new Date(year, month, day);
        let formatted = date.toISOString().split('T')[0];

        let isPast = date < today;

        grid.innerHTML += `
            <button type="button"
                class="calendar-day ${isPast ? 'muted' : ''}"
                ${isPast ? 'disabled' : ''}
                onclick="selectDate('${formatted}', this)">
                ${day}
            </button>
        `;
    }
}

function changeMonth(step) {
    currentDate.setMonth(currentDate.getMonth() + step);
    renderCalendar();
}

function selectDate(date, el) {

    document.querySelectorAll('.calendar-day').forEach(d => {
        d.classList.remove('active');
    });

    el.classList.add('active');
    document.getElementById('pickup_date').value = date;
}

renderCalendar();

function selectTime(el) {

    // reset semua slot
    document.querySelectorAll('.time-slot').forEach(slot => {
        slot.classList.remove('selected');
    });

    // tambahkan selected
    el.classList.add('selected');

    // simpan ke hidden input
    document.getElementById('pickup_time').value = el.innerText;
}
</script>
</body></html>