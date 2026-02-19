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
<div class="group">
<div class="relative aspect-[4/5] overflow-hidden bg-marble-accent rounded-lg mb-4">
<img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" data-alt="Exquisite diamond necklace on white marble" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn1QKCpcE1NfKR3dvvYcclozLO29QRZET5ecKCwtAmHzr9O48is6LpVuFlm2SqfN_JjHpUIKIbD8twZkhZeBeMkzgLj25f0zDE7qV570kPD-3ZJrs0u0v5jUQNsI9f2dCp04ewGVu-zCM9nedwdA2pcgO2SZuALukoomA_IIDQWHnkVllCEGPolFpu__O-YBEWlrOyJ3rXTye831gGhNsCUQiJVTLtlD4v0spkMbUbb2ztajVYZ7Ea6bzMv72Zdb8QWqDla3EMmqo"/>
<div class="absolute top-4 right-4 bg-white/90 dark:bg-background-dark/90 px-3 py-1 text-[10px] font-bold tracking-tighter text-primary border border-primary/20 rounded shadow-sm">
                                BOUTIQUE PICKUP
                            </div>
</div>
<div class="space-y-1 mb-6">
<p class="text-[10px] uppercase tracking-[0.2em] text-gray-500">Celestial Light Collection</p>
<h3 class="text-lg font-medium group-hover:text-primary transition-colors">Astra Diamond Choker</h3>
<p class="text-sm text-gray-400">18k White Gold, 4.5 Carat Total Weight</p>
<p class="text-lg font-semibold pt-2 text-charcoal dark:text-gray-100">$32,400</p>
</div>
<div class="flex flex-col gap-2">
<button class="w-full bg-black text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-gray-900 transition-colors">
ADD TO CART
</button>

<a href="<?= base_url('product/astra-diamond-choker') ?>" 
   class="w-full bg-primary text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-[#d4a929] transition-colors text-center block">
   RESERVE FOR PICKUP
</a>

</div>
</div>
<div class="group">
<div class="relative aspect-[4/5] overflow-hidden bg-marble-accent rounded-lg mb-4">
<img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" data-alt="Emerald and diamond vintage ring" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOUwM8a7-jhhrQ-_Vvk6Gumad2C3o1daZKjTgTHly8Mat8X7eWDHwuoZSr0caGKXiW6YfvFV6Y9VX950qGgRktb0Wtsh5vD9fAGS31MVRCscv7c6k7x6aoiL8mCJQc97XSymUqkxMeXKZfjqxIV4T6NYKlMX4l0tO4lV4HcrqW0AvmkCV3PAp46GdYZEq3wkpG7lBGeiEXUPHxcL6u3Ni5KFQOTJ4TFH8TbhI5mAwd08jbTfvXWq8zqXFnoUEOO_CHpJCvbenWfak"/>
</div>
<div class="space-y-1 mb-6">
<p class="text-[10px] uppercase tracking-[0.2em] text-gray-500">Emerald Dreams</p>
<h3 class="text-lg font-medium group-hover:text-primary transition-colors">Verdant Muse Ring</h3>
<p class="text-sm text-gray-400">Colombian Emerald, 18k Yellow Gold</p>
<p class="text-lg font-semibold pt-2 text-charcoal dark:text-gray-100">$18,900</p>
</div>
<div class="flex flex-col gap-2">
<button class="w-full bg-black text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-gray-900 transition-colors">
ADD TO CART
</button>

<a href="<?= base_url('product/verdant-muse-ring') ?>" 
   class="w-full bg-primary text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-[#d4a929] transition-colors text-center block">
   RESERVE FOR PICKUP
</a>
</div>
</div>
<div class="group">
<div class="relative aspect-[4/5] overflow-hidden bg-marble-accent rounded-lg mb-4">
<img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" data-alt="Solid gold cuff bracelet" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0N4ZSssGKxpzD4WvGtzPWwMNaCRXyXrq9tiSIeSJx08gQnaUD51tH-jdixdoe-bT3ogB43Va5CScMXVMZAytKN_0_sLVdnxd-fGyQ_vxwk1krJ3qA2PF19teFSov8uPq9WYP-e0tmLWqZS3Iy_WknnFrh4qwy8Kq9nVw-TttIJy4FThSbaz8RCgfDYsRpG3abctyRP3I5o1mwNeUhdW9h84tWhkB1nJUfuPYleGb8FsXmRzC6MZHDS8EPa7lIVUomnzEU4v1Eh7Y"/>
<div class="absolute top-4 right-4 bg-white/90 dark:bg-background-dark/90 px-3 py-1 text-[10px] font-bold tracking-tighter text-primary border border-primary/20 rounded shadow-sm">
                                BOUTIQUE PICKUP
                            </div>
</div>
<div class="space-y-1 mb-6">
<p class="text-[10px] uppercase tracking-[0.2em] text-gray-500">Gilded Age</p>
<h3 class="text-lg font-medium group-hover:text-primary transition-colors">Eternal Aurelian Cuff</h3>
<p class="text-sm text-gray-400">Sculpted 22k Solid Gold</p>
<p class="text-lg font-semibold pt-2 text-charcoal dark:text-gray-100">$8,250</p>
</div>
<div class="flex flex-col gap-2">
<button class="w-full bg-black text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-gray-900 transition-colors">
ADD TO CART
</button>

<a href="<?= base_url('product/eternal-aurelian-cuff') ?>" 
   class="w-full bg-primary text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-[#d4a929] transition-colors text-center block">
   RESERVE FOR PICKUP
