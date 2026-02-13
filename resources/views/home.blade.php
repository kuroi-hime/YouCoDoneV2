<!DOCTYPE html>

<html class="light" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>{{ config('app.name', 'YouCoDone') }}</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
        <script id="tailwind-config">
                tailwind.config = {
                    darkMode: "class",
                    theme: {
                        extend: {
                            colors: {
                                "primary": "#13ec13",
                                "background-light": "#f6f8f6",
                                "background-dark": "#102210",
                            },
                            fontFamily: {
                                "display": ["Work Sans"]
                            },
                            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                        },
                    },
                }
            </script>
        <style>
            body {
                font-family: "Work Sans", sans-serif;
            }
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }
            .fill-primary {
                font-variation-settings: 'FILL' 1;
                color: #13ec13;
            }
            input[type="date"]::-webkit-inner-spin-button,
            input[type="date"]::-webkit-calendar-picker-indicator {
                display: none;
                -webkit-appearance: none;
            }
        </style>
    </head>
    <body class="bg-background-light dark:bg-background-dark text-[#0d1b0d] dark:text-[#f8fcf8] min-h-screen">
        <!-- Top Navigation Bar -->
        <header class="sticky top-0 z-50 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-[#e7f3e7] dark:border-[#1d351d]">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-10 h-16 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="text-primary">
                    <span class="material-symbols-outlined text-4xl text-primary">restaurant</span>
                </div>
                <h2 class="text-xl font-bold tracking-tight">YouCo'Done</h2>
            </div>
            <div class="hidden md:flex items-center gap-8">
                <nav class="flex items-center gap-6">
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}">Explore</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('profile.edit') }}">Favorites</a>
                    @auth
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('myRestaurants', auth()->user()->id) }}">My Restaurants</a>
                    @endauth
                </nav>
                <div class="flex items-center gap-3">
    @guest
        <a href="{{ route('login') }}" class="bg-primary/20 text-[#0d1b0d] dark:text-[#f8fcf8] px-4 py-2 rounded-lg text-sm font-bold hover:bg-primary/30 transition-all">Login</a>
        <a href="{{ route('register') }}" class="bg-primary text-[#0d1b0d] px-4 py-2 rounded-lg text-sm font-bold shadow-sm hover:opacity-90 transition-all">Sign Up</a>
    @endguest

    @auth
        <span class="text-sm font-medium mr-2">{{ auth()->user()->name }}</span>
        <a href="{{ route('dashboard') }}" class="w-10 h-10 rounded-full border-2 border-primary bg-cover bg-center" style='background-image: url("https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}");'></a>
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-xs text-red-500 ml-2">Logout</button>
        </form>
    @endauth
</div>
            </div>
        </header>
        <main class="max-w-[1200px] mx-auto px-4 sm:px-10 pb-20">
            <!-- Hero & Headline -->
            <section class="pt-12 pb-8">
                <h1 class="text-center text-4xl md:text-5xl font-bold tracking-tight mb-4">Find your next favorite meal</h1>
                <p class="text-center text-[#4c9a4c] dark:text-[#8bc38b] max-w-2xl mx-auto">Discover the best restaurants in your city and book your table in seconds.</p>
            </section>
        <!-- Search & Filters Container -->
        <section class="mb-12 bg-white dark:bg-[#1a2e1a] p-4 rounded-xl shadow-xl border border-[#e7f3e7] dark:border-[#1d351d]">
        <div class="flex flex-col gap-4">
            <form action="{{ route('home') }}" method="GET" class="flex gap-4 w-full">
                <div class="relative w-full">
                    <label class="flex items-center bg-background-light dark:bg-background-dark border border-[#e7f3e7] dark:border-[#1d351d] rounded-lg px-4 py-3 focus-within:ring-2 ring-primary/30 transition-all">
                        <span class="material-symbols-outlined text-[#4c9a4c] mr-3">search</span>
                        <input name="search" value="{{ request('search') }}" class="w-full bg-transparent border-none focus:ring-0 text-base placeholder:text-[#4c9a4c]" placeholder="Search by restaurant name or city..." type="text"/>
                    </label>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <div class="ml-auto w-full md:w-auto">
                        <button type="submit" class="w-full md:w-auto bg-primary text-[#0d1b0d] px-8 py-2 rounded-lg font-bold hover:shadow-lg transition-all">
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

