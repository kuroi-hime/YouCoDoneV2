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
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }
            body {
                font-family: 'Work Sans', sans-serif;
            }
        </style>
    </head>
    <body class="bg-background-light dark:bg-background-dark text-[#0d1b0d] dark:text-white min-h-screen">
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
        <main class="max-w-[1200px] mx-auto pb-20 pt-8">
        <!-- Hero Section -->
        <div class="px-4">
        <div class="relative h-[400px] w-full rounded-xl overflow-hidden group shadow-xl">
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" data-alt="Elegant restaurant interior with green plants" style='background-image: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 60%, transparent 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCoxq2X5ZGrjqRAmFopAB1fBs6kimEbPjGTjA-Hd7dEFqmFDG2lBYpHbsC0rYb1djBwfc2iIZR2LqoimObU6TVWZFaeWvzOQdPZSER5zK5Xxlqg0lspdrs7ECbKlAu8f9dVWCB3nPLb871g6BP4uwrnbwBUUhvi5JeRwXPp5BF1zdROFtBX9HAPjIjplmCZicRPCm0sJ3_zWPXIRToNOhvZpsxEH0_YBIfVogd8dY9SfLv7_FmV43m4fnef85fkk3GwUrXT59bioynd");'></div>
        <div class="absolute bottom-0 left-0 p-8 text-white">
        <div class="flex items-center gap-2 mb-3">
        <!-- <span class="bg-primary text-[#0d1b0d] text-xs font-bold px-2 py-1 rounded">MICHELIN STAR</span> -->
        <span class="bg-white/20 backdrop-blur-sm text-xs font-medium px-2 py-1 rounded flex items-center gap-1">
            <span class="material-symbols-outlined">soup_kitchen</span>
            {{ __($restaut->type_cuisine) }}
        </span>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ __($restaut->nom_restaut) }}</h1>
        <div class="flex flex-wrap items-center gap-6 text-sm">
        <!-- <div class="flex items-center gap-1">
        <span class="material-symbols-outlined text-primary text-xl">star</span>
        <span class="font-bold text-lg">4.9</span>
        <span class="opacity-80">(1,240 reviews)</span>
        </div> -->
        <div class="flex items-center gap-1">
        <span class="material-symbols-outlined text-primary text-xl">location_on</span>
        <span>{{ __($restaut->localisation) }}</span>
        </div>
        <div class="flex items-center gap-1">
        <span class="material-symbols-outlined {{ $restaut->disponibilite_restaut?'text-primary ':'text-red-500 '}}text-xl">schedule</span>
        <span class="{{ $restaut->disponibilite_restaut?'text-primary':'text-red-500'}} font-semibold uppercase tracking-wider">{{ __($restaut->disponibilite_restaut?'Open Now':'Closed') }}</span>
        @if($restaut->disponibilite_restaut)
            <span class="opacity-80">until 11:30 PM</span>
        @endif
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 px-4 mt-8">
        <!-- Left Column: Information -->
        <div class="lg:col-span-2 space-y-10">
        <!-- Description Section -->
        <section>
        <h2 class="text-2xl font-bold mb-4">About the Experience</h2>
        <p class="text-lg leading-relaxed text-[#0d1b0d]/80 dark:text-white/80">
                                Experience the heart of Paris through a menu that bridges tradition and avant-garde culinary techniques. L'Essence de Paris offers an intimate atmosphere with botanical accents and floor-to-ceiling windows overlooking the city of lights. Our Chef, Julian Marc, focuses on seasonal, locally-sourced ingredients to create an ever-evolving menu that surprises even the most frequent diners.
                            </p>
        </section>
        <!-- Photo Gallery -->
        <section>
        <h2 class="text-2xl font-bold mb-4">Gallery</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 h-64">
        <div class="bg-cover bg-center rounded-lg h-full" data-alt="Close up of a fancy cocktail" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDPH9yAhslKttF0q0YkjdDjDmIR3ez_xj4Dwwe5EsjGMIR-fe_nNsUntjhC4V2Prr_zzo91ayxc-C7Iun5kWozSsH1OFDrG8EHdEjFlNrW3PEzF36_ksPjso4z-nP30ohn1T98PwLEd3n5oCIbIqTch0LfxWMg4oOf2cHDgDMcomsPaEETxXuppkTp-wi5WQDo2W7uH63eKEEIX5v6tQ1eGPSJsF8wiuCHRaFBH75kgUiGcvHxUrwzM5CBx5UIFOHcH5dr_hYZiXyYV");'></div>
        <div class="bg-cover bg-center rounded-lg h-full" data-alt="Modern table setting" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAGVAB-nb2GCRcK1MDDrbNVMzFUChg9YyJXAO4D6pM794-AvvQ9Zc-kAJHnUmdMc1-0E5iVb46LBvDnKAJg_MiwCUbsAVnHRZxs7v8Mm1DnpcVK9jWjv-WYb7Wx8_1JvBr-WcDjHegtOjrVWQ-vd673Kfm92_1A7ajrh3oIqe3hn83shux3L7PBUxDVnpoLQ8V3WmFoyUa7g0tmoYXdqTanAwSsTpPtQAPtEhXkXsX9k0Q0QSJmwITYXm1jUsbXvdwpHiSTK3XKInTa");'></div>
        <div class="bg-cover bg-center rounded-lg h-full col-span-2" data-alt="Busy kitchen chefs" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCVizOYRK8FOG4bdNOUiOTF84tHT960U3RDbRLz_7KCimPc8uKzLEXIZNwFsHV_Q5xWR1_S-bwFJKrAtlZQk6Gu-YP5cNMA3FLYozvX9sT8IUGvLomiY9SKTgnXLKqTBxu7jiGHXFo6WAmWjJeLfDstnoswSahJ3OtmcBzNJlpAV3fmoDLFan6VNWPofgxGZ4vQy7qzUUaIJFQbA73QxXMP4GYxoQ9c1h53rNX8W1ZRR-RmDFPeWyj42isudT1lq0EYMK_oB_pHVeST");'></div>
        </div>
        </section>
        <!-- Reviews -->
        <section>
        <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold">Reviews</h2>
        <button class="bg-[#e7f3e7] dark:bg-[#1a331a] text-[#0d1b0d] dark:text-white px-4 py-2 rounded-lg text-sm font-bold">Write a Review</button>
        </div>
        <div class="space-y-4">
        <div class="p-6 bg-white dark:bg-[#1a331a] rounded-xl border border-[#e7f3e7] dark:border-white/5">
        <div class="flex items-center gap-4 mb-4">
        <div class="size-10 rounded-full bg-cover bg-center" data-alt="Reviewer profile" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDYT905pU5k3zolRaB8IVrz6pBhU9L9asu6JgLxdOck_pbygiSPl08oBr5f9oM4mcFTUM0uqZNvDrR8Ha66B4dtD0VxXPkMvCvCB9ahYbMZXmG-SBEiFfuNEPyG60F1XCc30WSS5-Kd5scTYfnv5qTbO8JesSMTCEjvUjj8p28Epktb5W1RcHKvg_akr-HlxyVhm8R0pW74xI8tB9MEymkvRKDM4OECL6ZDu-qjFZMnlCjGn2t1Es6d2-0bNnHqQlTRzSujr7WHacUC");'></div>
        <div>
        <h4 class="font-bold">Sophie Martin</h4>
        <div class="flex text-primary text-sm">
        <span class="material-symbols-outlined text-base fill-1">star</span>
        <span class="material-symbols-outlined text-base fill-1">star</span>
        <span class="material-symbols-outlined text-base fill-1">star</span>
        <span class="material-symbols-outlined text-base fill-1">star</span>
        <span class="material-symbols-outlined text-base fill-1">star</span>
        </div>
        </div>
        <span class="ml-auto text-xs opacity-50">2 days ago</span>
        </div>
        <p class="text-sm opacity-80">Absolutely incredible. The risotto was the best I've ever had. The atmosphere is peaceful and the staff is very attentive. Perfect for a birthday dinner!</p>
        </div>
        </div>
        </section>
        </div>
        <!-- Right Column: Booking Widget & Info -->
        <!-- <aside class="space-y-6"> -->
            <!-- Hours & Location Details -->
            <!-- <div class="bg-white dark:bg-[#1a331a] p-6 rounded-2xl border border-[#e7f3e7] dark:border-white/5 space-y-6">
            <div>
                <h4 class="font-bold mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">schedule</span>
                    Opening Hours
                </h4>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between items-center text-primary font-bold">
                    <span>Monday - Friday</span>
                    <span>12:00 - 23:30</span>
                    </div>
                    <div class="flex justify-between items-center opacity-70">
                    <span>Saturday</span>
                    <span>12:00 - 00:00</span>
                    </div>
                    <div class="flex justify-between items-center opacity-70">
                    <span>Sunday</span>
                    <span>Closed</span>
                    </div>
                </div>
            </div>
            <div class="pt-6 border-t border-[#e7f3e7] dark:border-white/5">
                <h4 class="font-bold mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">map</span>
                    Location
                </h4>
                <div class="rounded-lg h-32 w-full bg-[#e7f3e7] dark:bg-white/5 relative overflow-hidden group cursor-pointer" data-location="Paris" style="">
                    <div class="absolute inset-0 bg-cover bg-center grayscale group-hover:grayscale-0 transition-all" data-alt="Simplified map view of Paris" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB8WqHGaaYG2heeOD6fuaGbBShDJZd0ELBmAfyurtoo5WfertCurOJy4Xai5_ftrZMrzJKwEnMLgI3H3EJAQApjdnXVtKkUVA6mkRXA_JApu9ZoL7aJQ0yUJn0E8LS4KQWTEw5-0bV3Y0TUPS0V7EjpLYUyCJXoQ4hYwmv8CsgMoYDmt2lAn3Bzn3LradFyn3xri3vUe67OSt3AdmCeM8m3hVDUF969BC2bRJt9U9MmHbAp7rJnZ1yrZQdJwQcjXYn-3aZ1Lr3lDmUc');"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="size-8 bg-primary rounded-full flex items-center justify-center shadow-lg border-2 border-white">
                                <span class="material-symbols-outlined text-white text-base">location_on</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-xs mt-3 opacity-70">75008 Paris, France. Public parking available at George V.</p>
                </div>
            </div> -->
        <!-- </aside> -->
         <!--  sticky top-24 -->
         <aside class="space-y-6">
            @auth
            <!-- Sticky Booking Card -->
            <div class="bg-white dark:bg-[#1a331a] p-6 rounded-2xl shadow-2xl border border-primary/20">
                <h3 class="text-xl font-bold mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">event_available</span>
                    Book a Table
                </h3>
                <form action="{{ Route('reservation.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" name="restaut_id" value="{{ $restaut->id_restaut }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="status_reservation" value="pending">
                    <div>
                        <label class="text-xs font-bold uppercase tracking-wider opacity-60 block mb-1">Date</label>
                        <div class="relative">
                            <input name="date_reservation" class="w-full bg-[#f6f8f6] dark:bg-[#102210] border-none rounded-lg text-sm p-3 focus:ring-2 focus:ring-primary" type="date"/>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="text-xs font-bold uppercase tracking-wider opacity-60 block mb-1">Guests</label>
                            <input name="number_personnes_reservation" type="number" min="1" value="1" class="w-full bg-[#f6f8f6] dark:bg-[#102210] border-none rounded-lg text-sm p-3 focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label class="text-xs font-bold uppercase tracking-wider opacity-60 block mb-1">Time</label>
                            <select name="creneau_id" class="w-full bg-[#f6f8f6] dark:bg-[#102210] border-none rounded-lg text-sm p-3 focus:ring-2 focus:ring-primary">
                            @foreach($restaut->horaires as $horaire)
                                <option value="{{ $horaire->pivot->id_creneau }}">{{ $horaire->pivot->heure_debut->format('H:i') }} - {{ $horaire->pivot->heure_fin->format('H:i') }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="pt-2">
                        <!-- <p class="text-[10px] text-center mb-2 opacity-60">High demand for this time slot</p> -->
                        <button type="submit" class="w-full bg-primary text-[#0d1b0d] font-bold py-4 rounded-xl shadow-lg shadow-primary/20 hover:scale-[1.02] transition-transform">
                            Confirm Reservation
                        </button>
                    </div>
                    
                </form>
            </div>
            @endauth
            <!-- Menu -->
            <div class="bg-white dark:bg-[#1a331a] p-6 rounded-2xl shadow-xl border border-primary/20">
                <h3 class="text-xl font-bold mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">menu_book</span>
                    {{ __('Restaurant Menu') }}
                </h3>

                <div class="space-y-4">
                    @foreach($restaut->plats as $plat)
                        <div class="flex items-center gap-3 p-2">
                            <div class="size-12 rounded-lg bg-cover bg-center shrink-0 border border-primary/10" 
                                style='background-image: url("{{ $plat->image->path_image }}");'>
                            </div>
                            <div class="overflow-hidden">
                                <p class="font-bold text-sm truncate">{{ $plat->nom_plat }}</p>
                                <p class="text-primary text-xs font-bold">{{ $plat->pivot->prix_plat }} DH</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </aside>
        </div>
        </main>
        <!-- Simple Footer -->
        <footer class="bg-white dark:bg-[#1a331a] border-t border-[#e7f3e7] dark:border-white/5 py-10 mt-10">
        <div class="max-w-[1200px] mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="flex items-center gap-2">
        <div class="size-6 text-primary">
        <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
        <path d="M24 45.8096C19.6865 45.8096 15.4698 44.5305 11.8832 42.134C8.29667 39.7376 5.50128 36.3314 3.85056 32.3462C2.19985 28.361 1.76794 23.9758 2.60947 19.7452C3.451 15.5145 5.52816 11.6284 8.57829 8.5783C11.6284 5.52817 15.5145 3.45101 19.7452 2.60948C23.9758 1.76795 28.361 2.19986 32.3462 3.85057C36.3314 5.50129 39.7376 8.29668 42.134 11.8833C44.5305 15.4698 45.8096 19.6865 45.8096 24L24 24L24 45.8096Z" fill="currentColor"></path>
        </svg>
        </div>
        <span class="font-bold text-[#0d1b0d] dark:text-white">YouCo'Done</span>
        </div>
        <div class="flex gap-8 text-sm opacity-60">
        <a class="hover:text-primary" href="#">Privacy Policy</a>
        <a class="hover:text-primary" href="#">Terms of Service</a>
        <a class="hover:text-primary" href="#">Contact Us</a>
        </div>
        <p class="text-xs opacity-40">© 2023 YouCo'Done. All rights reserved.</p>
        </div>
        </footer>
    </body>
</html>