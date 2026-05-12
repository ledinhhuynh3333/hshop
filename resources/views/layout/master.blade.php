<!DOCTYPE html>

<html class="dark" lang="vi">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&amp;family=Inter:wght@400;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-surface-variant": "#c3c5d9",
                        "surface-bright": "#373943",
                        "tertiary-fixed-dim": "#ffb4a1",
                        "outline-variant": "#434656",
                        "inverse-primary": "#004ced",
                        "on-secondary-fixed": "#3a0b00",
                        "surface-dim": "#11131c",
                        "surface-tint": "#b7c4ff",
                        "surface-container-high": "#282934",
                        "primary-fixed-dim": "#b7c4ff",
                        "on-primary-fixed-variant": "#0038b6",
                        "on-secondary-fixed-variant": "#852400",
                        "primary-fixed": "#dde1ff",
                        "surface-container": "#1d1f29",
                        "error-container": "#93000a",
                        "on-error": "#690005",
                        "secondary-fixed-dim": "#ffb59e",
                        "surface-container-lowest": "#0c0e17",
                        "tertiary-fixed": "#ffdbd2",
                        "on-tertiary-fixed-variant": "#891e00",
                        "surface": "#11131c",
                        "on-primary-container": "#dfe3ff",
                        "inverse-surface": "#e1e1ef",
                        "surface-variant": "#32343f",
                        "secondary": "#ffb59e",
                        "on-primary": "#002682",
                        "error": "#ffb4ab",
                        "primary": "#b7c4ff",
                        "on-tertiary-container": "#ffddd5",
                        "on-background": "#e1e1ef",
                        "surface-container-highest": "#32343f",
                        "tertiary-container": "#bf3003",
                        "on-surface": "#e1e1ef",
                        "on-tertiary-fixed": "#3c0800",
                        "secondary-fixed": "#ffdbd0",
                        "on-error-container": "#ffdad6",
                        "outline": "#8d90a2",
                        "surface-container-low": "#191b25",
                        "background": "#11131c",
                        "on-tertiary": "#611300",
                        "on-primary-fixed": "#001452",
                        "secondary-container": "#ff571a",
                        "primary-container": "#0052ff",
                        "inverse-on-surface": "#2e303a",
                        "on-secondary": "#5e1700",
                        "on-secondary-container": "#521300",
                        "tertiary": "#ffb4a1"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-mobile": "16px",
                        "section-padding": "80px",
                        "gutter": "24px",
                        "container-max": "1280px",
                        "unit": "8px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "headline-lg": ["Montserrat"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Montserrat"],
                        "label-bold": ["Inter"],
                        "display-xl": ["Montserrat"]
                    },
                    "fontSize": {
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.2", "fontWeight": "700" }],
                        "label-bold": ["14px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "display-xl": ["64px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800" }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .hero-gradient {
            background: radial-gradient(circle at 70% 30%, rgba(183, 196, 255, 0.15) 0%, rgba(17, 19, 28, 0) 60%);
        }

        .sneaker-card-shadow:hover {
            box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.45);
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    <!-- TopNavBar -->

    <nav
        class="sticky top-0 w-full z-50 bg-surface/80 backdrop-blur-md dark:bg-surface-dim/80 shadow-sm border-b border-outline-variant/30">
        <div class="flex justify-between items-center h-20 px-gutter max-w-container-max mx-auto">
            <div class="font-display-xl text-headline-md font-extrabold tracking-tighter text-primary">
                SOLE_CULTURE
            </div>
            <div class="hidden md:flex gap-8 items-center">
                <a class="font-label-bold text-label-bold uppercase tracking-wider text-primary border-b-2 border-primary pb-1"
                    href="#">Drops</a>
                <a class="font-label-bold text-label-bold uppercase tracking-wider text-on-surface-variant hover:text-on-surface transition-colors"
                    href="#">Men</a>
                <a class="font-label-bold text-label-bold uppercase tracking-wider text-on-surface-variant hover:text-on-surface transition-colors"
                    href="#">Women</a>
                <a class="font-label-bold text-label-bold uppercase tracking-wider text-on-surface-variant hover:text-on-surface transition-colors"
                    href="#">Collections</a>
                <a class="font-label-bold text-label-bold uppercase tracking-wider text-on-surface-variant hover:text-on-surface transition-colors"
                    href="#">Release Radar</a>
            </div>
            <div class="flex items-center gap-6">
                <div
                    class="hidden lg:flex items-center bg-surface-container rounded-full px-4 py-2 border border-outline-variant/20">
                    <span class="material-symbols-outlined text-on-surface-variant text-[20px]">search</span>
                    <input
                        class="bg-transparent border-none focus:ring-0 text-body-md placeholder:text-on-surface-variant/50 w-48"
                        placeholder="Search sneakers..." type="text" />
                </div>
                <div class="flex items-center gap-4 text-primary">
                    <button class="hover:text-secondary transition-all duration-300 active:scale-95">
                        <span class="material-symbols-outlined">person</span>
                    </button>
                    <button class="hover:text-secondary transition-all duration-300 active:scale-95 relative">
                        <span class="material-symbols-outlined">shopping_cart</span>
                        <span
                            class="absolute -top-2 -right-2 bg-secondary-container text-on-secondary-container text-[10px] font-bold px-1.5 py-0.5 rounded-full">3</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Footer -->
    <footer
        class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/20 w-full py-section-padding">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter px-gutter max-w-container-max mx-auto">
            <div class="md:col-span-4">
                <div class="font-display-xl text-headline-lg font-black text-on-surface mb-6">SOLE_CULTURE</div>
                <p class="text-on-surface-variant max-w-xs mb-8">
                    Defining the intersection of performance and style. Engineered for those who lead, not follow.
                </p>
                <div class="flex gap-4">
                    <a class="w-10 h-10 flex items-center justify-center rounded-full bg-surface-container border border-outline-variant/30 hover:text-secondary transition-colors"
                        href="#">
                        <span class="material-symbols-outlined">public</span>
                    </a>
                    <a class="w-10 h-10 flex items-center justify-center rounded-full bg-surface-container border border-outline-variant/30 hover:text-secondary transition-colors"
                        href="#">
                        <span class="material-symbols-outlined">camera</span>
                    </a>
                    <a class="w-10 h-10 flex items-center justify-center rounded-full bg-surface-container border border-outline-variant/30 hover:text-secondary transition-colors"
                        href="#">
                        <span class="material-symbols-outlined">movie</span>
                    </a>
                </div>
            </div>
            <div class="md:col-span-2">
                <h4 class="font-label-bold uppercase tracking-widest text-on-surface mb-6">Shop</h4>
                <ul class="space-y-4">
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors underline-offset-4 hover:underline"
                            href="#">New Arrivals</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors underline-offset-4 hover:underline"
                            href="#">Best Sellers</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors underline-offset-4 hover:underline"
                            href="#">Performance</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors underline-offset-4 hover:underline"
                            href="#">Lifestyle</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors underline-offset-4 hover:underline"
                            href="#">Sale</a></li>
                </ul>
            </div>
            <div class="md:col-span-2">
                <h4 class="font-label-bold uppercase tracking-widest text-on-surface mb-6">Support</h4>
                <ul class="space-y-4">
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors underline-offset-4 hover:underline"
                            href="#">Shipping &amp; Returns</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors underline-offset-4 hover:underline"
                            href="#">Store Locator</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors underline-offset-4 hover:underline"
                            href="#">Size Guide</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors underline-offset-4 hover:underline"
                            href="#">FAQ</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors underline-offset-4 hover:underline"
                            href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="md:col-span-4">
                <h4 class="font-label-bold uppercase tracking-widest text-on-surface mb-6">Newsletter</h4>
                <p class="text-on-surface-variant text-sm mb-6">Join the inner circle for early access to drops and
                    member-only events.</p>
                <div class="flex gap-2">
                    <input
                        class="bg-surface-container border border-outline-variant/30 rounded-lg px-4 py-3 flex-grow text-on-surface placeholder:text-on-surface-variant/50 focus:ring-primary focus:border-primary"
                        placeholder="Email Address" type="email" />
                    <button
                        class="bg-primary text-on-primary px-6 py-3 rounded-lg font-bold uppercase tracking-widest text-sm hover:bg-secondary-container transition-colors">Join</button>
                </div>
            </div>
            <div
                class="md:col-span-12 mt-16 pt-8 border-t border-outline-variant/10 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-on-surface-variant text-sm uppercase tracking-widest">© 2024 SOLE_CULTURE. ENGINEERED FOR
                    PEAK PERFORMANCE.</p>
                <div class="flex gap-8">
                    <a class="text-on-surface-variant text-xs hover:text-on-surface transition-colors" href="#">Privacy
                        Policy</a>
                    <a class="text-on-surface-variant text-xs hover:text-on-surface transition-colors" href="#">Terms of
                        Service</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- FAB (Suppressed based on rules but included for Home relevance) -->
    <button
        class="fixed bottom-8 right-8 bg-primary text-on-primary w-14 h-14 rounded-full shadow-2xl flex items-center justify-center z-40 hover:scale-110 transition-transform md:hidden">
        <span class="material-symbols-outlined">chat_bubble</span>
    </button>
</body>

</html>