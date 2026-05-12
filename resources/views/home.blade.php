@extends('layout.master')

@section('title', 'Home Page')

@section('content')

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-surface-dim hero-gradient pt-12 pb-section-padding">
        <div class="max-w-container-max mx-auto px-gutter grid grid-cols-1 lg:grid-cols-12 items-center gap-gutter">
            <div class="lg:col-span-6 z-10">
                <div class="inline-block px-3 py-1 mb-6 border border-primary/30 rounded-full bg-primary/10">
                    <span class="text-primary font-label-bold text-[12px] uppercase tracking-widest">Limited Edition
                        Release</span>
                </div>
                <h1 class="font-display-xl text-[56px] md:text-display-xl font-black text-on-surface leading-tight mb-6">
                    ENGINEERED TO <br /><span class="text-primary italic">OUTPACE</span> THE REST
                </h1>
                <p class="text-body-lg text-on-surface-variant max-w-lg mb-10">
                    Experience the future of performance with the AeroGlide X-1. Precision cushioning meets high-octane
                    aesthetics for the modern urban athlete.
                </p>

                <div class="flex flex-wrap gap-4">
                    <button
                        class="bg-primary-container text-on-primary-container px-10 py-4 font-label-bold uppercase tracking-widest text-body-md rounded-lg hover:bg-secondary-container hover:text-on-secondary-container transition-all duration-300 shadow-xl shadow-primary-container/20">
                        Shop Now
                    </button>
                    <button
                        class="border border-outline-variant text-on-surface px-10 py-4 font-label-bold uppercase tracking-widest text-body-md rounded-lg hover:bg-surface-bright transition-all duration-300">
                        View Details
                    </button>
                </div>
            </div>
            <div class="lg:col-span-6 relative mt-12 lg:mt-0">
                <div class="absolute -top-20 -right-20 w-80 h-80 bg-primary/20 blur-[100px] rounded-full"></div>
                <div
                    class="relative z-10 transform lg:scale-110 lg:rotate-[-5deg] hover:rotate-0 transition-transform duration-700">
                    <img alt="AeroGlide X-1 Performance Sneaker"
                        class="w-full h-auto drop-shadow-[0_35px_35px_rgba(0,0,0,0.5)]"
                        data-alt="A high-performance neon green sneaker floating in mid-air against a dark minimalist studio background. Dramatic, high-contrast lighting highlights the sleek synthetic textures and breathable mesh. The lighting creates subtle blue and orange reflections on the shoe's surface, evoking a high-tech, futuristic sports aesthetic. The composition is dynamic and airy, emphasizing the lightweight engineering of the footwear."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZ-J505l_VYtj_w2ZtUXdSjLKUw6h_VzUJk1N6_qlcuOBV6Fmq0nngD101Pi9caFpaGFYlZsvwSFjuQ7CI6rMYczFw8g8HO2jCzkiWrB0133PfPYT0dijcq1x9Hg-NQabXs8hKhrYfGZeAqmw9Pj2jgLMYlkax7YFGiwbkPNP8Lt_RQQrcdqfITrzFOscfMIO70BkVw_uMW_h4VtjV5vXNtJQ_cfEO6_eE6ewYgUXFHU0OUWv55JdF8JDiwGg5qtNYpArT7jxCjVs" />
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Now - Horizontal Chips & Grid -->
    <section class="py-section-padding bg-surface">
        <div class="max-w-container-max mx-auto px-gutter">
            <div class="flex flex-col md:flex-row md:justify-between md:items-end mb-12 gap-6">
                <div>
                    <h2 class="font-headline-lg text-headline-lg uppercase tracking-tighter mb-2">Trending Now</h2>
                    <p class="text-on-surface-variant">The styles everyone is chasing this week.</p>
                </div>
                <div class="flex gap-2 overflow-x-auto pb-2">
                    <button
                        class="px-6 py-2 bg-primary text-on-primary rounded-full font-label-bold text-sm whitespace-nowrap">All</button>
                    <button
                        class="px-6 py-2 bg-surface-container border border-outline-variant/30 text-on-surface hover:border-primary/50 transition-colors rounded-full font-label-bold text-sm whitespace-nowrap">Performance</button>
                    <button
                        class="px-6 py-2 bg-surface-container border border-outline-variant/30 text-on-surface hover:border-primary/50 transition-colors rounded-full font-label-bold text-sm whitespace-nowrap">Lifestyle</button>
                    <button
                        class="px-6 py-2 bg-surface-container border border-outline-variant/30 text-on-surface hover:border-primary/50 transition-colors rounded-full font-label-bold text-sm whitespace-nowrap">Limited
                        Drops</button>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
                <!-- Product Card 1 -->
                @foreach ($productList as $product)
                    <div
                        class="group bg-surface-container rounded-xl overflow-hidden sneaker-card-shadow transition-all duration-500">
                        <div class="relative bg-surface-bright aspect-square overflow-hidden">
                            <span
                                class="absolute top-4 left-4 z-10 bg-secondary-container text-on-secondary-container text-[11px] font-bold px-2 py-1 rounded">HOT</span>
                            <img alt="Red Velocity"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                                data-alt="A vibrant red sports sneaker positioned centrally on a clean charcoal gray surface. Professional high-key lighting casts a soft, large-radius shadow beneath the shoe, emphasizing its sleek profile. The mood is energetic and premium, showcasing the high-quality knit texture and streamlined design elements. The overall aesthetic is minimalist, focusing entirely on the bold color and technical form of the shoe."
                                src="{{ $product->img }}" />
                            <button
                                class="absolute bottom-4 right-4 bg-primary text-on-primary p-3 rounded-full opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-300 shadow-lg">
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                            </button>
                        </div>
                        <div class="p-6">
                            <p class="text-[12px] text-on-surface-variant uppercase font-label-bold mb-1">Jordan Brand</p>
                            <h3 class="font-headline-md text-[18px] mb-3 group-hover:text-primary transition-colors">{{ $product->name }}</h3>
                            <p class="font-bold text-primary text-body-lg">${{ $product->price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Special Collections - Bento Grid -->
    <section class="py-section-padding bg-surface-container-lowest">
        <div class="max-w-container-max mx-auto px-gutter">
            <h2 class="font-headline-lg text-headline-lg uppercase tracking-tighter mb-12 text-center">Curated
                Collections</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-gutter h-auto md:h-[600px]">
                <!-- Bento Item 1: Large Featured -->
                <div class="md:col-span-2 md:row-span-2 relative rounded-2xl overflow-hidden group">
                    <img alt="Retro Heritage"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000"
                        data-alt="A stunning overhead flat-lay of several vintage-inspired leather sneakers in various earthy tones. The setting is a rustic yet modern studio with wood and metal textures. The lighting is warm and directional, creating rich depth and highlighting the premium grain of the leather. The mood is nostalgic yet high-end, celebrating the timeless craftsmanship and heritage of classic footwear design."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqZUDxhUJWNJzx-lqYBhbW0_J7DvLJZj_k3C1fdg_XzkvWhixfZfD9GGUN6cWCOJAk7Ah_uN0gTBPddpSIFzvk4aba1Zs9_MP3NcMzofI_P5FdujZ3oZyfNtfdlUoDYJw29e8NuF3i8Taef9mAaR2oepOPSau-Mmynpk-0l_T2s6vAIs7KPiHBOZP3mcHtcj38E6GIMARZTW07mg9yXfwsUJsVu64eO1Jexl6-GsNw6CdEDq4m00ApyBri6tM0CZEtes9LwcqdXaE" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent p-10 flex flex-col justify-end">
                        <h3 class="font-display-xl text-headline-lg text-white mb-2 uppercase">Retro Heritage</h3>
                        <p class="text-white/80 mb-6 max-w-sm">Revisiting the classics that defined an era. Handcrafted
                            details meet iconic silhouettes.</p>
                        <a class="inline-flex items-center gap-2 text-primary font-bold uppercase tracking-widest text-sm hover:gap-4 transition-all"
                            href="#">
                            Explore Collection <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <!-- Bento Item 2: Performance -->
                <div class="md:col-span-2 relative rounded-2xl overflow-hidden group">
                    <img alt="Pro Athlete Lab"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000"
                        data-alt="A highly dynamic shot of a runner's legs mid-stride on a dark track, wearing neon performance sneakers. High-speed photography captures water droplets or dust kicked up by the movement. The lighting is dramatic and focused on the shoes, using a cool blue and electric yellow palette. The image conveys pure speed, power, and the technical superiority of elite athletic gear in a futuristic laboratory setting."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuARoJOM7uspstw8anl_bU_9IM1BWJghA3oXUo1ZuBpk_WOVj9V2w8kiQRLw5sNqsirSp2era0awIej7iRbfqhWZHKM5kEvo5ZNhe8dfv-lrtru85RfIMXvwn6_xpsVELHqK4-w2nAERY7-l5fPh8MuFoCdt5sKOvPlyG2CS9QQmplIPTvBc7yib1buDgSirz6s-Hj_i3gdvgR56TKbQpELatX6jye5Y8nWoepOfT7bf5rcYMvodfJaaCail0Hr559C6nEPlQ-4cMsw" />
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-black/60 to-transparent p-8 flex flex-col justify-center">
                        <h3 class="font-headline-lg text-white mb-2 uppercase">Performance Lab</h3>
                        <p class="text-white/80 mb-4 max-w-xs">Push your limits with elite-level tech designed for the
                            stadium.</p>
                        <a class="text-secondary font-bold uppercase tracking-widest text-sm" href="#">Shop
                            Performance</a>
                    </div>
                </div>
                <!-- Bento Item 3: Streetwear -->
                <div class="md:col-span-1 relative rounded-2xl overflow-hidden group">
                    <img alt="Streetwear Essentials"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000"
                        data-alt="A gritty urban scene featuring a pair of stylish lifestyle sneakers on a rain-slicked asphalt street at night. Neon signs in the background are blurred into beautiful colorful bokeh. The lighting is vibrant and cinematic, using oranges and cyans to create a moody, cyberpunk-inspired atmosphere. The focus is razor-sharp on the sneaker's texture and silhouette, capturing the essence of modern streetwear culture."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQ6xAIliYrNTq2msixFPS-bxp9j_LYc9ERvQkwzS8gqqRK-8mZXWU8yr4G2jXCjCiXVx_6sxCyNlH82m_BDv01JNrqik6vm-D9YKtr6j9C-kFs6Vj82NyQ3ZKLNyTJry1Li7uP31AISlFCkcRNZdBdn0gK6OJw2mUl1ztw49fK1kUPMG09pJDTG7zf31Yk0lwUbBxwiK7MndTH-gM7Rev1XX5i_x7cMwHPmgVLWhr27ijkIeXuO7SIMYooqcOvlwkoa1q9l0qhOyc" />
                    <div class="absolute inset-0 bg-black/40 p-6 flex flex-col justify-end">
                        <h3 class="font-headline-md text-white uppercase">Urban Style</h3>
                    </div>
                </div>
                <!-- Bento Item 4: Sale -->
                <div class="md:col-span-1 relative rounded-2xl overflow-hidden group bg-primary-container">
                    <div class="p-8 h-full flex flex-col justify-between">
                        <span
                            class="material-symbols-outlined text-on-primary-container text-[48px]">local_fire_department</span>
                        <div>
                            <h3 class="font-headline-md text-on-primary-container uppercase leading-tight mb-2">Final
                                Clearance</h3>
                            <p class="text-on-primary-container/80 text-sm mb-4">Up to 40% off last season's favorites.
                            </p>
                            <button
                                class="bg-on-primary-container text-primary-container px-4 py-2 rounded font-bold text-xs uppercase tracking-widest">Shop
                                Sale</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Arrivals - Full Width Interactive -->
    <section class="py-section-padding bg-surface">
        <div class="max-w-container-max mx-auto px-gutter">
            <div class="flex items-center justify-between mb-12">
                <h2 class="font-headline-lg text-headline-lg uppercase tracking-tighter">New Arrivals</h2>
                <div class="flex gap-4">
                    <button
                        class="w-12 h-12 rounded-full border border-outline-variant flex items-center justify-center hover:bg-surface-bright transition-colors">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <button
                        class="w-12 h-12 rounded-full border border-outline-variant flex items-center justify-center hover:bg-surface-bright transition-colors">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
            <div class="flex gap-gutter overflow-x-auto pb-12 snap-x snap-mandatory no-scrollbar">
                <!-- Large Item 1 -->
                <div class="min-w-[300px] md:min-w-[450px] snap-start">
                    <div class="aspect-[4/5] rounded-xl overflow-hidden mb-6 relative group">
                        <img alt="Lunar Eclipse"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            data-alt="A close-up macro shot of a sleek white sneaker featuring translucent materials and intricate stitching. The background is a soft-focus architectural space with minimalist gray curves. The lighting is diffused and bright, creating a clean 'gallery' feel. Every detail of the technical mesh and premium suede is visible, emphasizing the meticulous design and high-end positioning of the new arrival."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCziYKZ_US53zI_KHjeA6vhXWOoxo3xvFJcFPD8o33xxI4Nvgv3WEzeMt4JvTt0pw_6Qe9LLoBfl_M7JWg-NvbakVazX2Syn2aWy3Py7oFs4q9hEKhFoUHU3KxeITDVHn5egviMprDDq6NnH-cs_Q_E5j_QLYANmHYCSJoiL3s1r62-B0-RP7KDIRaMBr7urSWjn9H5_UBwJBVeHmQEqRd8UraGQIOF9gyiaQjGZLxNOxQFMUiO8s0-I-eUm4D8iVWENkSKfsEgLXo" />
                        <div class="absolute bottom-6 left-6 flex gap-2">
                            <span
                                class="bg-surface/90 backdrop-blur px-3 py-1 rounded text-[11px] font-bold uppercase tracking-widest">Just
                                In</span>
                            <span
                                class="bg-primary/90 backdrop-blur text-on-primary px-3 py-1 rounded text-[11px] font-bold uppercase tracking-widest">Member
                                Exclusive</span>
                        </div>
                    </div>
                    <h3 class="font-headline-md text-headline-md mb-2">Air Max Lunar 'Ghost'</h3>
                    <p class="text-on-surface-variant mb-4">Advanced reactive foam for a weightless stride.</p>
                    <p class="font-bold text-primary text-xl">$245.00</p>
                </div>
                <!-- Large Item 2 -->
                <div class="min-w-[300px] md:min-w-[450px] snap-start">
                    <div class="aspect-[4/5] rounded-xl overflow-hidden mb-6 relative group">
                        <img alt="Volt Runner"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            data-alt="A striking profile shot of a neon yellow and black sneaker held in mid-air by an invisible wire. The background is a seamless deep black, creating a powerful contrast that makes the neon color pop. Two sharp overhead lights create strong specular highlights on the sleek rubber and fabric textures. The overall mood is intense, modern, and focused on pure high-performance energy."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDEgzs8f0bXq6iI6k-o96Fxz3FaOotutkN5lnKVDp8ASymySxFXgYFiBDEzlT5GCdY1xneRTem0GdvHluJor0y1TkaoE-ynPqph2ldWMtNt4shEvzY2lcdPGJwVUztVWMT2RulYfrNfM4GVZKw73G4IbhTkXhGHYCPn2CEYyXdFU1iH1IHLBTZKn4y7O4lEF3ejqVGyepv19YpgPOuTzBxaBh0QMNPUQ2-j23Iq8m0AWurpK7Abdy79LQEL9eKkXJ23Dk_L4CoCLz0" />
                        <div class="absolute bottom-6 left-6 flex gap-2">
                            <span
                                class="bg-surface/90 backdrop-blur px-3 py-1 rounded text-[11px] font-bold uppercase tracking-widest">Just
                                In</span>
                        </div>
                    </div>
                    <h3 class="font-headline-md text-headline-md mb-2">Zoom Freak 'Volt' Edition</h3>
                    <p class="text-on-surface-variant mb-4">High-impact cushioning for explosive vertical movement.</p>
                    <p class="font-bold text-primary text-xl">$190.00</p>
                </div>
                <!-- Large Item 3 -->
                <div class="min-w-[300px] md:min-w-[450px] snap-start">
                    <div class="aspect-[4/5] rounded-xl overflow-hidden mb-6 relative group">
                        <img alt="Carbon Fiber Pro"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            data-alt="A technical breakdown image of a performance sneaker, showing its various components like the carbon fiber sole plate and breathable upper in a clean, exploded-view style. The background is a cool-toned industrial blue. The lighting is precise and scientific, highlighting the engineering innovation. The aesthetic is extremely high-tech, appealing to serious athletes and sneaker enthusiasts alike."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiiRMPn43ck3alfMFKl-XyE8pYOS_EZdRU_982Ncoop-pU5LLfVlxj0CNIsvPe8ewvsSBvwdr0C4w8WXWj-jZ-OGwC5LTnMHQ_7JaQ_8vNW6CsdZOf5MFbx6X_4cjAvbPHjBQw34vyA4RXU5ZCtUIgg1VIVdDWkr0Dn6jb76tPEaYpY7kFDe8TKdaH-ytVz2xFsXdhPXpZxgcFXXlfPkMcPF3s7j7O3MW6iQcXHXIiHXpUnpZEeuoV3YMt8fsX4J52lqTht-A7XE0" />
                        <div class="absolute bottom-6 left-6 flex gap-2">
                            <span
                                class="bg-surface/90 backdrop-blur px-3 py-1 rounded text-[11px] font-bold uppercase tracking-widest">New
                                Tech</span>
                        </div>
                    </div>
                    <h3 class="font-headline-md text-headline-md mb-2">AlphaFly Next Gen</h3>
                    <p class="text-on-surface-variant mb-4">Revolutionary energy return carbon-fiber technology.</p>
                    <p class="font-bold text-primary text-xl">$275.00</p>
                </div>
            </div>
        </div>
    </section>
@endsection