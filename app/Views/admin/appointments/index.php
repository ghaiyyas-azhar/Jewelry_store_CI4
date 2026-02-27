<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>

<div class="p-10 text-white">

    <div class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl">Appointment Schedule</h1>
            <p class="text-primary mt-2">
                Active Pickups
            </p>
        </div>
    </div>

    <?php foreach ($appointments as $a): ?>

    <div class="bg-panel-dark border border-primary/20 p-6 mb-6 flex justify-between items-center">

        <div>
            <p class="text-sm text-gray-400"><?= $a['boutique_name'] ?></p>
            <h2 class="text-xl font-semibold">
                <?= $a['customer_name'] ?>
            </h2>
            <p class="text-gray-500 text-sm">
                Order #<?= $a['order_code'] ?>
            </p>
        </div>

        <div>
            <p class="text-primary font-bold">
                <?= date('H:i', strtotime($a['appointment_date'])) ?>
            </p>
        </div>

        <div>
            <a href="<?= base_url('admin/appointments/collect/'.$a['id']) ?>"
            class="bg-primary text-black px-6 py-3 font-bold">
            MARK AS COLLECTED
        </a>
        </div>

    </div>

    <?php endforeach; ?>

</div>

<?= $this->endSection() ?>