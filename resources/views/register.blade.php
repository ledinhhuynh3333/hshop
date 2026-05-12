@extends('layout.master')

@section('title', 'Register')

@section('content')

<h1 class="text-white text-5xl text-center mt-10">
    Register Page
</h1>
<body class="bg-surface-dim text-on-surface font-body-md overflow-x-hidden">
<div class="relative min-h-screen flex flex-col md:flex-row items-stretch">
<!-- Visual Side (Hidden on mobile for focus) -->
<div class="hidden md:flex relative w-1/2 lg:w-3/5 overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-tr from-surface-dim via-surface-dim/40 to-transparent z-10"></div>
<img class="w-full h-full object-cover grayscale contrast-125" data-alt="A cinematic, high-contrast photograph of a premium limited-edition sneaker displayed in a dark, minimalist industrial space. The lighting is dramatic and moody, with electric blue highlights cutting through deep shadows to emphasize the sleek contours of the shoe. The atmosphere is sophisticated and high-tech, perfectly reflecting an exclusive sports culture aesthetic with a sharp, aggressive edge." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAOnw3T_ifyd1my1CjHeRuN-9OqBOHbjHgE5ny8wBfnJ2i20gRk2YGRSiXTIToM3kR3khQ1ckIcRvxsqgZgfjOWHFDO-kAT_KahB68-4zisUiat2wLFv02fV0nFVCLSLxEYeqFikrShGSkG5-PKoQqCt8U9YEf7HpIjDhaFAe2vMuOa_NoSbxFtO1jJZ9jYNTgTtX02VqsnAQ5TbqOwGRQMgV2UCOHRWTXTY7ZmS8pzMAEht0pDUJLAZEEPePrU71qVnol-gkdPZeM"/>
<div class="absolute bottom-16 left-16 z-20 max-w-md">
<h1 class="font-display-xl text-display-xl text-primary leading-none uppercase mb-4">JOIN THE<br/>ELITE</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Unlock exclusive drops, performance insights, and a community engineered for peak performance.</p>
</div>
</div>
<!-- Registration Form Side -->
<div class="flex-1 flex flex-col justify-center items-center px-margin-mobile md:px-gutter bg-surface">
<div class="w-full max-w-[480px] space-y-8">
<!-- Brand Anchor Header -->
<div class="text-center md:text-left">
<span class="font-display-xl text-headline-md font-extrabold tracking-tighter text-primary uppercase">SOLE_CULTURE</span>
<h2 class="mt-6 font-headline-lg text-headline-lg text-on-surface">Create your account</h2>
<p class="text-on-surface-variant font-body-md mt-2">Enter your details to join the culture.</p>
</div>
<form class="space-y-6">
<!-- Tên -->
<div class="space-y-2">
<label class="block font-label-bold text-label-bold text-on-surface-variant uppercase tracking-widest" for="full-name">Full Name</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">person</span>
<input class="w-full bg-surface-container border-outline-variant rounded-lg py-4 pl-12 pr-4 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all input-glow placeholder:text-outline/50" id="full-name" placeholder="Enter your full name" type="text"/>
</div>
</div>
<!-- Email -->
<div class="space-y-2">
<label class="block font-label-bold text-label-bold text-on-surface-variant uppercase tracking-widest" for="email">Email Address</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">mail</span>
<input class="w-full bg-surface-container border-outline-variant rounded-lg py-4 pl-12 pr-4 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all input-glow placeholder:text-outline/50" id="email" placeholder="email@example.com" type="email"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<!-- Mật khẩu -->
<div class="space-y-2">
<label class="block font-label-bold text-label-bold text-on-surface-variant uppercase tracking-widest" for="password">Password</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">lock</span>
<input class="w-full bg-surface-container border-outline-variant rounded-lg py-4 pl-12 pr-4 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all input-glow placeholder:text-outline/50" id="password" placeholder="••••••••" type="password"/>
</div>
</div>
<!-- Nhập lại mật khẩu -->
<div class="space-y-2">
<label class="block font-label-bold text-label-bold text-on-surface-variant uppercase tracking-widest" for="confirm-password">Confirm</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">shield</span>
<input class="w-full bg-surface-container border-outline-variant rounded-lg py-4 pl-12 pr-4 text-on-surface focus:ring-2 focus:ring-primary focus:border-transparent transition-all input-glow placeholder:text-outline/50" id="confirm-password" placeholder="••••••••" type="password"/>
</div>
</div>
</div>
<!-- Terms checkbox -->
<div class="flex items-start gap-3 pt-2">
<div class="flex items-center h-5">
<input class="w-5 h-5 bg-surface-container border-outline-variant rounded text-primary focus:ring-primary focus:ring-offset-surface-dim" id="terms" type="checkbox"/>
</div>
<label class="text-label-bold font-label-bold text-on-surface-variant" for="terms">
                            I agree to the <a class="text-primary hover:underline" href="#">Terms of Service</a> and <a class="text-primary hover:underline" href="#">Privacy Policy</a>.
                        </label>
</div>
<!-- Submit Button -->
<button class="w-full py-4 bg-primary-container text-on-primary-container font-label-bold text-label-bold uppercase tracking-widest rounded-lg hover:bg-secondary-container hover:text-on-secondary-container transition-all duration-300 shadow-lg shadow-primary-container/20 active:scale-[0.98]" type="submit">
                        Đăng ký
                    </button>
</form>
<!-- Footer Link -->
<div class="text-center pt-4">
<p class="text-on-surface-variant font-body-md">
                        Already have an account? 
                        <a class="text-primary font-bold hover:underline underline-offset-4 ml-1" href="/login">Đăng nhập ngay</a>
</p>
</div>
</div>
</div>
</div>
<!-- Minimal Footer (Task Focused Suppression) -->
<footer class="bg-surface-container-lowest py-8 border-t border-outline-variant/10">
<div class="max-w-container-max mx-auto px-gutter flex flex-col md:flex-row justify-between items-center gap-4">
<span class="font-label-bold text-label-bold text-on-surface-variant uppercase opacity-50">© 2024 SOLE_CULTURE. PEAK PERFORMANCE.</span>
<div class="flex gap-6">
<a class="text-label-bold font-label-bold text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="text-label-bold font-label-bold text-on-surface-variant hover:text-primary transition-colors" href="#">Terms</a>
<a class="text-label-bold font-label-bold text-on-surface-variant hover:text-primary transition-colors" href="#">Support</a>
</div>
</div>
</footer>
</body>

@endsection