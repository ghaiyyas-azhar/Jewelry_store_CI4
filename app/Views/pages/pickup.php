<?php $title = "Schedule Pickup | Nahecididi"; ?>
<?= $this->include('layout/header'); ?>
<script src="<?= base_url('assets/js/app.js') ?>"></script>

<style type="text/css">
    /* Gunakan warna dari config tailwind header kamu */
    .pickup-section { font-family: 'Manrope', sans-serif; }
    
    .calendar-day { 
        aspect-ratio: 1/1;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        cursor: pointer;
        transition: all 0.2s;
        color: #1a1a1a;
        font-weight: 500;
    }
    .calendar-day:hover:not(.muted) { background-color: #F7E7CE; }
    .calendar-day.active { background-color: #D4AF37; color: white !important; font-weight: 700; }
    .calendar-day.muted { color: #d1d5db !important; cursor: default; }
    
    .time-slot { 
        border: 1px solid #e5e7eb;
        padding: 12px 0;
        text-align: center;
        font-size: 10px;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.2s;
        color: #1a1a1a;
        font-weight: 600;
    }
    .time-slot:hover { border-color: #D4AF37; color: #D4AF37; }
    .time-slot.selected { background-color: #1a1a1a; color: white !important; border-color: #1a1a1a; }
</style>

<main class="pickup-section max-w-[1440px] mx-auto px-10 py-20">
    <div class="mb-12">
        <a href="<?= base_url('collections'); ?>" class="inline-flex items-center text-[10px] uppercase tracking-[0.4em] font-medium hover:text-primary transition-colors">
            <span class="material-symbols-outlined !text-sm mr-2">arrow_back</span>
            Back to Details
        </a>
    </div>

    <form action="<?= base_url('pickup/confirm') ?>" method="post" onsubmit="return validateForm()">
    <?= csrf_field(); ?>

    <input type="hidden" name="boutique_id" value="1">
    <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
    <input type="hidden" name="total_price" value="<?= $product['price']; ?>">
    <input type="hidden" name="appointment_date" id="pickup_date_input">
    <input type="hidden" name="appointment_time" id="pickup_time_input">

    <div class="flex flex-col lg:flex-row gap-20">
            
            <div class="flex-grow">
                <h1 class="font-serif text-4xl mb-4">Schedule Appointment</h1>
                <p class="text-[11px] tracking-widest uppercase opacity-60 mb-12">Select your preferred date and time for Jewelry Viewing</p>
                
                <div class="max-w-xl">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-[10px] font-bold uppercase tracking-[0.4em]">1. Select Date</h2>
                        <div class="flex items-center space-x-6">
                            <button type="button" onclick="changeMonth(-1)"><span class="material-symbols-outlined !text-lg">chevron_left</span></button>
                            <span id="monthLabel" class="text-[10px] font-bold uppercase tracking-[0.3em] text-primary"></span>
                            <button type="button" onclick="changeMonth(1)"><span class="material-symbols-outlined !text-lg">chevron_right</span></button>
                        </div>
                    </div>

                    <div class="bg-white border border-primary/10 p-8 mb-16">
                        <div class="grid grid-cols-7 gap-2 mb-6 text-center text-[9px] uppercase tracking-[0.3em] font-bold opacity-40">
                            <div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div><div>Sun</div>
                        </div>
                        <div id="calendarGrid" class="grid grid-cols-7 gap-2"></div>
                    </div>

                    <h2 class="text-[10px] font-bold uppercase tracking-[0.4em] mb-8">2. Available Slots</h2>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="time-slot" onclick="selectTime(this)">10:00 AM</div>
                        <div class="time-slot" onclick="selectTime(this)">11:30 AM</div>
                        <div class="time-slot" onclick="selectTime(this)">01:00 PM</div>
                        <div class="time-slot" onclick="selectTime(this)">02:30 PM</div>
                        <div class="time-slot" onclick="selectTime(this)">04:00 PM</div>
                        <div class="time-slot" onclick="selectTime(this)">05:30 PM</div>
                    </div>
                </div>
            </div>

            <aside class="w-full lg:w-96">
                <div class="sticky top-32 border border-primary/10 p-10 bg-white">
                    <h2 class="text-[10px] font-bold uppercase tracking-[0.4em] mb-10 pb-4 border-b">Summary</h2>
                    
                    <div class="flex space-x-6 mb-10">
                        <div class="w-20 h-20 bg-marble overflow-hidden">
                            <img class="w-full h-full object-cover" src="<?= base_url('uploads/products/'.$product['image']) ?>" />
                        </div>
                        <div class="flex flex-col justify-center">
                            <span class="text-[9px] uppercase tracking-widest text-primary font-bold mb-1"><?= esc($product['collection_name']) ?></span>
                            <h3 class="text-xs font-medium uppercase tracking-wider mb-2"><?= esc($product['name']) ?></h3>
                            <span class="text-xs font-bold">$<?= number_format($product['price'], 0) ?></span>
                        </div>
                    </div>

                    <div class="space-y-8">
                        <div class="text-[10px] tracking-widest leading-relaxed opacity-70">
                            <p class="font-bold uppercase mb-2 text-black">Location</p>
                            <p>New York Fifth Avenue Flagship<br>712 5th Ave, NY 10019</p>
                        </div>

                        <div class="bg-marble p-6 border border-primary/5 flex justify-between items-center">
                            <span class="text-[10px] font-bold uppercase tracking-widest">Total</span>
                            <span class="text-sm font-bold">$<?= number_format($product['price'], 2) ?></span>
                        </div>

                        <button type="submit" class="w-full bg-black text-white py-6 text-[10px] font-bold tracking-[0.4em] uppercase hover:bg-primary transition-all">
                            Confirm Appointment
                        </button>
                    </div>
                </div>
            </aside>
        </div>
    </form>
</main>

<script>
let currentDate = new Date();
let today = new Date(); today.setHours(0,0,0,0);

function renderCalendar() {
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();
    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);
    document.getElementById('monthLabel').innerText = firstDay.toLocaleString('default', { month: 'long', year: 'numeric' });
    const grid = document.getElementById('calendarGrid');
    grid.innerHTML = '';
    let startDay = firstDay.getDay();
    startDay = startDay === 0 ? 6 : startDay - 1;
    for (let i = 0; i < startDay; i++) grid.innerHTML += `<div></div>`;
    for (let day = 1; day <= lastDay.getDate(); day++) {
        let date = new Date(year, month, day);
        let formatted = date.toISOString().split('T')[0];
        let isPast = date < today;
        grid.innerHTML += `<div class="calendar-day ${isPast ? 'muted' : ''}" onclick="${isPast ? '' : `selectDate('${formatted}', this)`}">${day}</div>`;
    }
}
function changeMonth(step) { currentDate.setMonth(currentDate.getMonth() + step); renderCalendar(); }
function selectDate(date, el) {
    document.querySelectorAll('.calendar-day').forEach(d => d.classList.remove('active'));
    el.classList.add('active');
    document.getElementById('pickup_date_input').value = date;
}
function selectTime(el) {
    document.querySelectorAll('.time-slot').forEach(slot => slot.classList.remove('selected'));
    el.classList.add('selected');
    document.getElementById('pickup_time_input').value = el.innerText.trim();
}

function showLuxuryToast(message) {
    const toast = document.getElementById('luxuryToast');
    const text = document.getElementById('toastMessage');

    text.innerText = message;

    toast.classList.remove('opacity-0', 'scale-95');
    toast.classList.add('opacity-100', 'scale-100');

    setTimeout(() => {
        toast.classList.remove('opacity-100', 'scale-100');
        toast.classList.add('opacity-0', 'scale-95');
    }, 1000); // ⏱ hilang dalam 1 detik
}

function validateForm() {

    const userId = "<?= session()->get('user_id'); ?>";

    if (!userId) {
        openLoginModal();
        return false;
    }

    if (!document.getElementById('pickup_date_input').value) {
        showLuxuryToast("Please select a date");
        return false;
    }

    if (!document.getElementById('pickup_time_input').value) {
        showLuxuryToast("Please select a time");
        return false;
    }

    return true;
}

function openLoginModal() {
    document.getElementById('loginModal').classList.remove('hidden');
    document.getElementById('loginModal').classList.add('flex');
}

function closeLoginModal() {
    document.getElementById('loginModal').classList.add('hidden');
    document.getElementById('loginModal').classList.remove('flex');
}
renderCalendar();
</script>

<!-- Login Required Modal -->
<div id="loginModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">
    <div class="bg-white w-[420px] p-12 shadow-2xl relative">

        <h2 class="text-center text-2xl tracking-widest mb-8 font-light">
            LOGIN REQUIRED
        </h2>

        <p class="text-center text-sm tracking-wide opacity-70 mb-10">
            Please login first to schedule your appointment.
        </p>

        <div class="flex flex-col gap-4">
            <a href="<?= base_url('login'); ?>"
               class="bg-[#C6A52D] text-white text-center py-4 tracking-[0.3em] text-xs uppercase font-bold hover:opacity-90 transition">
                Login
            </a>

            <button onclick="closeLoginModal()"
                class="border border-black py-4 text-xs tracking-[0.3em] uppercase hover:bg-black hover:text-white transition">
                Cancel
            </button>
        </div>
    </div>
</div>

<!-- Luxury Toast Notification -->
<div id="luxuryToast"
     class="fixed inset-0 flex items-center justify-center pointer-events-none z-50 opacity-0 scale-95 transition-all duration-300">

    <div class="bg-white px-10 py-6 shadow-2xl border border-[#C6A52D]/30">
        <p id="toastMessage"
           class="text-xs tracking-[0.3em] uppercase text-center font-semibold text-black">
        </p>
    </div>
</div>

<?= $this->include('layout/footer'); ?>