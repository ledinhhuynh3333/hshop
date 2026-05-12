@extends('layout.master')

@section('title', 'Product Page')

@section('content')

<h1 class="text-white text-5xl text-center mt-10">
    Product Page
</h1>

<main class="max-w-container-max mx-auto px-gutter py-section-padding">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- Image Gallery Section -->
<div class="lg:col-span-7 space-y-gutter">
<div class="relative aspect-square overflow-hidden bg-surface-container rounded-xl group">
<img alt="Product Main View" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A high-performance luxury sneaker presented on a clean dark grey background with dramatic studio lighting highlighting the intricate technical fabrics and vibrant blue accents. The aesthetic is sleek and modern, emphasizing the premium quality of the footwear in a high-contrast dark mode environment. Soft shadows ground the shoe, giving it a tangible physical presence." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7iNxLD3_76-oFA1PQcsDplKZP1hWTtOSmSB9DUK6soVyxQ0_wyOQm2twBFw9zsEF-9x8AGd_Gxg1jGmio2EYiwkAiLBYtkLcEuTO5JSa_xjlYGFH084e37kquMhhm_0tcsF2RbnrVsOuxgbvfASP-LmVBsjWWm6kEc92lYfTdfMOYjlx5NvQ_dMnFpKc_Ch6LPJqWJcTZAf9WYIKAkYknUTh2uRn3DW5arBaXEYnqgC4TpHlHKWEEqCahVAYnIN86lJtEVmEVMio"/>
<div class="absolute top-4 left-4 bg-secondary-container text-on-secondary-container px-3 py-1 font-label-bold text-label-bold rounded-full">LIMITED DROP</div>
</div>
<div class="grid grid-cols-4 gap-4">
<div class="aspect-square bg-surface-container rounded-lg overflow-hidden cursor-pointer border-2 border-primary">
<img alt="Detail 1" class="w-full h-full object-cover" data-alt="A close-up macro shot of the textured sole and side profile of a high-end sneaker, showing precision stitching and technical cushioning materials. The lighting is focused and sharp, emphasizing the high-contrast textures against a deep charcoal background, maintaining a consistent premium sport aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3GNpkWREcXNPU_bvg32PPIdOdNLmDf-5tPMSXlMnVam7D5xBMHPHMRScGnGzyG41HeymwiHsb6VudPgVWvMMkNl8vPpZ4l-NV-U-GtK0fWwgdQYCc8twkRDcORJS4WzvNkv44oPJatWrDk-uMhDDFtiAq-9c-f2v6zUpGDWze1hKfP1A27oCGKZvYrslGgbx66GNqkk2juK9CGr8mv0J1kQX9_XBoV0zUprw8D9h1fh-Sazl2nRaAHWAhjiSPkT0L8Wr3MYM3ue0"/>
</div>
<div class="aspect-square bg-surface-container rounded-lg overflow-hidden cursor-pointer border-2 border-transparent hover:border-outline">
<img alt="Detail 2" class="w-full h-full object-cover" data-alt="Rear view of a luxury sneaker featuring a bold logo and unique heel counter design, captured in a dark studio setting with electric blue neon highlights. The composition is clean and minimalist, following the high-energy performance brand identity of SOLE_CULTURE." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7lDDeyF1UeTBIjyBc4vNv0cCg49_L1MHua41Qin7Q5o71yOrhcw2Q2DrxU-jif1SNnTmd9AjJ7rvWmbqqUKEGUnPywrjR0HBLpbJvNnEHxP9R8I60SKUkP56Ndhv3r9kUurapECEWVdQcOBlcIYewb6KYjHio7yFddMB5t0ltXFNf_IpZmnHInNZo0zFja6CWKTBEq6Lb28gcWt4M1uRQNQN_6-bb6bcykngOa8OMMrq7kT0NIIvKygfM7TSdoUD0oOteM1gX980"/>
</div>
<div class="aspect-square bg-surface-container rounded-lg overflow-hidden cursor-pointer border-2 border-transparent hover:border-outline">
<img alt="Detail 3" class="w-full h-full object-cover" data-alt="Interior view and tongue detail of a premium athletic shoe, showcasing the breathable mesh lining and brand label. The lighting creates a soft glow on the materials, emphasizing comfort and high-tech engineering within a dark, sophisticated atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUtTttQvY1kJWwA8TAuxICNjOWuPcgsrQvJawZB6kSIZKvYfXzKO7w2HUS686CKWwGunNy3fTG8h9gl0_ZtOm-eMYnvoHOZthd8l-_JoJ0VtIxZkA6BISb_ZAjhQ9iSPXWlaZEMfj6dsla3kjXWdWyLQ7T1vzFmIUtWHOnGOku7dThEzMlLUIbpG6E8kgwkZdYlxm8Ff88fg5pG7NRzQYgPzzPQ3hDITlz65SKXfM8z_eVi-s0UWTEf2ANosR6vdkLW3-WxY-t3QQ"/>
</div>
<div class="aspect-square bg-surface-container rounded-lg overflow-hidden cursor-pointer border-2 border-transparent hover:border-outline">
<img alt="Detail 4" class="w-full h-full object-cover" data-alt="Top-down perspective of a pair of high-performance sneakers, emphasizing the aerodynamic shape and lacing system. The footwear sits on a subtle grey surface with large-radius ambient shadows that create a floating effect, typical of premium product photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZIQf2_6F1pMkDB75CwXhC05G4yRO87LK2j5rICN7Gt57eq1K2evfw0bDzbbNWLPYIis4nqqMxgeJ7ijzoArP8QLaWT_MQJyfUiisHxkPRJXv0E26c3PV8aV9qCSAO0zremc71VSCisLmzki5Jxc8hyybTidQvVFHeqq2TD4lQ1IbT6WsIeNkosDu20yQ7qLXs6_rFNXbRMq5fP7Y69Gyq9x_XjQgfDFKKZ_Xl1A1-ajYpencIQ3JGF9itFFaCuiRhR1h3bIcBTeo"/>
</div>
</div>
</div>
<!-- Product Info Section -->
<div class="lg:col-span-5 flex flex-col gap-8">
<header class="space-y-2">
<p class="font-label-bold text-label-bold text-primary uppercase tracking-widest">Performance Series</p>
<h1 class="font-display-xl text-headline-lg font-black text-on-surface">QUANTUM NITRO 3.0</h1>
<div class="flex items-center gap-4">
<div class="flex text-secondary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">star_half</span>
</div>
<span class="font-label-bold text-label-bold text-on-surface-variant">4.8 (124 reviews)</span>
</div>
<div class="text-headline-md font-bold text-primary-fixed mt-4">$285.00</div>
</header>
<div class="space-y-6">
<div class="flex justify-between items-center">
<span class="font-label-bold text-label-bold">Select Size (EU)</span>
<button class="text-primary font-label-bold text-label-bold underline underline-offset-4 hover:text-secondary transition-colors">Size Guide</button>
</div>
<div class="grid grid-cols-4 gap-3">
<button class="py-3 rounded-lg border border-outline-variant hover:border-primary font-label-bold transition-all">40</button>
<button class="py-3 rounded-lg border border-outline-variant hover:border-primary font-label-bold transition-all">41</button>
<button class="py-3 rounded-lg border-2 border-primary bg-primary text-on-primary font-label-bold">42</button>
<button class="py-3 rounded-lg border border-outline-variant hover:border-primary font-label-bold transition-all">43</button>
<button class="py-3 rounded-lg border border-outline-variant hover:border-primary font-label-bold transition-all">44</button>
<button class="py-3 rounded-lg border border-outline-variant opacity-30 cursor-not-allowed line-through font-label-bold">45</button>
<button class="py-3 rounded-lg border border-outline-variant hover:border-primary font-label-bold transition-all">46</button>
</div>
</div>
<div class="flex flex-col gap-4">
<button class="w-full bg-primary-container text-on-primary-container py-5 rounded-xl font-headline-md font-extrabold uppercase tracking-tight hover:bg-secondary-container hover:text-on-secondary-container transition-all duration-300 shadow-xl active:scale-[0.98]">
                        ADD TO BAG
                    </button>
