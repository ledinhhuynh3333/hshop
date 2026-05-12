@extends('layout.master')

@section('title', 'Search')

@section('content')

<h1 class="text-white text-5xl text-center mt-10">
    Search Page
</h1>
<main class="max-w-container-max mx-auto px-gutter py-12">
<header class="mb-12">
<h1 class="font-display-xl text-display-xl uppercase text-on-surface mb-4">Men's performance</h1>
<p class="text-on-surface-variant max-w-2xl font-body-lg">Engineered for the elite. Explore our latest drops in high-performance footwear, blending technical superiority with street-ready aesthetics.</p>
</header>
<div class="flex flex-col md:flex-row gap-gutter">
<!-- Filter Sidebar -->
<aside class="w-full md:w-64 flex-shrink-0 space-y-10">
<!-- Size Filter -->
<section>
<h3 class="font-label-bold text-label-bold uppercase tracking-widest text-on-surface mb-4">Size (US)</h3>
<div class="grid grid-cols-4 gap-2">
<button class="h-10 border border-outline-variant hover:border-primary text-body-md flex items-center justify-center transition-colors">7</button>
<button class="h-10 border border-primary bg-primary text-on-primary text-body-md flex items-center justify-center font-bold">8</button>
<button class="h-10 border border-outline-variant hover:border-primary text-body-md flex items-center justify-center transition-colors">9</button>
<button class="h-10 border border-outline-variant hover:border-primary text-body-md flex items-center justify-center transition-colors">10</button>
<button class="h-10 border border-outline-variant hover:border-primary text-body-md flex items-center justify-center transition-colors">11</button>
<button class="h-10 border border-outline-variant hover:border-primary text-body-md flex items-center justify-center transition-colors">12</button>
<button class="h-10 border border-outline-variant hover:border-primary text-body-md flex items-center justify-center transition-colors">13</button>
</div>
</section>
<!-- Color Filter -->
<section>
<h3 class="font-label-bold text-label-bold uppercase tracking-widest text-on-surface mb-4">Colorway</h3>
<div class="flex flex-wrap gap-3">
<button class="w-8 h-8 rounded-full bg-black border border-outline-variant/50 ring-2 ring-offset-2 ring-transparent hover:ring-primary transition-all ring-offset-background"></button>
<button class="w-8 h-8 rounded-full bg-white border border-outline-variant/50 ring-2 ring-offset-2 ring-transparent hover:ring-primary transition-all ring-offset-background"></button>
<button class="w-8 h-8 rounded-full bg-primary-container border border-outline-variant/50 ring-2 ring-offset-2 ring-primary transition-all ring-offset-background"></button>
<button class="w-8 h-8 rounded-full bg-secondary-container border border-outline-variant/50 ring-2 ring-offset-2 ring-transparent hover:ring-primary transition-all ring-offset-background"></button>
<button class="w-8 h-8 rounded-full bg-surface-bright border border-outline-variant/50 ring-2 ring-offset-2 ring-transparent hover:ring-primary transition-all ring-offset-background"></button>
</div>
</section>
<!-- Brand Filter -->
<section>
<h3 class="font-label-bold text-label-bold uppercase tracking-widest text-on-surface mb-4">Brand</h3>
<div class="space-y-3">
<label class="flex items-center gap-3 cursor-pointer group">
<input checked="" class="w-5 h-5 rounded border-outline-variant bg-surface-container text-primary focus:ring-primary" type="checkbox"/>
<span class="text-body-md text-on-surface-variant group-hover:text-on-surface">Hyperion Tech</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="w-5 h-5 rounded border-outline-variant bg-surface-container text-primary focus:ring-primary" type="checkbox"/>
<span class="text-body-md text-on-surface-variant group-hover:text-on-surface">Aero-Flow</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="w-5 h-5 rounded border-outline-variant bg-surface-container text-primary focus:ring-primary" type="checkbox"/>
<span class="text-body-md text-on-surface-variant group-hover:text-on-surface">Core Performance</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="w-5 h-5 rounded border-outline-variant bg-surface-container text-primary focus:ring-primary" type="checkbox"/>
<span class="text-body-md text-on-surface-variant group-hover:text-on-surface">Vortex Runners</span>
</label>
</div>
</section>
<!-- Price Filter -->
<section>
<h3 class="font-label-bold text-label-bold uppercase tracking-widest text-on-surface mb-4">Price Range</h3>
<div class="px-2">
<input class="w-full h-1 bg-surface-container-highest rounded-lg appearance-none cursor-pointer accent-primary" max="500" min="0" type="range" value="300"/>
<div class="flex justify-between mt-3 text-label-bold text-on-surface-variant">
<span>$0</span>
<span>$300+</span>
</div>
</div>
</section>
<button class="w-full py-4 bg-surface-container-high text-on-surface font-label-bold uppercase tracking-widest hover:bg-surface-variant transition-colors border border-outline-variant/30">
                    Reset Filters
                </button>
