<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>

<div class="p-10 max-w-3xl">

    <h1 class="text-3xl text-white mb-8">Edit Product</h1>

    <form action="/admin/inventory/update/<?= $product['id'] ?>"
          method="post"
          enctype="multipart/form-data"
          class="space-y-6">

        <div>
            <label class="text-white">Collection</label>
            <select name="collection_id" required class="w-full bg-neutral-900 border p-3 text-white">
                <?php foreach ($collections as $c): ?>
                    <option value="<?= $c['id'] ?>"
                        <?= $c['id'] == $product['collection_id'] ? 'selected' : '' ?>>
                        <?= $c['name'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <input type="text" name="name" value="<?= $product['name'] ?>" class="w-full bg-neutral-900 border p-3 text-white">
        <input type="number" name="price" value="<?= $product['price'] ?>" class="w-full bg-neutral-900 border p-3 text-white">
        <input type="number" name="stock" value="<?= $product['stock'] ?>" class="w-full bg-neutral-900 border p-3 text-white">
        <input type="text" name="material" value="<?= $product['material'] ?>" class="w-full bg-neutral-900 border p-3 text-white">
        <textarea name="description" class="w-full bg-neutral-900 border p-3 text-white"><?= $product['description'] ?></textarea>

        <div>
            <label class="text-white">Replace Image</label>
            <input type="file"
                   name="image"
                   accept=".png,.jpg,.jpeg"
                   class="w-full bg-neutral-900 border p-3 text-white">
        </div>

        <button class="bg-yellow-500 text-black px-6 py-3 font-bold">
            Update Product
        </button>

    </form>

</div>

<?= $this->endSection() ?>