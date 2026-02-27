<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>

<div class="p-10">

    <div class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl text-white">Boutique Management</h1>
            <p class="text-gray-400 mt-2">Manage pickup locations</p>
        </div>

        <a href="/admin/boutiques/create"
           class="bg-primary text-black px-6 py-3 font-bold">
            + Add Boutique
        </a>
    </div>

    <div class="grid grid-cols-3 gap-8">

        <?php foreach ($boutiques as $b): ?>

        <div class="bg-panel-dark border border-white/10 p-6">

            <h2 class="text-xl font-semibold text-primary">
                <?= esc($b['name']) ?>
            </h2>

            <p class="text-gray-400 mt-2">
                <?= esc($b['city']) ?>
            </p>

            <p class="text-gray-500 text-sm mt-1">
                <?= esc($b['address']) ?>
            </p>

            <div class="mt-6 border-t border-white/10 pt-4 space-y-2">

                <div class="flex justify-between text-sm">
                    <span>Total Appointments</span>
                    <strong><?= $b['total_appointments'] ?></strong>
                </div>

                <div class="flex justify-between text-sm">
                    <span>Total Revenue</span>
                    <strong class="text-primary">
                        $<?= number_format($b['total_revenue'],2) ?>
                    </strong>
                </div>

            </div>

            <div class="flex gap-3 mt-6">
                <a href="/admin/boutiques/edit/<?= $b['id'] ?>"
                   class="text-yellow-400">Edit</a>

                <a href="/admin/boutiques/delete/<?= $b['id'] ?>"
                   onclick="return confirm('Delete this boutique?')"
                   class="text-red-500">
                   Delete
                </a>
            </div>

        </div>

        <?php endforeach; ?>

    </div>

</div>

<?= $this->endSection() ?>