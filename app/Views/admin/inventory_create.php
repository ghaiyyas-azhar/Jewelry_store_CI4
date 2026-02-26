<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>

<div class="p-10 max-w-3xl">

    <h1 class="text-3xl text-white mb-8">Add Product</h1>

    <form action="/admin/inventory/store"
          method="post"
          enctype="multipart/form-data"
          class="space-y-6">

        <div>
            <label class="text-white">Collection</label>
            <select name="collection_id" required class="w-full bg-neutral-900 border p-3 text-white">
                <option value="">Select Collection</option>
                <?php foreach ($collections as $c): ?>
                    <option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label class="text-white">Product Name</label>
            <input type="text" name="name" required class="w-full bg-neutral-900 border p-3 text-white">
        </div>

        <div>
            <label class="text-white">Price</label>
            <input type="number" name="price" required class="w-full bg-neutral-900 border p-3 text-white">
        </div>

        <div>
            <label class="text-white">Stock</label>
            <input type="number" name="stock" required class="w-full bg-neutral-900 border p-3 text-white">
        </div>

        <div>
            <label class="text-white">Material</label>
            <input type="text" name="material" class="w-full bg-neutral-900 border p-3 text-white">
        </div>

        <div>
            <label class="text-white">Description</label>
            <textarea name="description" class="w-full bg-neutral-900 border p-3 text-white"></textarea>
        </div>

        <div>
            <label class="text-white">Image (PNG/JPG/JPEG)</label>
            <input type="file"
                   name="image"
                   accept=".png,.jpg,.jpeg"
                   class="w-full bg-neutral-900 border p-3 text-white">
        </div>

        <button class="bg-yellow-500 text-black px-6 py-3 font-bold">
            Save Product
        </button>

    </form>

</div>

<?= $this->endSection() ?>