</aside>
<!-- Product Grid -->
<div class="flex-1">
<div class="flex justify-between items-center mb-8">
<span class="text-body-md text-on-surface-variant">Showing <span class="text-on-surface font-bold">24</span> results</span>
<div class="flex items-center gap-2">
<span class="text-label-bold uppercase text-on-surface-variant">Sort by:</span>
<select class="bg-transparent border-none text-on-surface font-label-bold focus:ring-0 cursor-pointer">
<option>Latest Arrivals</option>
<option>Price: Low to High</option>
<option>Price: High to Low</option>
<option>Most Popular</option>
</select>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-gutter">
<!-- Product Card 1 -->
<div class="product-card-hover group relative bg-surface-container border border-outline-variant/10 overflow-hidden">
<div class="relative aspect-square overflow-hidden bg-[#1E1E1E]">
<img class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" data-alt="A high-performance technical sneaker displayed on a minimalist dark charcoal surface. The shoe features vibrant neon lime accents and a futuristic layered carbon fiber texture. Dramatic high-contrast lighting highlights the sleek silhouette and aggressive tread pattern. The background is a clean, dark aesthetic consistent with a premium athletic brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgP0z-eYZPX05IAjuYstovdMkvKTQCtrj7IX09PX1rXbFddPFnduuU3Da4xuj_WPGq9ggxZE-xkiFXOZ61bOfnCQHSz7C7es_g9mvYhyDvUBcRb-iARStDKn0LQW5oCqT4pWrxoJolIwnBLX5zVftE8tIGSDP1n21tdztaP6Ntv1dsF6i4JNBye32NpImq7G5qE4PZvSz7CEdF-ZoW3sezCGMgeTl7aef6aIrdxsO1OSYmSxBTLxRadNaVpXrc0_exsspmP8ed4DA"/>
<div class="absolute top-4 left-4 bg-secondary-container text-on-secondary-container text-[12px] font-black px-3 py-1 uppercase tracking-tighter shadow-lg">
                                Limited Drop
                            </div>
<!-- Quick Add Overlay -->
<div class="add-to-cart-overlay absolute inset-0 bg-primary/20 backdrop-blur-sm opacity-0 flex items-center justify-center transition-all duration-300 translate-y-4">
<button class="bg-primary text-on-primary px-8 py-3 font-label-bold uppercase tracking-widest shadow-2xl hover:bg-secondary hover:text-on-secondary transition-all transform active:scale-95">
                                    Quick Add
                                </button>
</div>
</div>
<div class="p-6">
<p class="text-[12px] font-bold text-primary uppercase tracking-widest mb-1">Aero-Flow</p>
<h3 class="font-headline-md text-on-surface mb-2">Vortex Elite V1</h3>
<p class="text-headline-md font-black text-on-surface">$220.00</p>
</div>
</div>
<!-- Product Card 2 -->
<div class="product-card-hover group relative bg-surface-container border border-outline-variant/10 overflow-hidden">
<div class="relative aspect-square overflow-hidden bg-[#1E1E1E]">
<img class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" data-alt="A professional red running shoe with white branding, positioned dynamically on a dark reflective surface. The lighting is low-key and cinematic, emphasizing the aerodynamic curves and lightweight fabric mesh. Deep shadows create a sense of speed and intensity. The overall visual style is sleek and high-performance, fitting for an elite sports equipment gallery." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBF-U2eEGCy9BIde3FSh72kOlF8dXd2rdFqHOp8opof_wDHJhqT_5lfw65eP1hr9KzP_e_6dVkb8ufAXJtBLvqTLCJwhvNp_IrGu2lmkbvsHjO7RIXla6L0G959Sz86Ty4EHytSAc_cnjJzDlwREjs_Ld0pBjzY3G2Bs-Z5-8AJWz6vn4-SEQsLVJscuIauh3hrQHlMf_w8A_tWvdH-XFZASAJD55SRzTtIHOzBlY1GPnwltkVfkkjnxl_6dFgsVawJVqHAx5BWDMo"/>
<div class="add-to-cart-overlay absolute inset-0 bg-primary/20 backdrop-blur-sm opacity-0 flex items-center justify-center transition-all duration-300 translate-y-4">
<button class="bg-primary text-on-primary px-8 py-3 font-label-bold uppercase tracking-widest shadow-2xl hover:bg-secondary hover:text-on-secondary transition-all transform active:scale-95">
                                    Quick Add
                                </button>
