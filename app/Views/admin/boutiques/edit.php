<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>

<div class="max-w-xl mx-auto mt-10">

    <h1 class="text-2xl text-white mb-6">Edit Boutique</h1>

    <form method="post" action="/admin/boutiques/update/<?= $boutique['id'] ?>">

        <input type="text" name="name"
               value="<?= esc($boutique['name']) ?>"
               class="w-full bg-charcoal border border-white/20 p-3 text-white mb-4">

        <input type="text" name="city"
               value="<?= esc($boutique['city']) ?>"
               class="w-full bg-charcoal border border-white/20 p-3 text-white mb-4">

        <textarea name="address"
                  class="w-full bg-charcoal border border-white/20 p-3 text-white mb-4"><?= esc($boutique['address']) ?></textarea>

        <textarea name="ready_note"
                  class="w-full bg-charcoal border border-white/20 p-3 text-white mb-4"><?= esc($boutique['ready_note']) ?></textarea>

        <button class="bg-primary text-black px-6 py-3 font-bold">
            Update Boutique
        </button>

    </form>

</div>

<?= $this->endSection() ?>