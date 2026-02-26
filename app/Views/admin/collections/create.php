<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>

<div class="max-w-xl mx-auto mt-10">

    <h1 class="text-2xl mb-6 text-white">Add Collection</h1>

    <form action="<?= base_url('admin/collections/store') ?>" 
      method="post" 
      enctype="multipart/form-data">

    <div class="mb-4">
        <label class="block text-sm mb-2">Collection Name</label>
        <input type="text" name="name" required
            class="w-full bg-charcoal border border-white/20 p-3 text-white rounded">
    </div>

    <div class="mb-4">
        <label class="block text-sm mb-2">Description</label>
        <textarea name="description"
            class="w-full bg-charcoal border border-white/20 p-3 text-white rounded"></textarea>
    </div>

    <div class="flex gap-4">
        <button type="submit"
            class="bg-primary text-black px-6 py-2 rounded">
            Save
        </button>

        <a href="<?= base_url('admin/collections') ?>"
            class="border border-white/30 px-6 py-2 rounded text-white">
            Cancel
        </a>
    </div>

</form>

</div>

<?= $this->endSection() ?>