</div>
</div>
<div class="p-6">
<p class="text-[12px] font-bold text-primary uppercase tracking-widest mb-1">Hyperion Tech</p>
<h3 class="font-headline-md text-on-surface mb-2">Velocity X-4</h3>
<p class="text-headline-md font-black text-on-surface">$185.00</p>
</div>
</div>
<!-- Product Card 3 -->
<div class="product-card-hover group relative bg-surface-container border border-outline-variant/10 overflow-hidden">
<div class="relative aspect-square overflow-hidden bg-[#1E1E1E]">
<img class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" data-alt="A high-fashion white and pastel sneaker with complex architectural details and a chunky sole. The lighting is soft yet focused, creating elegant highlights on the multi-textured panels. The aesthetic is clean and luxurious, set against a dark background that makes the light-colored shoe pop dramatically. The mood is sophisticated and exclusive." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqXRpF-e5aPV1IQkk_-TZH2xgVqG6CqE3M35HJEou9yCCdhvjt8qIJSJKonpwTMChiV7FXpjjl9Ln5kPOaX_J_aSGuKkxaiIkhc6C0ciBS4ASkzoREAHB9tvpoSf6zI7kjkA9lwFbQJVjl_GL4f3wpYfT_nkadNISxDCdvHsgIC-QKTWL2ckxfhAt03vac8RBaj3NNQQbjRur9UNA0vxYv_DdmcNu0UoAy-swEvUoCveCKAwHd-PQvQxuIkQ8oNimjDnn6UtJVgMo"/>
<div class="add-to-cart-overlay absolute inset-0 bg-primary/20 backdrop-blur-sm opacity-0 flex items-center justify-center transition-all duration-300 translate-y-4">
<button class="bg-primary text-on-primary px-8 py-3 font-label-bold uppercase tracking-widest shadow-2xl hover:bg-secondary hover:text-on-secondary transition-all transform active:scale-95">
                                    Quick Add
                                </button>
</div>
</div>
<div class="p-6">
<p class="text-[12px] font-bold text-primary uppercase tracking-widest mb-1">Core Performance</p>
<h3 class="font-headline-md text-on-surface mb-2">Cloud Stratus</h3>
<p class="text-headline-md font-black text-on-surface">$250.00</p>
</div>
</div>
<!-- Product Card 4 -->
<div class="product-card-hover group relative bg-surface-container border border-outline-variant/10 overflow-hidden">
<div class="relative aspect-square overflow-hidden bg-[#1E1E1E]">
<img class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" data-alt="Detail shot of a black performance sneaker featuring intricate mesh patterns and high-tech plastic reinforcements. The lighting is moody and focused on the technical textures, creating a powerful monochromatic look. Subtle blue highlights emphasize the futuristic design elements. The composition is tight and aggressive, conveying precision and power." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1ApPsM3R42ZzlAaDqmQK6wkJ2xrJiVzV9UhxFpbYfBsKIeAZ_bnv2ZPcWwj5YaUXI6TC3wg8dO9sjQQaHuLgxh12SQQvuZF4P_xVymLVHcqn-AxXF5BfKjjWOXMuLWct_D5T5npvYCILb8BIS9RUMYO90NVdFrfAyOE00fHcGWf1nnFsBHAJ5VAka6EGD_13krz5qujGqiwMEr_l37GdPGYktf5aj1sjpRXvrAb_47-7pajpj98xxoEjkG1N9z3gqbeNcJxVr2_E"/>
<div class="absolute top-4 left-4 bg-tertiary-container text-on-tertiary-container text-[12px] font-black px-3 py-1 uppercase tracking-tighter shadow-lg">
                                Sold Out
                            </div>
<div class="add-to-cart-overlay absolute inset-0 bg-primary/20 backdrop-blur-sm opacity-0 flex items-center justify-center transition-all duration-300 translate-y-4">
<button class="bg-surface-variant text-on-surface-variant cursor-not-allowed px-8 py-3 font-label-bold uppercase tracking-widest">
                                    Notify Me
                                </button>
