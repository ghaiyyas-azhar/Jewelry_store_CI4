<?php $title = "Nahecididi | Luxury Jewelry & Private Viewings"; ?>
<?= $this->include('layout/header'); ?>

<script>
function toggleUserDropdown() {
    const dropdown = document.getElementById("userDropdown");
    dropdown.classList.toggle("hidden");
}

// klik luar dropdown → close
window.addEventListener("click", function(e) {
    const dropdown = document.getElementById("userDropdown");
    if (!e.target.closest(".relative")) {
        dropdown.classList.add("hidden");
    }
});
</script>

<main>
<section class="relative h-screen min-h-[850px] flex items-center justify-center overflow-hidden">
<div class="absolute inset-0">
<img alt="Luxury Diamond Necklace on Marble" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCP1G4vwBr0Wwl2EZtDloXbS_KWqXAx2_qrNDDPjOpOpne3uelS-7ho18KpBJNBhMOJ4M0ANz2hqQP7v4Bf77ELKyo0RqnPgyy2kb-ywrND2y2QbubAXHNG6sUMdarOzQDmllu1pJDsw19q2-NJLS8nbl7d52AuJJslDmyNm4mfE1yyyNhfSJSkYRzky-wV1jtZDTPE5EMITIJ46HzhnN-RLH5iNB37p-z_3-MWBhAqhf7NQ6TKL1ZnKK5a3h1W6nX-eXGc_B0k2Mo"/>
<div class="absolute inset-0 hero-overlay"></div>
</div>
<div class="relative z-10 text-center max-w-5xl px-6 pt-20">
<div class="mb-8">
<span class="font-serif italic text-primary text-xl mb-4 block">The Nahecididi Signature</span>
<div class="h-px w-24 bg-primary/40 mx-auto"></div>
</div>
<h2 class="font-serif text-6xl md:text-8xl text-slate-900 mb-8 leading-[1.1] font-normal">
                Reserve Online, <br/>
<span class="italic font-light">Experience in Person</span>
</h2>
<p class="text-slate-800 text-lg md:text-xl font-light mb-14 max-w-2xl mx-auto leading-relaxed tracking-wide">
                A seamless union of digital convenience and boutique intimacy. Select your masterpiece online for a private viewing at your chosen Nahecididi boutique.
            </p>
<div class="max-w-xl mx-auto bg-white/40 backdrop-blur-md p-1.5 border border-white/60 shadow-sm">

<form action="/search-boutique" method="post" class="flex flex-col md:flex-row">

<div class="flex-grow relative">
<span class="material-symbols-outlined absolute left-5 top-1/2 -translate-y-1/2 text-primary">location_on</span>

<input 
    name="location"
    type="text"
    placeholder="Find your nearest boutique"
    class="w-full bg-white border-none pl-14 pr-4 py-5 text-slate-900 focus:ring-1 focus:ring-primary placeholder:text-slate-400 placeholder:text-xs placeholder:uppercase placeholder:tracking-[0.2em]"
/>
</div>

<button type="submit" class="bg-slate-900 hover:bg-primary text-white px-10 py-5 font-medium tracking-[0.2em] uppercase text-xs transition-all flex items-center justify-center">
Search
</button>

</form>

</div>
<div class="mt-12">
<button class="text-slate-900/60 hover:text-primary text-[10px] tracking-[0.4em] uppercase flex items-center justify-center mx-auto transition-colors group">
<span>Explore Our Collections</span>
<span class="material-symbols-outlined ml-3 !text-sm group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
</button>
</div>
</div>
<div class="absolute bottom-12 left-1/2 -translate-x-1/2 text-slate-400 flex flex-col items-center">
<div class="w-px h-16 bg-primary/30 relative">
<div class="absolute top-0 left-0 w-full h-1/3 bg-primary"></div>
</div>
</div>
</section>
<section class="py-32 bg-marble">
<div class="max-w-7xl mx-auto px-6">
<div class="grid grid-cols-1 md:grid-cols-3 gap-24">
<div class="text-center group">
<div class="mb-10 relative inline-block">
<span class="material-symbols-outlined text-primary text-5xl font-extralight">inventory_2</span>
<div class="absolute -bottom-2 -right-2 w-8 h-8 bg-primary/10 rounded-full -z-10 group-hover:scale-150 transition-transform duration-700"></div>
</div>
<h3 class="font-serif text-2xl mb-5 font-light tracking-wide">I. Select Online</h3>
<p class="text-slate-500 leading-relaxed font-light text-sm tracking-wide">
                        Browse our digital atelier and secure your preferred selection for a curated private presentation.
                    </p>