<button class="w-full border-2 border-outline-variant py-5 rounded-xl font-headline-md font-extrabold uppercase tracking-tight hover:bg-surface-container-high transition-all duration-300 active:scale-[0.98]">
                        WISHLIST
                    </button>
</div>
<div class="border-t border-outline-variant/30 pt-8">
<div class="space-y-4">
<h3 class="font-label-bold text-label-bold text-on-surface uppercase tracking-wider">Product Description</h3>
<p class="font-body-md text-on-surface-variant leading-relaxed">
                            Engineered for those who demand peak performance. The Quantum Nitro 3.0 features our patented responsive foam technology, providing 20% more energy return than previous models. The upper is constructed from recycled ocean-bound plastics, reinforced with TPU overlays for targeted support where you need it most. 
                        </p>
<ul class="space-y-2 pt-2">
<li class="flex items-center gap-3 text-body-md text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                Carbon-fiber plate for propulsion
                            </li>
<li class="flex items-center gap-3 text-body-md text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                GORE-TEX breathable waterproofing
                            </li>
<li class="flex items-center gap-3 text-body-md text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                Reflective details for low-light visibility
                            </li>
</ul>
</div>
</div>
</div>
</div>
<!-- Similar Products Section -->
<section class="mt-section-padding">
<div class="flex justify-between items-end mb-12">
<div class="space-y-2">
<span class="font-label-bold text-label-bold text-primary uppercase tracking-widest">Recommended</span>
<h2 class="font-display-xl text-headline-lg font-black text-on-surface">SIMILAR DROPS</h2>
</div>
<a class="font-label-bold text-label-bold text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2" href="#">
                    VIEW ALL <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
