@extends('layout.master')

@section('title', 'Cart')

@section('content')

<h1 class="text-white text-5xl text-center mt-10">
    Cart Page
</h1>
<main class="max-w-container-max mx-auto px-gutter py-12">
<!-- Page Title -->
<div class="mb-12">
<h1 class="font-display-xl text-headline-lg md:text-display-xl mb-2">YOUR CART</h1>
<p class="text-on-surface-variant font-label-bold uppercase tracking-widest">3 Items in bag</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- Cart Items List -->
<div class="lg:col-span-8 space-y-6">
<!-- Product Card 1 -->
<div class="glass-card p-6 flex flex-col md:flex-row gap-8 items-center rounded-xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.4)]">
<div class="w-full md:w-48 aspect-square bg-surface-container-high rounded-lg overflow-hidden flex items-center justify-center p-4">
<img alt="Nike Air Max" class="w-full h-full object-contain transform -rotate-12" data-alt="High-resolution professional product photography of a vibrant red Nike Air Max sneaker. The shoe is positioned dynamically against a clean, dark slate background, highlighted by cool-toned studio lighting that emphasizes its technical mesh and glossy synthetic textures. Minimalist and premium aesthetic with sharp focus and deep shadows." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAon6iBKBTBkwyBPf3vRNFYLMLMDaujzE2xJpU0K61pUs3mmy69Ve1pM8gYAQwfA4WeY_-oI_7e9EiPOsjdBX4zPSmSWRJX6eFz5w5ihjCd2aNA5Zrlea357oozKhh1EVQNEvzr42qGI7pbRI5ur9byz1UsyYMIDwdCfJeWae8WEIpiDAX-zp3TD6Ps1xz3nec3fpCg5Pb6bmykbpEIHe2hWx6ZqwJTchwgY6z5giOILgjfYmAZa2y7Adf2sfnOs93kdKWZ8GexPpA"/>
</div>
<div class="flex-1 space-y-2">
<div class="flex justify-between items-start">
<div>
<h3 class="font-headline-md text-headline-md">AIR MAX 270 'HYPER RED'</h3>
<p class="text-on-surface-variant text-body-md">Men's Performance Running</p>
</div>
<button class="text-on-surface-variant hover:text-error transition-colors">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
<div class="flex flex-wrap gap-4 mt-4">
<div class="bg-surface-container px-3 py-1 rounded border border-outline-variant/30 text-label-bold">SIZE: 10.5 US</div>
<div class="bg-surface-container px-3 py-1 rounded border border-outline-variant/30 text-label-bold">COLOR: RED/BLACK</div>
</div>
<div class="flex justify-between items-end mt-6">
<div class="flex items-center border border-outline-variant rounded-full overflow-hidden">
<button class="px-3 py-1 hover:bg-surface-variant transition-colors"><span class="material-symbols-outlined text-[16px]">remove</span></button>
<span class="px-4 font-bold text-primary">1</span>
<button class="px-3 py-1 hover:bg-surface-variant transition-colors"><span class="material-symbols-outlined text-[16px]">add</span></button>
</div>
<div class="text-headline-md text-primary">$150.00</div>
</div>
</div>
</div>
<!-- Product Card 2 -->
<div class="glass-card p-6 flex flex-col md:flex-row gap-8 items-center rounded-xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.4)]">
<div class="w-full md:w-48 aspect-square bg-surface-container-high rounded-lg overflow-hidden flex items-center justify-center p-4">
<img alt="Jordan 1 Retro" class="w-full h-full object-contain transform rotate-6" data-alt="Cinematic shot of a classic Air Jordan 1 Retro sneaker in white and university blue. The sneaker is isolated on a dark, textured charcoal surface with a subtle teal ambient glow from the side. The lighting is dramatic and focused, highlighting the premium leather grain and iconic silhouette in a high-contrast sports fashion style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVfA_p7IHn6tno8Q1sBD2Up6NoUmnIuiRJjfD0R1CJy7PXGPUdijZbS7JSV-36iDe_uEB6-2jF1SbVdu4f3uCn8SK6zqsf_4cVSmkCgaazoGWz1LriUP0vc90hrQdc2A-nRXYhDKeQ3QoE2iVcNkf7RN_d0zdhad-jvZjfFhdSSXCbcO-ClrBymi5k6XsTjK-bhk7fAoexhrVjKpDKGIVZYNRtKa_i8wE2xYqyj7fg1hx_WU4IQQ2b2v57zsF36ETPquNJGI1OAg4"/>
</div>
<div class="flex-1 space-y-2">
<div class="flex justify-between items-start">
<div>
<h3 class="font-headline-md text-headline-md">JORDAN 1 RETRO 'UNC'</h3>
<p class="text-on-surface-variant text-body-md">Iconic Lifestyle High-Top</p>
</div>
<button class="text-on-surface-variant hover:text-error transition-colors">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
<div class="flex flex-wrap gap-4 mt-4">
<div class="bg-surface-container px-3 py-1 rounded border border-outline-variant/30 text-label-bold">SIZE: 11 US</div>
<div class="bg-surface-container px-3 py-1 rounded border border-outline-variant/30 text-label-bold">COLOR: BLUE/WHITE</div>
</div>
<div class="flex justify-between items-end mt-6">
<div class="flex items-center border border-outline-variant rounded-full overflow-hidden">
<button class="px-3 py-1 hover:bg-surface-variant transition-colors"><span class="material-symbols-outlined text-[16px]">remove</span></button>
<span class="px-4 font-bold text-primary">1</span>
<button class="px-3 py-1 hover:bg-surface-variant transition-colors"><span class="material-symbols-outlined text-[16px]">add</span></button>
</div>
<div class="text-headline-md text-primary">$190.00</div>
</div>
</div>
</div>
<!-- Product Card 3 -->
<div class="glass-card p-6 flex flex-col md:flex-row gap-8 items-center rounded-xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.4)]">
<div class="w-full md:w-48 aspect-square bg-surface-container-high rounded-lg overflow-hidden flex items-center justify-center p-4">
<img alt="Yeezy Boost" class="w-full h-full object-contain" data-alt="Sophisticated studio photograph of an Adidas Yeezy Boost sneaker in a neutral earth tone. The knit texture is exquisitely detailed under warm, diffused lighting. Set against a minimalist dark environment with subtle shadows that create a three-dimensional effect. The mood is high-end, contemporary, and focused on material innovation and aesthetic exclusivity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoH-bJfNMb40Rr5W7SmN6qHiBfIA4oLizlqqPO3_YDzye-3-6H9883W6Xh_oKTHR_cbAGUqmWHTEF6QBXzWG4lzucbfLuvIgQswzYhsXCGTAgdIyhf0DBtLSJ70mAB2paK2rwSNaoP47xuzdzxXd-Ov1N8s0TsuWyaJZKKbrltZ5clvsT4AHtk-s3C84YLlZeVzcU8p8Eijd0phUjAsunAHdzx7Q99xsQ6mKJHu0K7Lm6XA7_wHkYMhiz_i0x2ceYXLfnVKGBLuhQ"/>
</div>
<div class="flex-1 space-y-2">
<div class="flex justify-between items-start">
<div>
<h3 class="font-headline-md text-headline-md">ADIDAS YEEZY 350 V2</h3>
<p class="text-on-surface-variant text-body-md">Primeknit Lifestyle Sneaker</p>
</div>
<button class="text-on-surface-variant hover:text-error transition-colors">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
<div class="flex flex-wrap gap-4 mt-4">
<div class="bg-surface-container px-3 py-1 rounded border border-outline-variant/30 text-label-bold">SIZE: 10 US</div>
<div class="bg-surface-container px-3 py-1 rounded border border-outline-variant/30 text-label-bold">COLOR: BONE</div>
</div>
<div class="flex justify-between items-end mt-6">
<div class="flex items-center border border-outline-variant rounded-full overflow-hidden">
<button class="px-3 py-1 hover:bg-surface-variant transition-colors"><span class="material-symbols-outlined text-[16px]">remove</span></button>
<span class="px-4 font-bold text-primary">1</span>
<button class="px-3 py-1 hover:bg-surface-variant transition-colors"><span class="material-symbols-outlined text-[16px]">add</span></button>
</div>
<div class="text-headline-md text-primary">$220.00</div>
</div>
</div>
</div>
</div>
<!-- Order Summary Section -->
<div class="lg:col-span-4">
<div class="sticky top-32 glass-card p-8 rounded-xl space-y-8">
<h2 class="font-headline-lg text-headline-lg border-b border-outline-variant pb-4">SUMMARY</h2>
<div class="space-y-4">
<div class="flex justify-between text-on-surface-variant">
<span>Subtotal</span>
<span>$560.00</span>
</div>
<div class="flex justify-between text-on-surface-variant">
<span>Estimated Shipping &amp; Handling</span>
<span>$15.00</span>
</div>
<div class="flex justify-between text-on-surface-variant">
<span>Estimated Tax</span>
<span>$44.80</span>
</div>
</div>
<div class="border-t border-outline-variant pt-6 space-y-2">
<div class="flex justify-between items-baseline">
<span class="font-headline-md text-headline-md">TOTAL</span>
<span class="font-display-xl text-headline-lg text-primary">$619.80</span>
</div>
<p class="text-on-surface-variant text-[12px] italic">Prices include all applicable import duties and VAT.</p>
</div>
<div class="space-y-4">
<button class="w-full bg-primary-container text-on-primary-container py-5 rounded-full font-label-bold text-body-lg uppercase tracking-widest hover:bg-secondary-container hover:text-on-secondary-container transition-all duration-300 transform active:scale-95 shadow-lg shadow-primary-container/20">
                            PROCEED TO CHECKOUT
                        </button>
