<!DOCTYPE html>
<html class="dark" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Nahecididi Admin</title>

<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

<script>
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: "#e8ba30",
                charcoal: "#1a1a1a",
                "background-dark": "#121212",
                "panel-dark": "#1e1e1e"
            },
            fontFamily: {
                display: ["Noto Serif", "serif"]
            }
        }
    }
}
</script>

<style type="text/tailwindcss">
body {
    font-family: 'Noto Serif', serif;
    @apply bg-background-dark text-white;
}
.admin-sidebar-item {
    @apply flex items-center space-x-3 px-6 py-4 text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 hover:text-primary hover:bg-white/5 transition-all;
}
.admin-sidebar-item.active {
    @apply text-primary bg-white/5 border-r-2 border-primary;
}
</style>
</head>

<body>
<div class="flex min-h-screen">

<!-- SIDEBAR -->
<aside class="w-72 bg-charcoal border-r border-white/10 flex flex-col fixed h-full">

<div class="p-8 border-b border-white/10">
<a class="text-xl font-bold tracking-[0.3em] text-white uppercase" href="<?= base_url('admin') ?>">
Nahecididi
</a>
<p class="text-[9px] tracking-[0.2em] text-primary mt-2 font-bold uppercase">
Boutique Management
</p>
</div>

<nav class="flex-1 py-6">

<a class="admin-sidebar-item" href="<?= base_url('admin') ?>">
<span class="material-symbols-outlined">dashboard</span>
<span>Overview</span>
</a>

<a class="admin-sidebar-item" href="<?= base_url('admin/inventory') ?>">
<span class="material-symbols-outlined">inventory_2</span>
<span>Inventory</span>
</a>

<a class="admin-sidebar-item" href="<?= base_url('admin/collections') ?>">
<span class="material-symbols-outlined">category</span>
<span>Collections</span>
</a>

<a class="admin-sidebar-item" href="<?= base_url('admin/clients') ?>">
<span class="material-symbols-outlined">group</span>
<span>Clients</span>
</a>

<a class="admin-sidebar-item" href="<?= base_url('admin/boutiques') ?>">
<span class="material-symbols-outlined">store</span>
<span>Boutiques</span>
</a>

</nav>

</aside>

<!-- MAIN -->
<main class="flex-1 ml-72 p-10">

<?= $this->renderSection('content') ?>

</main>

</div>
</body>
</html>