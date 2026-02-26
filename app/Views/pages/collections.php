<?php $title = "Nahecididi | Luxury Jewelry & Private Viewings"; ?>
<?= $this->include('layout/header'); ?>

<script src="<?= base_url('assets/js/app.js') ?>"></script>

<script src="<?= base_url('assets/js/product.js') ?>"></script>

<main class="max-w-7xl mx-auto px-4 py-12">
<div class="flex flex-col md:flex-row gap-12">
<aside class="w-full md:w-64 flex-shrink-0">
<div class="space-y-8 sticky top-44">
<div>
<h3 class="text-xs font-bold uppercase tracking-widest border-b border-gray-200 pb-2 mb-4">Material</h3>
<div class="space-y-2">
<label class="flex items-center space-x-3 cursor-pointer group">
<input class="form-checkbox text-primary border-gray-300 rounded focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm group-hover:text-primary transition-colors">18k Yellow Gold</span>
</label>
<label class="flex items-center space-x-3 cursor-pointer group">
<input class="form-checkbox text-primary border-gray-300 rounded focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm group-hover:text-primary transition-colors">White Gold</span>
</label>
<label class="flex items-center space-x-3 cursor-pointer group">
<input class="form-checkbox text-primary border-gray-300 rounded focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm group-hover:text-primary transition-colors">Platinum</span>
</label>
<label class="flex items-center space-x-3 cursor-pointer group">
<input class="form-checkbox text-primary border-gray-300 rounded focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm group-hover:text-primary transition-colors">Rose Gold</span>
</label>
</div>
</div>
<div>
<h3 class="text-xs font-bold uppercase tracking-widest border-b border-gray-200 pb-2 mb-4">Price Range</h3>
<div class="space-y-2">
<label class="flex items-center space-x-3 cursor-pointer group">
<input class="form-radio text-primary border-gray-300 focus:ring-primary h-4 w-4" name="price" type="radio"/>
<span class="text-sm group-hover:text-primary transition-colors">Under $5,000</span>
</label>
<label class="flex items-center space-x-3 cursor-pointer group">
<input class="form-radio text-primary border-gray-300 focus:ring-primary h-4 w-4" name="price" type="radio"/>
<span class="text-sm group-hover:text-primary transition-colors">$5,000 - $15,000</span>
</label>
<label class="flex items-center space-x-3 cursor-pointer group">
<input class="form-radio text-primary border-gray-300 focus:ring-primary h-4 w-4" name="price" type="radio"/>
<span class="text-sm group-hover:text-primary transition-colors">$15,000 - $50,000</span>
</label>
<label class="flex items-center space-x-3 cursor-pointer group">
<input class="form-radio text-primary border-gray-300 focus:ring-primary h-4 w-4" name="price" type="radio"/>
<span class="text-sm group-hover:text-primary transition-colors">$50,000 +</span>
</label>
</div>
</div>
<div class="bg-primary/5 p-6 rounded-lg border border-primary/10">
<h3 class="text-xs font-bold uppercase tracking-widest text-primary mb-4 flex items-center">
<span class="material-icons text-base mr-2">store</span> Nearby Boutique
                        </h3>
<div class="relative">
<select class="w-full bg-white dark:bg-background-dark border border-primary/20 rounded py-2 px-3 text-sm font-medium focus:ring-primary focus:border-primary outline-none appearance-none">
<option>Select Location</option>
<option>New York - Fifth Avenue</option>
<option>Paris - Place Vendôme</option>
<option>London - Bond Street</option>
<option>Dubai - Mall of the Emirates</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-2 text-primary pointer-events-none">expand_more</span>
</div>
<p class="mt-3 text-[10px] text-gray-500 italic">Showing availability for Fifth Avenue Flagship</p>
</div>
</div>
</aside>
<div class="flex-1">
<div class="flex flex-col sm:flex-row items-baseline justify-between mb-8 pb-4 border-b border-gray-100">
<div>
<h1 class="text-3xl font-light tracking-tight text-charcoal dark:text-gray-100 italic">Fine Jewelry</h1>
<p class="text-xs text-gray-500 mt-1 uppercase tracking-widest">128 Masterpieces Found</p>
</div>
<div class="flex items-center space-x-6 mt-4 sm:mt-0">
<div class="flex items-center text-xs tracking-widest uppercase text-gray-400">
<span>Grid</span>
<div class="flex space-x-1 mx-3">
<div class="w-3 h-3 border border-primary bg-primary/20"></div>
<div class="w-3 h-3 border border-gray-300"></div>
</div>
</div>
<div class="relative flex items-center">
<span class="text-xs uppercase tracking-widest text-gray-400 mr-2">Sort by:</span>
<select class="text-xs font-bold uppercase tracking-widest bg-transparent border-none focus:ring-0 p-0 pr-6">
<option>Featured</option>
<option>Newest</option>
<option>Price: High to Low</option>
<option>Price: Low to High</option>
</select>
</div>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16">

<?php foreach($products as $product): ?>

<div class="group">
    <div class="relative aspect-[4/5] overflow-hidden bg-marble-accent rounded-lg mb-4">
        <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700"
            src="<?= base_url('uploads/products/' . $product['image']) ?>"
            alt="<?= esc($product['name']) ?>">

        <?php if($product['is_pickup']): ?>
        <div class="absolute top-4 right-4 bg-white/90 px-3 py-1 text-[10px] font-bold tracking-tighter text-primary border border-primary/20 rounded shadow-sm">
            BOUTIQUE PICKUP
        </div>
        <?php endif; ?>
    </div>

    <div class="space-y-1 mb-6">
        <p class="text-[10px] uppercase tracking-[0.2em] text-gray-500">
            <?= esc($product['collection_name']) ?>
        </p>

        <h3 class="text-lg font-medium group-hover:text-primary transition-colors">
            <?= esc($product['name']) ?>
        </h3>

        <p class="text-sm text-gray-400">
            <?= esc($product['material']) ?>
        </p>

        <p class="text-lg font-semibold pt-2 text-charcoal">
            $<?= number_format($product['price'], 0, ',', ',') ?>
        </p>
    </div>

    <div class="flex flex-col gap-2">
        <a href="<?= base_url('product/'.$product['slug']) ?>"
           class="w-full bg-primary text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-[#d4a929] transition-colors text-center block">
           VIEW DETAILS
        </a>
    </div>
</div>

<?php endforeach; ?>

</div>
<div class="mt-20 flex items-center justify-center space-x-4">
<button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-gray-400 hover:border-primary hover:text-primary transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<div class="flex space-x-2 text-sm">
<button class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white font-bold">1</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">2</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">3</button>
<span class="flex items-center justify-center w-10">...</span>
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">12</button>
</div>
<button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-gray-400 hover:border-primary hover:text-primary transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
</main>

<?= $this->include('layout/footer'); ?>