<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>

<div class="p-8 text-white">

    <!-- TOP CARDS -->
    <div class="grid grid-cols-3 gap-6 mb-10">

        <div class="bg-[#111] border border-[#222] p-6">
            <p class="text-gray-400 text-sm">TOTAL DAILY SALES</p>
            <h2 class="text-3xl font-bold text-yellow-400 mt-2">
                $<?= number_format($totalSales, 2) ?>
            </h2>
        </div>

        <div class="bg-[#111] border border-[#222] p-6">
            <p class="text-gray-400 text-sm">PENDING PICKUPS</p>
            <h2 class="text-3xl font-bold mt-2">
                <?= $pendingPickups ?>
            </h2>
        </div>

        <div class="bg-[#111] border border-[#222] p-6">
            <p class="text-gray-400 text-sm">ACTIVE APPOINTMENTS</p>
            <h2 class="text-3xl font-bold mt-2">
                <?= $activeAppointments ?>
            </h2>
        </div>

    </div>


    <!-- CHART + RECENT -->
    <div class="grid grid-cols-3 gap-6 mb-12">

        <!-- WEEKLY SALES -->
        <div class="col-span-2 bg-[#111] border border-[#222] p-6">
            <h3 class="text-lg font-semibold mb-4 text-yellow-400">
                Performance Trends
            </h3>

            <canvas id="salesChart" height="100"></canvas>
        </div>


        <!-- RECENT ACTIVITY -->
        <div class="bg-[#111] border border-[#222] p-6">
            <h3 class="text-lg font-semibold mb-4 text-yellow-400">
                Recent Activity
            </h3>

            <?php foreach ($recentOrders as $order): ?>
                <div class="mb-4 border-b border-[#222] pb-3">
                    <p class="font-semibold">
                        Order #<?= $order['order_code'] ?>
                    </p>
                    <p class="text-sm text-gray-400">
                        $<?= number_format($order['total_price'],2) ?>
                    </p>
                    <p class="text-xs text-gray-500">
                        <?= $order['status'] ?>
                    </p>
                </div>
            <?php endforeach; ?>

        </div>
    </div>


    <!-- HIGH PRIORITY -->
    <?php if ($highPriority): ?>
    <div class="bg-[#1a1405] border border-yellow-600 p-6 flex justify-between items-center">

        <div>
            <p class="text-yellow-400 text-sm">HIGH PRIORITY PICKUP</p>
            <h3 class="text-xl font-bold mt-2">
                Order #<?= $highPriority['order_code'] ?>
            </h3>
            <p class="text-gray-400">
                $<?= number_format($highPriority['total_price'],2) ?>
            </p>
        </div>

        <a href="/admin/mark-collected/<?= $highPriority['id'] ?>"
           class="bg-yellow-500 hover:bg-yellow-600 text-black px-6 py-3 font-bold">
           MARK AS COLLECTED
        </a>

    </div>
    <?php endif; ?>

</div>


<!-- CHART.JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('salesChart').getContext('2d');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?= $weeklyLabels ?>,
        datasets: [{
            label: 'Weekly Sales',
            data: <?= $weeklyData ?>,
            borderColor: '#e8ba30',
            backgroundColor: 'rgba(232,186,48,0.15)',
            fill: true,
            tension: 0.4
        }]
    },
    options: {
        plugins: {
            legend: { display: false }
        },
        scales: {
            x: { ticks: { color: '#aaa' } },
            y: { ticks: { color: '#aaa' } }
        }
    }
});
</script>

<?= $this->endSection() ?>