</a>
</div>
</div>
<div class="group">
<div class="relative aspect-[4/5] overflow-hidden bg-marble-accent rounded-lg mb-4">
<img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" data-alt="Diamond drop earrings on neutral background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtlwNfo0d6IV14IdmkT5A8TrTbGmh0JIb0NkszB9K23vkV5x1XnFlSnCDkeM_YiNyHAYgONhDZ0rAr8OYzpZOAwu5mxSJtIWhx1qVraSAznoYNFRwWaVPEmwJFWZYwP9Wl0WUxY6dwpAvZ_n-l45dX3Ss3pIxTbP1rqhwRWpfA9aydkQGNRqvqxW457quarShMzPlVqQ_pd8KEVXvWkwsNuurmNda9KzwXOH7iFiypqtwM0XIsiBAyF60NRO8zQ7WV1gZmSPJGFwU"/>
</div>
<div class="space-y-1 mb-6">
<p class="text-[10px] uppercase tracking-[0.2em] text-gray-500">Heirloom Radiance</p>
<h3 class="text-lg font-medium group-hover:text-primary transition-colors">Cascade Diamond Drops</h3>
<p class="text-sm text-gray-400">Platinum, Marquise &amp; Pear Cut</p>
<p class="text-lg font-semibold pt-2 text-charcoal dark:text-gray-100">$12,400</p>
</div>
<div class="flex flex-col gap-2">
<button class="w-full bg-black text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-gray-900 transition-colors">
ADD TO CART
</button>

<a href="<?= base_url('product/cascade-diamond-drops') ?>" 
   class="w-full bg-primary text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-[#d4a929] transition-colors text-center block">
   RESERVE FOR PICKUP
</a>
</div>
</div>
<div class="group">
<div class="relative aspect-[4/5] overflow-hidden bg-marble-accent rounded-lg mb-4">
<img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" data-alt="Sapphire gemstone pendant necklace" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtFSw0EPTmjs5ftW1q0jo0qGLRLhq7g4CHXzqTDVRoOa06-dDLJzUKHWS9B0HsC5sYeoKUafdER7jXna-GSsriqYV4f3clFNd2Wu-0CINs4pWvx2DyDwg1tt639Pk6GjD1QXeiL4NLHUMW0YdG6DaUDR6lTSXQ1_C9oAmoeTCwVtgNy7CFAuJCZmN2Ixu9FOoZpHi1CywQBGrlWNPsXwSZNfkIwibPp7rIMP5-RBVB62cPq-vGjSV1bLfYLZJdhsFv8F6CuSNPl3o"/>
</div>
<div class="space-y-1 mb-6">
<p class="text-[10px] uppercase tracking-[0.2em] text-gray-500">Midnight Diamond</p>
<h3 class="text-lg font-medium group-hover:text-primary transition-colors">Midnight Star Pendant</h3>
<p class="text-sm text-gray-400">Blue Sapphire, 18k White Gold</p>
<p class="text-lg font-semibold pt-2 text-charcoal dark:text-gray-100">$15,600</p>
</div>
<div class="flex flex-col gap-2">
<button class="w-full bg-black text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-gray-900 transition-colors">
ADD TO CART
</button>

<a href="<?= base_url('product/midnight-star-pendant') ?>" 
   class="w-full bg-primary text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-[#d4a929] transition-colors text-center block">
   RESERVE FOR PICKUP
</a>
</div>
</div>
<div class="group">
<div class="relative aspect-[4/5] overflow-hidden bg-marble-accent rounded-lg mb-4">
<img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" data-alt="Rose gold delicate bracelet" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDow6bj6tfsJ-pHFxGhOffUjd-X1Ozz8M72nTyRZKMiS6vfSK78a2sE6jmjA4PJDjoGq4t6ydoMSH4xybQwGeEYisDY0-jXDCg1Ky5WZoMGhatw36w5AoFAu7LCKPAE4Nsm3h5lWA9aAmBcKtoB196QEb4bwMT0sktrgLwIJX9R_61GCsXtbIufULEIpEdS4wzZ-T21HHGTFlF0OzosQ8ITt71dZUh6zU534Gv0kt6kZGUL-Kv5OMHRC7J78jo0g-hmFToK-PkYO88"/>
<div class="absolute top-4 right-4 bg-white/90 dark:bg-background-dark/90 px-3 py-1 text-[10px] font-bold tracking-tighter text-primary border border-primary/20 rounded shadow-sm">
                                BOUTIQUE PICKUP
                            </div>
</div>
<div class="space-y-1 mb-6">
<p class="text-[10px] uppercase tracking-[0.2em] text-gray-500">Celestial Light</p>
<h3 class="text-lg font-medium group-hover:text-primary transition-colors">Seraphina Rose Link</h3>
<p class="text-sm text-gray-400">18k Rose Gold, Pavé Diamonds</p>
<p class="text-lg font-semibold pt-2 text-charcoal dark:text-gray-100">$6,450</p>
</div>
<div class="flex flex-col gap-2">
<button class="w-full bg-black text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-gray-900 transition-colors">
ADD TO CART
</button>

<a href="<?= base_url('product/seraphina-rose-link') ?>" 
   class="w-full bg-primary text-white py-3 text-[10px] font-bold tracking-[0.15em] uppercase rounded hover:bg-[#d4a929] transition-colors text-center block">
   RESERVE FOR PICKUP
</a>
</div>
</div>
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