</div>
</div>
<div class="p-6">
<p class="text-[12px] font-bold text-primary uppercase tracking-widest mb-1">Vortex Runners</p>
<h3 class="font-headline-md text-on-surface mb-2">Phantom Shadow</h3>
<p class="text-headline-md font-black text-on-surface">$210.00</p>
</div>
</div>
<!-- Product Card 5 -->
<div class="product-card-hover group relative bg-surface-container border border-outline-variant/10 overflow-hidden">
<div class="relative aspect-square overflow-hidden bg-[#1E1E1E]">
<img class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" data-alt="A close-up of a vibrant orange and black basketball shoe on a dark textured background. The lighting highlights the synthetic fabric and bold color transitions. The image has a high-energy, athletic feel with sharp focus on the laces and tongue detail. The premium dark aesthetic emphasizes the bright pop of the orange performance materials." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXI6DzWGlEuW3nGz32t4yJ4ejkha9q_qJOEIMiKr-9hcMSlvtwbGEsLmjuy5FLdoyWFkQsPdDQ39fj1RCSXmu9GX30bN8hDpdV6Kdf2BldrmXZ0loz_3W3T2AkuQgmCz5SzCNW2rvam8qvH_ERDDKvUOMHoZaTWEI7JebJFBwhSQUsdRaKHCxzBvSffwGITwXgbpQdMqvj0bcmKlbSaR-nQn1b-wS3-Cluuj8dWQaaWm5lYz8mJmPOJ9xg0dKiXVNHFCZi2K41KPc"/>
<div class="add-to-cart-overlay absolute inset-0 bg-primary/20 backdrop-blur-sm opacity-0 flex items-center justify-center transition-all duration-300 translate-y-4">
<button class="bg-primary text-on-primary px-8 py-3 font-label-bold uppercase tracking-widest shadow-2xl hover:bg-secondary hover:text-on-secondary transition-all transform active:scale-95">
                                    Quick Add
                                </button>
</div>
</div>
<div class="p-6">
<p class="text-[12px] font-bold text-primary uppercase tracking-widest mb-1">Aero-Flow</p>
<h3 class="font-headline-md text-on-surface mb-2">Ignite Boost</h3>
<p class="text-headline-md font-black text-on-surface">$160.00</p>
</div>
</div>
<!-- Product Card 6 -->
<div class="product-card-hover group relative bg-surface-container border border-outline-variant/10 overflow-hidden">
<div class="relative aspect-square overflow-hidden bg-[#1E1E1E]">
<img class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" data-alt="An elegant leather sneaker in deep navy and grey tones. The shoe is presented in a studio setting with soft, diffused lighting that showcases the premium material quality and stitching precision. The dark environment provides a sophisticated backdrop for the subtle color palette. The image conveys a blend of luxury and performance functionality." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPwbi_USV4rEwpuAlZ-Af57ekdaDlo-TOvmkshIqvyUUhir4W2nx8K9r2QYtrh5klcr3CVxRS-KuV3HIZymAmz3XENUGnor0TWCYEVKihun0MwhWBewUmsdZzUWSp7jViWIVArIifDOLUYz2pPdwcM2s7Y_ugjPb3492yzeioKc8Kv8uDBcq9C1PGSR0QL8ubGSVrYaTMlPYqPW6O9H53_gaYx20kWrpTT2vO9nzHB9O2JxUTiejA8feAf2rQKar1IEUe7OGEIjnE"/>
<div class="add-to-cart-overlay absolute inset-0 bg-primary/20 backdrop-blur-sm opacity-0 flex items-center justify-center transition-all duration-300 translate-y-4">
<button class="bg-primary text-on-primary px-8 py-3 font-label-bold uppercase tracking-widest shadow-2xl hover:bg-secondary hover:text-on-secondary transition-all transform active:scale-95">
                                    Quick Add
                                </button>
</div>
</div>
<div class="p-6">
<p class="text-[12px] font-bold text-primary uppercase tracking-widest mb-1">Hyperion Tech</p>
<h3 class="font-headline-md text-on-surface mb-2">Legacy Trainer</h3>
<p class="text-headline-md font-black text-on-surface">$195.00</p>
</div>
</div>
</div>
<!-- Pagination -->
<div class="mt-16 flex justify-center items-center gap-4">
<button class="w-12 h-12 flex items-center justify-center border border-outline-variant text-on-surface-variant hover:border-primary hover:text-primary transition-all">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-12 h-12 flex items-center justify-center bg-primary text-on-primary font-bold">1</button>
<button class="w-12 h-12 flex items-center justify-center border border-outline-variant text-on-surface-variant hover:border-primary hover:text-primary transition-all">2</button>
<button class="w-12 h-12 flex items-center justify-center border border-outline-variant text-on-surface-variant hover:border-primary hover:text-primary transition-all">3</button>
<span class="text-on-surface-variant">...</span>
<button class="w-12 h-12 flex items-center justify-center border border-outline-variant text-on-surface-variant hover:border-primary hover:text-primary transition-all">12</button>
<button class="w-12 h-12 flex items-center justify-center border border-outline-variant text-on-surface-variant hover:border-primary hover:text-primary transition-all">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
</main>


@endsection