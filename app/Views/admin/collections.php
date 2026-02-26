<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>

<h1 class="text-3xl mb-6">Manage Collections</h1>

<a href="<?= base_url('admin/collections/create') ?>"
   class="bg-yellow-500 text-black px-4 py-2 rounded mb-6 inline-block">
   + Add Collection
</a>

<table class="w-full text-left border border-white/10">
    <thead class="bg-white/5">
    <tr>
        <th class="p-3">ID</th>
        <th>Name</th>
        <th>Slug</th>
        <th>Action</th>
    </tr>
</thead>
    <tbody>
<?php foreach ($collections as $c): ?>
<tr class="border-t border-white/10">

    <td class="p-3"><?= $c['id'] ?></td>

    <td><?= $c['name'] ?></td>
    <td><?= $c['slug'] ?></td>

    <td>
        <a href="<?= base_url('admin/collections/edit/'.$c['id']) ?>"
           class="text-yellow-400">Edit</a>
        |
        <a href="<?= base_url('admin/collections/delete/'.$c['id']) ?>"
           onclick="return confirm('Are you sure you want to delete this collection?')"
           class="text-red-500">
           Delete
        </a>
    </td>

</tr>
<?php endforeach ?>
</tbody>
</table>

<?= $this->endSection() ?>