</div>
<div class="text-center group">
<div class="mb-10 relative inline-block">
<span class="material-symbols-outlined text-primary text-5xl font-extralight">calendar_month</span>
<div class="absolute -bottom-2 -right-2 w-8 h-8 bg-primary/10 rounded-full -z-10 group-hover:scale-150 transition-transform duration-700"></div>
</div>
<h3 class="font-serif text-2xl mb-5 font-light tracking-wide">II. Personal Viewing</h3>
<p class="text-slate-500 leading-relaxed font-light text-sm tracking-wide">
                        Visit our boutique at your leisure. Our ambassadors will have your selection prepared for an intimate fitting.
                    </p>
</div>
<div class="text-center group">
<div class="mb-10 relative inline-block">
<span class="material-symbols-outlined text-primary text-5xl font-extralight">verified</span>
<div class="absolute -bottom-2 -right-2 w-8 h-8 bg-primary/10 rounded-full -z-10 group-hover:scale-150 transition-transform duration-700"></div>
</div>
<h3 class="font-serif text-2xl mb-5 font-light tracking-wide">III. Ultimate Acquisition</h3>
<p class="text-slate-500 leading-relaxed font-light text-sm tracking-wide">
                        Finalize your purchase in the sanctuary of our store, ensuring the piece meets your exacting standards.
                    </p>
</div>
</div>
</div>
</section>
<section class="py-32 bg-[#F9F9F9]">
<div class="max-w-7xl mx-auto px-10">
<div class="flex flex-col lg:flex-row items-center gap-24">
<div class="lg:w-1/2">
<div class="relative">
<div class="absolute -top-12 -left-12 w-full h-full border border-primary/20 -z-10"></div>
<img alt="Nahecididi Boutique Interior" class="relative z-10 shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwVSStk9Rx64ySBe_r6YFoTPDbSCdBPRdQNAfas_4lfrxAlmIeBZHeRhnKiqQ338H6nMoBXBPgN69qFez0QEuNRHj-3Nh8shiY33SjQMRoObvFJboHL2jBPCCkvIgF2xcwCGqmVHEZcCtL3E1yQ8XjB3OUiIj4957fr-FnTizUj32kEEaChJaBVgynuM5jTByrzekqkK8L7ekRFH7ejeB7fxZKD8jwsEJ9Jz_QLejvFBKh8TQ3aFBW0uBzHD4xbzJJCgDrLqM6qPo"/>
</div>
</div>
<div class="lg:w-1/2">
<span class="text-primary text-[10px] tracking-[0.5em] uppercase font-semibold mb-6 block">The Maison</span>
<h2 class="font-serif text-5xl md:text-6xl mb-10 leading-tight font-normal text-slate-900">Nahecididi Mastery</h2>
<p class="text-slate-600 text-lg mb-12 font-light leading-relaxed">
                        For generations, Nahecididi has redefined the art of jewelry. Each piece is a testament to our heritage of artisanal mastery, waiting to be discovered in the serene atmosphere of our global boutiques.
                    </p>
<ul class="space-y-6 mb-14">
<li class="flex items-center space-x-4 border-b border-slate-200 pb-4">
<span class="material-symbols-outlined text-primary">diamond</span>
<span class="text-xs uppercase tracking-[0.2em] font-medium">Bespoke Diamond Consultations</span>
</li>
<li class="flex items-center space-x-4 border-b border-slate-200 pb-4">
<span class="material-symbols-outlined text-primary">architecture</span>
<span class="text-xs uppercase tracking-[0.2em] font-medium">Custom Setting Design</span>
</li>
<li class="flex items-center space-x-4">
<span class="material-symbols-outlined text-primary">support_agent</span>
<span class="text-xs uppercase tracking-[0.2em] font-medium">Global Concierge Privileges</span>
</li>
</ul>
<button class="bg-primary text-white px-12 py-5 text-[10px] tracking-[0.4em] uppercase font-bold hover:bg-slate-900 transition-all shadow-lg">
                        Our Global Boutiques
                    </button>
</div>
</div>
</div>
</section>
<section class="bg-marble py-32 border-y border-primary/10">
<div class="max-w-4xl mx-auto px-6 text-center">
<h3 class="font-serif text-4xl mb-6 font-light">Join the Nahecididi Circle</h3>
<p class="text-slate-500 mb-12 font-light text-lg tracking-wide">Access exclusive invitations to private viewings and early access to high jewelry collections.</p>
<form action="/subscribe" method="post" class="flex flex-col sm:flex-row gap-4 max-w-2xl mx-auto">

<input 
    name="email"
    type="email"
    placeholder="EMAIL ADDRESS"
    class="flex-grow bg-white border border-slate-200 px-8 py-5 focus:ring-1 focus:ring-primary focus:border-primary outline-none text-sm font-light"
/>

<button type="submit" class="bg-slate-900 text-white px-12 py-5 font-medium tracking-[0.3em] uppercase text-[10px] hover:bg-primary transition-all">
Subscribe
</button>

</form>
</div>
</section>
</main>

<?= $this->include('layout/footer'); ?>