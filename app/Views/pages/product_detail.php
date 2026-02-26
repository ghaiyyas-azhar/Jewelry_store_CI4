<?php $title = "Nahecididi | " . esc($product['name']); ?>
<?= $this->include('layout/header'); ?>
<script src="<?= base_url('assets/js/app.js') ?>"></script>

<main class="max-w-7xl mx-auto px-6 py-12">
    <!-- BACK BUTTON -->
<div class="mb-8">
    <a href="<?= base_url('collections'); ?>" 
       class="inline-flex items-center text-xs uppercase tracking-[0.3em] text-gray-500 hover:text-primary transition-colors">

        <span class="material-symbols-outlined mr-2 text-sm">
            arrow_back
        </span>

        Back to Collection
    </a>
</div>

<div class="flex flex-col lg:flex-row gap-16">

    <!-- PRODUCT IMAGE -->
    <div class="w-full lg:w-[55%]">
        <div class="relative group bg-marble-accent aspect-square overflow-hidden rounded shadow-sm">
            <img 
                src="<?= base_url('uploads/products/' . $product['image']) ?>"
                alt="<?= esc($product['name']) ?>"
                class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
            >
        </div>
    </div>

    <!-- PRODUCT INFO -->
    <div class="w-full lg:w-[45%] flex flex-col">

        <div class="border-b border-gray-100 pb-8">
            <p class="text-[11px] uppercase tracking-[0.4em] text-primary font-bold mb-4">
                <?= esc($product['collection_name'] ?? '') ?> Collection
            </p>

            <h1 class="text-4xl lg:text-5xl font-light tracking-tight text-charcoal mb-4">
                <?= esc($product['name']) ?>
            </h1>

            <p class="text-2xl font-light text-charcoal">
                $<?= number_format($product['price']) ?>
            </p>
        </div>

        <!-- SPECIFICATIONS -->
        <div class="py-8 space-y-6">
            <h3 class="text-xs font-bold uppercase tracking-widest text-charcoal">
                Specifications
            </h3>

            <ul class="text-sm text-gray-600 space-y-2">
                <li class="flex justify-between border-b py-2">
                    <span>Material</span>
                    <span class="font-medium"><?= esc($product['material']) ?></span>
                </li>
                <li class="flex justify-between border-b py-2">
                    <span>Stock</span>
                    <span class="font-medium">
                        <?= $product['stock'] > 0 ? 'Available' : 'Out of Stock' ?>
                    </span>
                </li>
            </ul>

            <!-- ACTION BUTTONS -->
            <div class="pt-4 space-y-4">
                <a href="<?= base_url('/pickup/' . $product['slug']); ?>" 
                class="w-full border-2 border-primary text-primary py-5 text-xs font-bold tracking-[0.2em] uppercase hover:bg-primary hover:text-white text-center block">
                    RESERVE FOR JEWELRY PICKUP
                </a>
            </div>
        </div>

        <!-- BOUTIQUE SECTION (TIDAK DIUBAH) -->
        <div class="bg-primary/5 p-8 border border-primary/10 rounded-sm mt-8">

            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xs font-bold uppercase tracking-widest flex items-center">
                    <span class="material-symbols-outlined mr-2 text-primary">store</span>
                    Check Boutique Availability
                </h3>

                <div class="bg-green-100 text-green-800 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-tighter">
                    Ready in 2 Hours
                </div>
            </div>

            <div class="space-y-4">
                <div class="relative">
                    <select class="w-full bg-white border border-gray-200 py-3 pl-4 pr-10 text-xs font-medium appearance-none uppercase tracking-widest outline-none">
                        <option>New York - Fifth Avenue Flagship</option>
                        <option>Paris - Place Vendôme</option>
                        <option>London - Bond Street</option>
                        <option>Dubai - Mall of the Emirates</option>
                    </select>
                    <span class="material-symbols-outlined absolute right-3 top-2.5 text-primary pointer-events-none">
                        expand_more
                    </span>
                </div>

                <p class="text-[11px] text-gray-500 italic flex items-center">
                    <span class="material-symbols-outlined text-xs mr-1">info</span>
                    Visit us for a personalized fitting session with our experts.
                </p>
            </div>
        </div>

        <!-- GUARANTEES -->
        <div class="grid grid-cols-2 gap-8 pt-8 text-[10px] uppercase tracking-[0.2em] text-gray-400">
            <div class="flex flex-col items-center space-y-3">
                <span class="material-symbols-outlined text-2xl text-primary">verified_user</span>
                <span>Lifetime Warranty</span>
            </div>

            <div class="flex flex-col items-center space-y-3">
                <span class="material-symbols-outlined text-2xl text-primary">local_shipping</span>
                <span>Complimentary Shipping</span>
            </div>
        </div>

    </div>
</div>

<!-- DESCRIPTION -->
<div class="mt-24 border-t border-gray-100 pt-12 max-w-3xl">
    <p class="text-lg leading-relaxed text-gray-600 font-light italic mb-6">
        <?= esc($product['description']) ?>
    </p>
</div>

</main>

<?= $this->include('layout/footer'); ?>