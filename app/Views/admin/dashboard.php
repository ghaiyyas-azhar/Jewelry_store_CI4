<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>

<h1 class="text-3xl mb-10 font-light">
Overview Dashboard
</h1>

<div class="grid grid-cols-3 gap-6">
    <div class="bg-panel-dark p-6 rounded">
        <p class="text-xs uppercase text-gray-400 mb-2">Total Sales</p>
        <p class="text-2xl">$142,800</p>
    </div>

    <div class="bg-panel-dark p-6 rounded">
        <p class="text-xs uppercase text-gray-400 mb-2">Pending Pickups</p>
        <p class="text-2xl">04</p>
    </div>

    <div class="bg-panel-dark p-6 rounded">
        <p class="text-xs uppercase text-gray-400 mb-2">Appointments</p>
        <p class="text-2xl">08</p>
    </div>
</div>

<?= $this->endSection() ?>