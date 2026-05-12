@extends('layout.master')

@section('title', 'Login')

@section('content')

<h1 class="text-white text-5xl text-center mt-10">
    Login Page
</h1>

<main
        class="flex-grow flex items-center justify-center px-margin-mobile relative overflow-hidden py-section-padding">
        <!-- Background Decor Elements -->
        <div
            class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-primary-container/10 rounded-full blur-[120px] pointer-events-none">
        </div>
        <div
            class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-secondary-container/10 rounded-full blur-[100px] pointer-events-none">
        </div>
        <div
            class="w-full max-w-[1100px] grid md:grid-cols-2 glass-effect rounded-xl overflow-hidden shadow-2xl relative z-10">
            <!-- Left Side: Visual/Branding -->
            <div class="hidden md:block relative overflow-hidden group">
                <img alt="Premium Sneaker Display"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                    data-alt="A high-performance luxury sneaker floating in a dark, atmospheric studio space. Sharp, cinematic lighting highlights the technical fabrics and sleek silhouette against a deep black background. The scene is accented by subtle electric blue neon glows, reflecting a premium athletic aesthetic consistent with SOLE_CULTURE. Minimalist and high-contrast, evoking a sense of speed and exclusivity."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXCBF6i_tTyR6LX3LlxaG91eigMvMmd9-627MTvPKY9kz1b1FRLBV8546R15ELTYXPS2VD6PTcxLb98-ygTtSpZm2TjuJdZPLzS8kAxKwpsrO6HFzvvNaGJ0swLWaitoy4dUhtnOz42a0UjWBFD9YsfLl4mtt0nD63MMBoutqXa9gNkJCiNa9LQfm3Awh1HuNMq2eE-2WX-RGLUWx-d5BQmjX0FghGiUaw4NYa1Ez7q7P9VgFRahVpxzYmS95TJ5GrJIH_1oCrQGY" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-surface-dim via-transparent to-transparent opacity-80">
                </div>
                <div class="absolute bottom-12 left-12 right-12">
                    <h1 class="font-display-xl text-headline-lg text-on-surface mb-4">SOLE_CULTURE</h1>
                    <p class="font-body-lg text-on-surface-variant max-w-sm">ENGINEERED FOR PEAK PERFORMANCE. JOIN THE
                        ELITE CIRCLE OF SNEAKER CULTURE.</p>
                </div>
            </div>
            <!-- Right Side: Login Form -->
            <div class="p-gutter md:p-12 flex flex-col justify-center bg-surface-container-low">
                <div class="mb-10 text-center md:text-left">
                    <h2 class="font-headline-lg text-on-surface mb-2">Chào mừng trở lại</h2>
                    <p class="text-on-surface-variant font-body-md">Vui lòng nhập thông tin để truy cập tài khoản của
                        bạn.</p>
                </div>
                <form class="space-y-6">
                    <div class="space-y-2">
                        <label class="font-label-bold text-on-surface-variant uppercase tracking-wider block"
                            for="email">Email</label>
                        <input
                            class="w-full bg-surface-container-high border-outline-variant/30 text-on-surface rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none"
                            id="email" placeholder="name@example.com" type="email" />
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label class="font-label-bold text-on-surface-variant uppercase tracking-wider block"
                                for="password">Mật khẩu</label>
                            <a class="text-primary font-label-bold hover:text-secondary transition-colors text-sm"
                                href="#">Quên mật khẩu?</a>
                        </div>
                        <input
                            class="w-full bg-surface-container-high border-outline-variant/30 text-on-surface rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none"
                            id="password" placeholder="••••••••" type="password" />
                    </div>
                    <button
                        class="w-full bg-primary-container text-on-primary-container font-headline-md text-body-md py-4 rounded-lg uppercase tracking-widest font-bold sporty-button-shadow hover:bg-secondary-container hover:text-on-secondary-container transition-all duration-300 transform active:scale-[0.98]"
                        type="submit">
                        Đăng nhập
                    </button>
                </form>
                <div class="mt-8 relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-outline-variant/30"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span
                            class="px-4 bg-surface-container-low text-on-surface-variant font-label-bold uppercase">Hoặc
                            đăng nhập với</span>
                    </div>
                </div>
                <div class="mt-6 grid grid-cols-2 gap-4">
                    <button
                        class="flex items-center justify-center gap-3 bg-surface-container-high border border-outline-variant/30 text-on-surface px-4 py-3 rounded-lg hover:bg-surface-variant transition-colors font-label-bold">
                        <img alt="Google" class="w-5 h-5"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-1i_atW2-7QSXRklPg3axe8xkjEaRW_3iWUwctfvX6Gqb8pl222zE3DerAjtXdMzwZY4MdQ5RM2ndKK97ULzMo4s_dWmmxqW4TZwB60c8BeuqA57B1UbI0obkLhOVNiUA8CDKdrGJvXUfVtqaM7Me8Ny0BffdNqWZTtuUmTj95LbHxqYUpl4FDAu8sFPdOtu15bg-ur-OxAzO6l15bgGzJW3SjArtxkSZFks8-TMlm2WHFlsN0D7GHeIhAx1ffQo6__aX8xEnXGM" />
                        Google
                    </button>
                    <button
                        class="flex items-center justify-center gap-3 bg-surface-container-high border border-outline-variant/30 text-on-surface px-4 py-3 rounded-lg hover:bg-surface-variant transition-colors font-label-bold">
                        <span class="material-symbols-outlined text-primary"
                            style="font-variation-settings: 'FILL' 1;">social_leaderboard</span>
                        Facebook
                    </button>
                </div>
                <p class="mt-10 text-center text-on-surface-variant font-body-md">
                    Bạn chưa có tài khoản?
                    <a class="text-primary font-bold hover:underline underline-offset-4 ml-1" href="#">Đăng ký ngay</a>
                </p>
            </div>
        </div>
    </main>
@endsection