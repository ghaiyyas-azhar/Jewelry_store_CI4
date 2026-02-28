<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>

<div class="max-w-xl mx-auto mt-10">

    <h1 class="text-2xl text-white mb-6">Add Boutique</h1>

    <form method="post" action="/admin/boutiques/store">

        <input type="text" name="name" placeholder="Boutique Name"
               class="w-full bg-charcoal border border-white/20 p-3 text-white mb-4">

        <input type="text" name="city" placeholder="City"
               class="w-full bg-charcoal border border-white/20 p-3 text-white mb-4">

        <textarea name="address" placeholder="Address"
                  class="w-full bg-charcoal border border-white/20 p-3 text-white mb-4"></textarea>

        <textarea name="ready_note" placeholder="Ready Note (optional)"
                  class="w-full bg-charcoal border border-white/20 p-3 text-white mb-4"></textarea>

        <button class="bg-primary text-black px-6 py-3 font-bold">
            Save Boutique
        </button>

    </form>

</div>

<?= $this->endSection() ?>