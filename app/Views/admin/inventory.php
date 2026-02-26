<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>

<div class="p-10">

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-light text-white">Inventory Management</h1>
            <p class="text-gray-500 mt-2">Manage Your Luxury Collection</p>
        </div>

        <a href="/admin/inventory/create"
           class="bg-yellow-500 hover:bg-yellow-600 text-black px-6 py-3 text-sm uppercase font-bold">
            + Add New Item
        </a>
    </div>

    <div class="bg-neutral-900 border border-white/10">
        <table class="w-full text-sm text-left text-gray-300">
            <thead class="bg-neutral-800 text-gray-400 uppercase text-xs">
                <tr>
                    <th class="p-4">Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th class="text-right pr-6">Action</th>
                </tr>
            </thead>

            <tbody>

            <?php foreach ($products as $p): ?>

                <tr class="border-t border-white/5">

                    <td class="p-4">
                        <?php if ($p['image']): ?>
                            <img src="/uploads/<?= $p['image'] ?>" width="60">
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>

                    <td class="font-semibold"><?= $p['name'] ?></td>

                    <td><?= $p['collection_name'] ?></td>

                    <td>$<?= number_format($p['price'], 2) ?></td>

                    <td><?= $p['stock'] ?></td>

                    <td>
                        <?php if ($p['stock'] <= 3): ?>
                            <span class="text-red-500 font-bold">LOW STOCK</span>
                        <?php else: ?>
                            <span class="text-green-500 font-bold">IN STOCK</span>
                        <?php endif; ?>
                    </td>

                    <td class="text-right pr-6">
                        <a href="/admin/inventory/edit/<?= $p['id'] ?>"
                           class="text-yellow-400 mr-3">Edit</a>

                        <a href="/admin/inventory/delete/<?= $p['id'] ?>"
                           onclick="return confirm('Yakin hapus produk ini?')"
                           class="text-red-500">
                           Delete
                        </a>
                    </td>

                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>
    </div>

</div>

<?= $this->endSection() ?>