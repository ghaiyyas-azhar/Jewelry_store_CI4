<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>

<div class="p-10 text-white max-w-xl">

    <h1 class="text-2xl mb-6">My Profile</h1>

    <form method="post" action="<?= base_url('admin/profile/update') ?>">

        <div class="mb-4">
            <label>Name</label>
            <input type="text" name="name"
                   value="<?= $admin['name'] ?>"
                   class="w-full p-3 bg-panel-dark border border-white/10">
        </div>

        <div class="mb-6">
            <label>Email</label>
            <input type="email" name="email"
                   value="<?= $admin['email'] ?>"
                   class="w-full p-3 bg-panel-dark border border-white/10">
        </div>

        <button class="bg-primary text-black px-6 py-3 font-bold">
            UPDATE PROFILE
        </button>

    </form>

</div>

<?= $this->endSection() ?>