<!-- Restaurant Grid -->
<section>
<div class="flex items-center justify-between mb-6">
<h3 class="text-2xl font-bold">Top Picks for You</h3>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    @forelse($restaurants as $restaurant)
        <div class="group bg-white dark:bg-[#1a2e1a] rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-[#e7f3e7] dark:border-[#1d351d]">
            <div class="relative h-48 overflow-hidden">
                <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" 
                     style='background-image: url("{{ $restaurant->images->first() ? $restaurant->images->first()->path_image:asset("assets/defaultPic.webp") }}");'>
                </div>
                @auth
                <button class="absolute top-3 size-10 right-3 p-2 bg-white/80 dark:bg-black/40 backdrop-blur-md rounded-full text-gray-400 hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">favorite</span>
                </button>
                @endauth
            </div>
            <div class="p-4">
                <div class="flex justify-between items-start mb-2">
                    <h4 class="text-lg font-bold">{{ $restaurant->nom_restaut }}</h4>
                    <!-- <div class="flex items-center gap-1 text-sm font-bold bg-primary/10 px-2 py-0.5 rounded">
                        <span class="material-symbols-outlined text-[16px] text-[#0d1b0d] fill-primary">star</span>
                        4.5 </div> -->
                    <div class="flex items-center gap-1 text-sm font-bold bg-primary/10 px-2 py-0.5 rounded">
                        <span class="material-symbols-outlined text-[16px] text-[#0d1b0d] fill-primary">soup_kitchen</span>
                        {{ $restaurant->type_cuisine}}
                    </div>
                </div>
                <p class="text-[#4c9a4c] dark:text-[#8bc38b] text-sm mb-4">
                    {{ $restaurant->localisation }}
                </p>
                <div class="flex items-center justify-between border-t border-[#e7f3e7] dark:border-[#1d351d] pt-4">
                    <span class="text-sm font-medium {{$restaurant->disponibilite_restaut ? 'text-primary':'text-red-500'}}">{{ $restaurant->disponibilite_restaut ? 'Open':'Closed'}} Now</span>
                    <a href="{{ route('restaurant.show', $restaurant->id_restaut) }}" class="text-sm font-bold bg-primary px-4 py-1.5 rounded-lg hover:opacity-90 transition-all text-[#0d1b0d]">More details</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-full text-center py-10">
            <p class="text-gray-500">No restaurants found matching your search.</p>
        </div>
    @endforelse
</div>
<div class="mt-12">
    {{ $restaurants->appends(request()->query())->links() }}
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-white dark:bg-[#0a160a] border-t border-[#e7f3e7] dark:border-[#1d351d] py-12">
<div class="max-w-[1200px] mx-auto px-4 sm:px-10">
<div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
<div class="col-span-1 md:col-span-1">
<div class="flex items-center gap-3 text-primary mb-4">
<svg class="size-6" fill="currentColor" viewbox="0 0 48 48">
<path d="M24 45.8096C19.6865 45.8096 15.4698 44.5305 11.8832 42.134C8.29667 39.7376 5.50128 36.3314 3.85056 32.3462C2.19985 28.361 1.76794 23.9758 2.60947 19.7452C3.451 15.5145 5.52816 11.6284 8.57829 8.5783C11.6284 5.52817 15.5145 3.45101 19.7452 2.60948C23.9758 1.76795 28.361 2.19986 32.3462 3.85057C36.3314 5.50129 39.7376 8.29668 42.134 11.8833C44.5305 15.4698 45.8096 19.6865 45.8096 24L24 24L24 45.8096Z"></path>
</svg>
<h2 class="text-xl font-bold tracking-tight text-[#0d1b0d] dark:text-[#f8fcf8]">YouCo'Done</h2>
</div>
<p class="text-sm text-[#4c9a4c] dark:text-[#8bc38b]">Revolutionizing the way you book and experience restaurants.</p>
</div>
<div>
<h5 class="font-bold mb-4">Discover</h5>
<ul class="space-y-2 text-sm text-[#4c9a4c] dark:text-[#8bc38b]">
<li><a class="hover:text-primary" href="#">New Restaurants</a></li>
<li><a class="hover:text-primary" href="#">Top Rated</a></li>
<li><a class="hover:text-primary" href="#">Special Offers</a></li>
<li><a class="hover:text-primary" href="#">Popular Areas</a></li>
</ul>
</div>
<div>
<h5 class="font-bold mb-4">For Owners</h5>
<ul class="space-y-2 text-sm text-[#4c9a4c] dark:text-[#8bc38b]">
<li><a class="hover:text-primary" href="#">Register Restaurant</a></li>
<li><a class="hover:text-primary" href="#">Pricing Plans</a></li>
<li><a class="hover:text-primary" href="#">Dashboard</a></li>
<li><a class="hover:text-primary" href="#">Support</a></li>
</ul>
</div>
<div>
<h5 class="font-bold mb-4">Contact</h5>
<ul class="space-y-2 text-sm text-[#4c9a4c] dark:text-[#8bc38b]">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-sm">mail</span> contact@youcodone.com</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-sm">call</span> +33 1 23 45 67 89</li>
</ul>
</div>
</div>
<div class="border-t border-[#e7f3e7] dark:border-[#1d351d] pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-[#4c9a4c] dark:text-[#8bc38b]">
<p>© 2024 YouCo'Done. All rights reserved.</p>
<div class="flex gap-6">
<a class="hover:text-primary" href="#">Privacy Policy</a>
<a class="hover:text-primary" href="#">Terms of Service</a>
<a class="hover:text-primary" href="#">Cookies</a>
</div>
</div>
</div>
</footer>
<!-- </body></html> -->