<div class="flex flex-col gap-3">
<p class="text-center text-label-bold text-on-surface-variant uppercase tracking-widest text-[10px]">Accepted Payments</p>
<div class="flex justify-center gap-4 opacity-50">
<span class="material-symbols-outlined">credit_card</span>
<span class="material-symbols-outlined">account_balance_wallet</span>
<span class="material-symbols-outlined">payments</span>
</div>
</div>
</div>
<div class="bg-surface-container-highest p-4 rounded-lg flex items-start gap-3">
<span class="material-symbols-outlined text-secondary">verified_user</span>
<div class="text-[12px] text-on-surface-variant">
<strong class="text-on-surface">Secure Checkout</strong>
<p>All transactions are encrypted and 100% secure. 30-day easy returns guaranteed.</p>
</div>
</div>
</div>
</div>
</div>
<!-- Recommended Section -->
<div class="mt-24 border-t border-outline-variant/30 pt-12">
<h2 class="font-headline-lg text-headline-lg mb-8 uppercase tracking-tighter">COMPLETE THE LOOK</h2>
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
<div class="group cursor-pointer">
<div class="aspect-square bg-surface-container p-4 rounded-xl mb-4 overflow-hidden">
<img alt="Nike Crew Socks" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Close-up creative shot of high-quality athletic crew socks with bold branding. The lighting is high-energy and crisp, emphasizing the knit texture and vibrant accent colors. The background is a clean, dark urban concrete setting that aligns with a high-performance sportswear aesthetic. Sharp focus and cinematic depth of field." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQWbJxBUpzjUVZ5qzjOU6spkYoL7mfTPthGsz0SqCgrlVykWBi-6vPLhyxWJLX5CUhqbMT8UKc-b8H9ltlntUKbWhd_C5fMeJ8MQKmrQCcAJicMK_nc0yj5wIIHHucwhmmIV7jps06PF0fDJ_mNIJkI-Ye333wtQHGop3bV9GRaXxR1vIPCQJe8sjKKE18xlWDScNj8lcbieU268Ao6Q0wg1vqm6QSEX1ZxRcu1tvHoLx9ZEdNqiCrXTE4fighXfC45Mn57sDtXEo"/>
</div>
<p class="font-label-bold text-on-surface">DRY-FIT CREW SOCKS</p>
<p class="text-secondary">$18.00</p>
</div>
<div class="group cursor-pointer">
<div class="aspect-square bg-surface-container p-4 rounded-xl mb-4 overflow-hidden">
<img alt="Sport Shorts" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Fashion product shot of technical performance running shorts displayed on a dark, minimalist platform. The lighting is dramatic, highlighting the moisture-wicking fabric and ergonomic design details. The color palette features deep blacks and electric blue accents, consistent with a high-tech athletic gear brand identity. Modern and sleek." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDv1CEMgALvAb1d1QFNljgty6xWULbEtAR5YPWowcH0lth8Twsv9HTp_NkqzWbhzVMyVy62oXTrzr17JxavhcmsG5RlFWapC5IhMrI6qq8ZArItGehXdPTU84IfEdI3T3JAy8odNPRNP-R0yvg6Q703dSf8Q-pw9lQiDCr43eF1J7vWjs4eFHJEmUWOUkW6dAo_B72EMdlgoVSQ3NJ5WRwil071iT4oF-u4n76sTbQ-ZulKGiXo8vPOLUBFKoCls_Kz1qJUHESVJnU"/>
</div>
<p class="font-label-bold text-on-surface">TECH-FLEECE SHORTS</p>
<p class="text-secondary">$45.00</p>
</div>
<div class="group cursor-pointer">
<div class="aspect-square bg-surface-container p-4 rounded-xl mb-4 overflow-hidden">
<img alt="Water Bottle" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Sleek, matte black stainless steel sports water bottle featuring minimalist white typography. The bottle is captured in a high-contrast studio setting with soft side-lighting that creates a beautiful highlight along its curved silhouette. The mood is premium, active, and technically advanced, set against a dark, low-key background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjQN2FkilFgenf8AFw-E34NC_nW9jCfv7uSCh2u_1MvPmdhvYZ2X_imO4nku09v39BRvzv2eCiEfmRBnoak2RjKlUVIY3QL6PZ8OZH2Ibgx35w3SvbOOHKGBqMp28fqvKLyZccxlFAlkSg4y1Eyecf0gjJkLAjq5naxpGl7qoPlKGgfhhDrlQwh6IEhf959kHQ7M3wHzv245sOYfxvttjxYrw2aVcFoBraLoSrwWOR6j8_F1MD5yWbLK8U0APVAKX-zpfq413tiAk"/>
</div>
<p class="font-label-bold text-on-surface">HYDRA-CORE FLASK</p>
<p class="text-secondary">$32.00</p>
</div>
<div class="group cursor-pointer">
<div class="aspect-square bg-surface-container p-4 rounded-xl mb-4 overflow-hidden">
<img alt="Gym Bag" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Professional studio shot of a technical sports duffel bag made from high-denier water-resistant fabric. The bag is shown in a three-quarter view with meticulous detail on the heavy-duty zippers and reinforced handles. Lighting is cool and directional, creating deep shadows and bright highlights that emphasize its rugged yet high-end athletic design." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCT71NQ9Pq-RbcVrBk56hmA9oi9F0vH73iCvx-n4GRSTJJVgZZCGB4EZyYZJ7CveuV9V2-nIXMQTR9ApIFQiUSdo6TQeZSTbQ3oV3pWaNXfhWs5seFs7I4zOIbB4BG9I-mKGKu0HLH4B022FpyYgpIy0BozgSX6-LFLKdxlbQ-y5w8XzYBROkbAJ1nznmbolPDL8TiRqRYdb1eINrh8QOTIUDMwONc0VCG1OxHbXt28CC0cVJSSchqsrUitkQCuWkbKZQ4wDRa2oXw"/>
</div>
<p class="font-label-bold text-on-surface">ELITE TRAINING DUFFEL</p>
<p class="text-secondary">$85.00</p>
</div>
</div>
</div>
</main>

@endsection