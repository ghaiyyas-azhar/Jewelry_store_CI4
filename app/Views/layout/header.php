<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?= $title ?? 'Nahecididi' ?></title>

<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

<script>
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: "#D4AF37",
                champagne: "#F7E7CE",
                marble: "#FDFDFD",
                "background-light": "#FDFDFD",
                "background-dark": "#121212",
            },
            fontFamily: {
                display: ["Manrope", "sans-serif"],
                serif: ["Playfair Display", "serif"]
            },
        },
    },
}
</script>

<style type="text/tailwindcss">
.glass-effect {
    background: rgba(253, 253, 253, 0.9);
    backdrop-filter: blur(8px);
}
.logo-tracking { letter-spacing: 0.15em; }
.material-symbols-outlined {
    font-variation-settings: 'FILL' 0, 'wght' 200, 'GRAD' 0, 'opsz' 24;
}
</style>

</head>

<body class="bg-marble dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased">

<header class="fixed top-0 left-0 right-0 z-50 glass-effect border-b border-primary/20">
<nav class="max-w-[1440px] mx-auto px-10 h-24 flex items-center justify-between">

<div class="flex items-center space-x-10">
<a class="text-[10px] tracking-[0.4em] uppercase font-medium hover:text-primary transition-colors"
   href="<?= base_url('collections') ?>">
   Collections
</a>
<a class="text-[10px] tracking-[0.4em] uppercase font-medium hover:text-primary transition-colors" href="#">
   Bespoke
</a>
</div>

<div class="absolute left-1/2 -translate-x-1/2 text-center">
<a class="block" href="<?= base_url() ?>">
<h1 class="font-serif text-4xl logo-tracking font-medium">NAHECIDIDI</h1>
<span class="block text-[8px] tracking-[0.6em] uppercase mt-1 opacity-60">Fine Jewelry</span>
</a>
</div>

<div class="flex items-center space-x-8">
<a class="text-[10px] tracking-[0.4em] uppercase font-medium hover:text-primary transition-colors hidden md:block" href="#">
   Boutiques
</a>

<div class="flex items-center space-x-5">

<button class="hover:text-primary transition-colors">
<span class="material-symbols-outlined !text-xl">search</span>
</button>

<button class="hover:text-primary transition-colors">
<span class="material-symbols-outlined !text-xl">favorite</span>
</button>

<button class="hover:text-primary transition-colors">
<span class="material-symbols-outlined !text-xl">shopping_bag</span>
</button>

<!-- USER DROPDOWN -->
<div class="user-menu">

    <?php if(session()->get('isLoggedIn')): ?>

        <div class="dropdown">
            <button id="userBtn" class="dropbtn">
                <?= session()->get('name'); ?>
            </button>

            <div id="userDropdown" class="dropdown-content">
                <a href="/logout">Logout</a>
            </div>
        </div>

    <?php else: ?>

        <div class="dropdown">
            <button id="userBtn" class="dropbtn">
                <i class="fa fa-user"></i> Account
            </button>

            <div id="userDropdown" class="dropdown-content">
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            </div>
        </div>

    <?php endif; ?>

</div>
<!-- END USER DROPDOWN -->

</div>

</div>
</nav>
</header>

<!-- supaya konten tidak ketutup header fixed -->
<div class="pt-24">
