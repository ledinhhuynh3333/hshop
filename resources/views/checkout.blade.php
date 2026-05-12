@extends('layout.master')

@section('title', 'Checkout')

@section('content')

<h1 class="text-white text-5xl text-center mt-10">
    Checkout Page
</h1>

<main class="max-w-container-max mx-auto px-gutter py-section-padding">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
<!-- Left Column: Checkout Forms -->
<div class="lg:col-span-8 space-y-10">
<section>
<h1 class="font-headline-lg text-headline-lg mb-8 uppercase tracking-tight">Checkout</h1>
<!-- Delivery Information -->
<div class="glass-card p-8 rounded-xl shadow-2xl mb-gutter">
<div class="flex items-center gap-4 mb-8">
<span class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold">1</span>
<h2 class="font-headline-md text-headline-md">Shipping Information</h2>
</div>
<form class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="md:col-span-2">
<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Full Name</label>
<input class="w-full bg-surface-container-high border-outline-variant/30 text-on-surface p-4 rounded focus:ring-2 focus:ring-primary-container focus:border-transparent transition-all outline-none" placeholder="e.g. Alex Nguyen" type="text"/>
</div>
<div>
<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Email Address</label>
<input class="w-full bg-surface-container-high border-outline-variant/30 text-on-surface p-4 rounded focus:ring-2 focus:ring-primary-container focus:border-transparent transition-all outline-none" placeholder="alex@example.com" type="email"/>
</div>
<div>
<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Phone Number</label>
<input class="w-full bg-surface-container-high border-outline-variant/30 text-on-surface p-4 rounded focus:ring-2 focus:ring-primary-container focus:border-transparent transition-all outline-none" placeholder="+84 000 000 000" type="tel"/>
</div>
<div class="md:col-span-2">
<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Shipping Address</label>
<input class="w-full bg-surface-container-high border-outline-variant/30 text-on-surface p-4 rounded focus:ring-2 focus:ring-primary-container focus:border-transparent transition-all outline-none" placeholder="Street, Apartment, Ward, District" type="text"/>
</div>
<div>
<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">City</label>
<select class="w-full bg-surface-container-high border-outline-variant/30 text-on-surface p-4 rounded focus:ring-2 focus:ring-primary-container focus:border-transparent transition-all outline-none">
<option>Ho Chi Minh City</option>
<option>Hanoi</option>
<option>Da Nang</option>
</select>
</div>
<div>
<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Postal Code</label>
<input class="w-full bg-surface-container-high border-outline-variant/30 text-on-surface p-4 rounded focus:ring-2 focus:ring-primary-container focus:border-transparent transition-all outline-none" placeholder="700000" type="text"/>
</div>
</form>
</div>
<!-- Shipping Method -->
<div class="glass-card p-8 rounded-xl shadow-2xl mb-gutter">
<div class="flex items-center gap-4 mb-8">
<span class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold">2</span>
<h2 class="font-headline-md text-headline-md">Shipping Method</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<label class="relative flex items-center p-6 bg-surface-container border-2 border-primary rounded-xl cursor-pointer">
<input checked="" class="hidden" name="shipping" type="radio"/>
<div class="flex-1">
<span class="block font-label-bold text-primary mb-1 uppercase">Standard Delivery</span>
<span class="block text-on-surface-variant text-sm">3 - 5 Business Days</span>
</div>
<span class="font-bold text-primary">FREE</span>
</label>
<label class="relative flex items-center p-6 bg-surface-container border border-outline-variant/30 rounded-xl cursor-pointer hover:border-primary transition-all">
<input class="hidden" name="shipping" type="radio"/>
<div class="flex-1">
<span class="block font-label-bold text-on-surface mb-1 uppercase">Express Delivery</span>
<span class="block text-on-surface-variant text-sm">Next Day Delivery</span>
</div>
<span class="font-bold text-on-surface">$15.00</span>
</label>
</div>
</div>
<!-- Payment Method -->
<div class="glass-card p-8 rounded-xl shadow-2xl">
<div class="flex items-center gap-4 mb-8">
<span class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold">3</span>
<h2 class="font-headline-md text-headline-md">Payment Method</h2>
</div>
<div class="space-y-4">
<div class="flex items-center justify-between p-6 bg-surface-container border border-outline-variant/30 rounded-xl hover:border-primary transition-all group cursor-pointer">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary">credit_card</span>
<span class="font-label-bold uppercase">Credit / Debit Card</span>
</div>
<div class="w-5 h-5 rounded-full border-2 border-primary flex items-center justify-center">
<div class="w-2.5 h-2.5 bg-primary rounded-full"></div>
</div>
</div>
<div class="flex items-center justify-between p-6 bg-surface-container border border-outline-variant/30 rounded-xl hover:border-primary transition-all group cursor-pointer">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition-colors">wallet</span>
<span class="font-label-bold uppercase">Digital Wallet (Momo, ShopeePay)</span>
</div>
<div class="w-5 h-5 rounded-full border-2 border-outline-variant"></div>
</div>
<div class="flex items-center justify-between p-6 bg-surface-container border border-outline-variant/30 rounded-xl hover:border-primary transition-all group cursor-pointer">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition-colors">payments</span>
<span class="font-label-bold uppercase">Cash On Delivery</span>
</div>
<div class="w-5 h-5 rounded-full border-2 border-outline-variant"></div>
</div>
</div>
</div>
</section>
</div>
<!-- Right Column: Order Summary -->
<aside class="lg:col-span-4 sticky top-24">
<div class="glass-card rounded-xl p-8 shadow-2xl border-primary/20">
<h2 class="font-headline-md text-headline-md mb-8 uppercase tracking-tight">Order Summary</h2>
<!-- Product List -->
<div class="space-y-6 mb-8">
<div class="flex gap-4">
<div class="w-20 h-20 bg-surface-container-high rounded flex-shrink-0 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A studio shot of a high-performance electric blue running shoe with metallic silver accents. The shoe is presented in a dynamic floating position against a dark charcoal background with soft ambient lighting highlighting the technical mesh textures. The aesthetic is clean, premium, and athletic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGVVMaOWsYXVW2rsOGT1rPQFWeSgM6Fa6WRfekAUgO-ShVwwfwtoQUKVg0ZC0v1pkucCajTDLykDfTuVxtzkjxK1qTnXTt2bkq6r04Kmx7xMNHUHE_941XMAfF9DVzpO05fVbhk1g-T-v-yTvMNTqgJ8UfbcnOK9EWzgQiGyvTOPUFEB2AjR7JHuWn0nJS5fwt_OP_ocGTolWe159h9KGqL7erNyNa_L4Q_Rr7A7MEy-gV7IWCrr-_e3IoI8SPOo_Z8IzhHrqx9FQ"/>
</div>
<div class="flex-1">
<div class="flex justify-between items-start">
<h4 class="font-label-bold text-sm uppercase">Air Max Volt Alpha</h4>
<span class="font-bold">$180.00</span>
</div>
<p class="text-xs text-on-surface-variant mt-1">Size: US 10.5 | Color: Electric Blue</p>
<p class="text-xs text-on-surface-variant">Qty: 1</p>
</div>
</div>
<div class="flex gap-4">
<div class="w-20 h-20 bg-surface-container-high rounded flex-shrink-0 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Modern high-top sneakers with a sleek white and grey color palette, featuring bright orange accents on the heel and logo. The lighting is crisp and highlights the layered leather and synthetic materials. The background is a dark, minimalist surface that creates a high-contrast, luxurious atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB59D7zjzvF1XAwb0KKS_vc3LFgNNIUn2PARiHJazyOsAiDjQ8Hi-xrXfwm_49M_a4dsY-C9tW3oqqi8xAfwUXWDrW1m6fsFdwIIplaftd9nY8La9aRGj8A2hoGmm44X5opZUdmG_NnpZnqWaKbb_XFcSVk9GgCycXILNkseRpUB7TXYIP1na0nDk1vLi5F9ckDcPQrzmQ0DpmT-xqPJLixHrPS-_kbESDXqFX69Pp23TScUSEiDlsh5XCLwNn-kmdVR00LzmluLUg"/>
</div>
<div class="flex-1">
<div class="flex justify-between items-start">
<h4 class="font-label-bold text-sm uppercase">Street Flow High</h4>
<span class="font-bold">$220.00</span>
</div>
<p class="text-xs text-on-surface-variant mt-1">Size: US 10.5 | Color: Arctic Grey</p>
<p class="text-xs text-on-surface-variant">Qty: 1</p>
</div>
</div>
</div>
<!-- Promo Code -->
<div class="flex gap-2 mb-8">
<input class="flex-1 bg-surface-container-low border-outline-variant/30 text-on-surface p-3 rounded focus:ring-1 focus:ring-primary outline-none text-sm uppercase tracking-wider" placeholder="Promo Code" type="text"/>
<button class="px-6 bg-surface-container-highest font-label-bold text-xs uppercase tracking-widest hover:bg-primary hover:text-on-primary transition-all rounded">Apply</button>
</div>
<!-- Financials -->
<div class="space-y-4 pt-6 border-t border-outline-variant/20">
<div class="flex justify-between text-on-surface-variant">
<span>Subtotal</span>
<span>$400.00</span>
</div>
<div class="flex justify-between text-on-surface-variant">
<span>Shipping</span>
<span class="text-primary uppercase font-bold text-sm">Free</span>
</div>
<div class="flex justify-between text-on-surface-variant pb-6 border-b border-outline-variant/20">
<span>Tax</span>
<span>$32.00</span>
</div>
<div class="flex justify-between items-center py-4">
<span class="font-headline-md text-lg uppercase">Total</span>
<span class="font-display-xl text-3xl text-primary">$432.00</span>
</div>
</div>
<!-- CTA -->
<button class="w-full mt-8 py-5 bg-primary-container text-on-primary-container font-headline-md uppercase tracking-widest text-lg rounded-full hover:bg-secondary-container hover:text-on-secondary-container transition-all transform hover:scale-[1.02] active:scale-95 shadow-xl shadow-primary-container/20">
                        Place Order Now
                    </button>
<div class="flex items-center justify-center gap-3 mt-6 text-on-surface-variant text-xs">
<span class="material-symbols-outlined text-sm">lock</span>
<span>Secure SSL Encrypted Checkout</span>
</div>
</div>
</aside>
</div>
</main>

@endsection