<!-- Card 1 -->
<div class="group cursor-pointer">
<div class="aspect-[4/5] bg-surface-container-high rounded-xl overflow-hidden mb-4 relative shadow-lg">
<img alt="Similar 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A side view of a stylish athletic sneaker in muted earthy tones, positioned on a dark minimalist pedestal. The lighting is soft and ambient, creating a sophisticated gallery-like atmosphere. The background is a solid deep charcoal, making the high-contrast product stand out as a premium lifestyle choice." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcclAnTVfJTS_BG-aTxBemM9mf9u3WBrnVUEfgb0BLu6fUc5Vzc6L-UMYePdlAclFu6sWNDadxSMnkZiP4886UzZ0NL8C73FflmPGveecU5_PblrRaNCjaQqWlNPY7D0HQI_aCxASQp6pj9Gklk9HLvARMXRsUwh_ZlolO3RCdd-hkjaNM4YCMzTWu1cmfKHwlRDkW9VBTlRj2Xzc9ewPShN4mIionPgIVGDQYO29xYD0gyFePMFIM4enK918jBhCrbqd_qWgubgY"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
<button class="w-full bg-white text-black py-2 rounded-lg font-label-bold text-sm">QUICK ADD</button>
</div>
</div>
<p class="font-label-bold text-label-bold text-on-surface-variant uppercase text-xs">Vortex Tech</p>
<h3 class="font-headline-md text-body-lg font-bold text-on-surface">VORTEX CORE DARK</h3>
<p class="text-primary font-bold mt-1">$210.00</p>
</div>
<!-- Card 2 -->
<div class="group cursor-pointer">
<div class="aspect-[4/5] bg-surface-container-high rounded-xl overflow-hidden mb-4 relative shadow-lg">
<img alt="Similar 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A pair of vibrant orange running shoes featuring reflective silver accents, captured in motion with a subtle motion blur effect. The background is a clean, dark industrial floor with cool blue lighting from above. The image conveys energy, speed, and high-performance engineering within a premium sport context." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZHA_YnFMzGeI_VZLhF53Y2K1d44P9KQwDnI-Z8qbQGg_6lwd7ykvF9EWmf9Bp9wKz4nOBifmTiQD4U9U7yKBe5fscyMyNUrP5EsA-vDtIwcyEeCm1Jh0bZwBOxL4SrOTnw3JdYBUVnoCL-t0iYTXMYloWf2lDuMEqz2M2ClLN3PZWdnywqEIe-ZHp0xZBCfdMdgobf0PUNdg3uSjhIOFzgmkliVTHMMbK7713ts4yJNoYZp4IKZmXxhiVWlD6jl8IqfkYUdCM1QA"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
<button class="w-full bg-white text-black py-2 rounded-lg font-label-bold text-sm">QUICK ADD</button>
</div>
</div>
<p class="font-label-bold text-label-bold text-on-surface-variant uppercase text-xs">Aero Series</p>
<h3 class="font-headline-md text-body-lg font-bold text-on-surface">AERO STRIDE ORANGE</h3>
<p class="text-primary font-bold mt-1">$195.00</p>
</div>
<!-- Card 3 -->
<div class="group cursor-pointer">
<div class="aspect-[4/5] bg-surface-container-high rounded-xl overflow-hidden mb-4 relative shadow-lg">
<img alt="Similar 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A sleek black-on-black lifestyle sneaker with complex layered materials including matte leather and glossy TPU. The product is shot from a low angle on a reflective black surface, creating a high-fashion, high-contrast look that emphasizes exclusivity and technical sharpness." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1Ldn1hkKyJFbpuJQGD4z6iAoz1OwF0ZYl8aM4KwElZCmsW1lNnrKZX9Utj0pjhenyEAh9XvMnDiscN36r0NA6PFfN4VkvkvZzztAhR7zEbwpsKLSXxAnDGZP_if10O-hnv4DVLRlPBZ1Sx8mJrzv8mTGwOXg-7LeePJzKnbYF-NpLbAHCxUCAfAcnZZBiZycg91xVJyOy8P-hDE4GRiZUeAb3ySVitlgmiNWA4Gmq8aQue05Vr7HvdyHQbzFaSRItTUrv3fTmBhk"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
<button class="w-full bg-white text-black py-2 rounded-lg font-label-bold text-sm">QUICK ADD</button>
</div>
<div class="absolute top-4 right-4 bg-error text-on-error px-2 py-1 text-[10px] font-bold rounded-sm">SOLD OUT</div>
</div>
<p class="font-label-bold text-label-bold text-on-surface-variant uppercase text-xs">Stealth Line</p>
<h3 class="font-headline-md text-body-lg font-bold text-on-surface">STEALTH NOMAD 01</h3>
<p class="text-error font-bold mt-1">$320.00</p>
</div>
<!-- Card 4 -->
<div class="group cursor-pointer">
<div class="aspect-[4/5] bg-surface-container-high rounded-xl overflow-hidden mb-4 relative shadow-lg">
<img alt="Similar 4" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Modern high-top sneakers in a crisp white and ice-blue colorway, presented in a futuristic floating arrangement. The lighting is high-key with soft blue tints, creating a clean and technologically advanced aesthetic. The minimal dark background allows the bright product details to pop with premium clarity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuChcEyROPJp1y24AoZvybuamunhVIeIsybhzCLxMrYwmx5Drj6BjClk5D37s7FtvnbX2vnFYHvMkLlvM9pgnsCZvoYwSrqqyST-G4gm0EooIXmUIk80x3q4ZvNSzWASrfNdN68iIVP15kAzlg2YcUkJInGGhbEPCbkIe8qIMIPlplcL3EJwdLWi9uWeXMMsD0cRPvs7tI6A2NdbvwM-_nGurE9rv6GnfM-s7bbSCcbBRg--jXjcGWGCqzN6_1LGsqYFpp8bZKjKbmk"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
<button class="w-full bg-white text-black py-2 rounded-lg font-label-bold text-sm">QUICK ADD</button>
</div>
</div>
<p class="font-label-bold text-label-bold text-on-surface-variant uppercase text-xs">Peak Element</p>
<h3 class="font-headline-md text-body-lg font-bold text-on-surface">ELEMENT ZERO ICE</h3>
<p class="text-primary font-bold mt-1">$245.00</p>
</div>
</div>
</section>
</main>
@endsection