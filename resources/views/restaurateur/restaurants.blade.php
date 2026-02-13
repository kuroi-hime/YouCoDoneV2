<!DOCTYPE html>

<html class="light" lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>{{ config('app.name', 'YouCoDone') }}</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
                font-family: 'Work Sans', sans-serif;
            }
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }
        </style>
    </head>
    <body class="bg-background-light dark:bg-background-dark min-h-screen text-[#0d1b0d] dark:text-[#f8fcf8]">
        <div class="layout-container flex h-full grow flex-col">
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
                                <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('myReservations', auth()->user()->id) }}">My Reservations</a>
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
                
            <main class="flex flex-1 justify-center py-10 px-4 md:px-10 lg:px-40">
                <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
                    <!-- Page Heading -->
                    <div class="flex flex-wrap items-center justify-between gap-6 mb-8">
                        <div class="flex min-w-72 flex-col gap-2">
                            <h1 class="text-[#0d1b0d] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Mes Restaurants</h1>
                            <p class="text-[#4c9a4c] dark:text-[#8bc38b] text-base font-normal leading-normal">Gérez vos établissements et suivez leurs performances en un coup d'œil.</p>
                        </div>
                        <a href="{{ route('restaut.add') }}" class="flex min-w-[180px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-xl h-12 px-6 bg-primary text-[#0d1b0d] text-base font-bold leading-normal tracking-[0.015em] shadow-lg shadow-primary/20 hover:scale-[1.02] transition-transform">
                        <span class="material-symbols-outlined">add_circle</span>
                        <span class="truncate">Ajouter un restaurant</span>
                        </a>
                    </div>
                    <!-- Search Bar -->
                    <div class="mb-8 w-full">
                        <label class="flex flex-col min-w-40 h-14 w-full max-w-2xl">
                            <div class="flex w-full flex-1 items-stretch rounded-xl h-full shadow-sm">
                                <div class="text-[#4c9a4c] flex border-none bg-white dark:bg-[#1a331a] items-center justify-center pl-4 rounded-l-xl border-r-0">
                                <span class="material-symbols-outlined">search</span>
                                </div>
                                <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-r-xl text-[#0d1b0d] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border-none bg-white dark:bg-[#1a331a] h-full placeholder:text-[#4c9a4c]/60 px-4 pl-2 text-base font-normal leading-normal" placeholder="Rechercher un restaurant par nom ou ville..." value=""/>
                            </div>
                        </label>
                    </div>
                    @if($restaurants->isEmpty()) 
                    <div class="flex flex-col items-center gap-4 py-20"> 
                        <span class="material-symbols-outlined text-6xl text-[#4c9a4c] dark:text-[#8bc38b]">restaurant_menu</span> 
                        <h2 class="text-[#0d1b0d] dark:text-white text-2xl font-bold">Aucun restaurant trouvé</h2> 
                        <p class="text-[#4c9a4c] dark:text-[#8bc38b] text-base font-normal">Vous n'avez pas encore ajouté de restaurant. Cliquez sur "Ajouter un restaurant" pour commencer à gérer vos établissements.</p> 
                    </div>
                    @else
                    <!-- Restaurants Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($restaurants as $restaurant)
                        <!-- Restaurant Card -->
                        <div class="flex flex-col bg-white dark:bg-[#0d1b0d] rounded-xl overflow-hidden border border-[#e7f3e7] dark:border-[#1a331a] shadow-sm hover:shadow-md transition-shadow group">
                        <div class="relative w-full aspect-video bg-cover bg-center" data-alt="Charming French bistro exterior" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCOYfeAQ1nnKfrJWQkwRWFZmN23h6Alvq6ABhjYhcR6Y1uzkZ6puDEIBAamzq4n_89pCu815PyfWkXv-4MSYmiJkOBWG9YRyaprvLDxKJUcOgy7-CyBtsVzni2XuxBiBTHco2ZiGtHC4ruXi4Pt__IQtatl6nlkc2ytrTFpaRXpAanlTg8N1vcWK5kKi2bCAsQbh5YB7GSfCq09az1A6Ql3N90JT9tuXRKe2sH8aawZT_UUwuHFMgTmUgEHasgTudOV3sZDtg4pmp-r");'>
                            <div class="absolute top-3 right-3 bg-primary text-[#0d1b0d] px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">{{ $restaurant->disponibilite_restaut == 0?'Closed':'Opened' }}</div>
                            </div>
                        <div class="p-5 flex flex-col gap-1">
                            <h3 class="text-[#0d1b0d] dark:text-white text-xl font-bold leading-tight">{{ $restaurant->nom_restaut }}</h3>
                            <div class="flex items-center gap-1 text-[#4c9a4c] dark:text-[#8bc38b] text-sm mb-2">
                                <span class="material-symbols-outlined text-sm">location_on</span>
                                <span>{{ $restaurant->localisation }}</span>
                            </div>
                            <div class="bg-[#f8fcf8] dark:bg-[#1a331a] p-3 rounded-lg flex items-center gap-3 mb-4">
                                <span class="material-symbols-outlined text-primary">calendar_today</span>
                                <p class="text-[#0d1b0d] dark:text-white text-sm font-medium">15 réservations aujourd'hui</p>
                            </div>
                            <!-- Actions Bar -->
                            <div class="flex items-center justify-between border-t border-[#e7f3e7] dark:border-[#1a331a] pt-4 mt-2">
                                <!-- [#4c9a4c] -->
                                <a href="{{ route('restaurant.edit', $restaurant->id_restaut) }}" class="flex items-center gap-1 p-2.5 rounded-s text-yellow-500 hover:bg-yellow-100 transition-colors">
                                    <span class="material-symbols-outlined">edit</span>
                                    <span class="text-xs font-semibold">Edit</span>
                                </a>
                                <a href="{{ route('restaurant.delete', $restaurant->id_restaut) }}" class="flex items-center hover:bg-red-100 p-2.5 rounded-s gap-1 text-red-500 transition-colors">
                                    <span class="material-symbols-outlined">delete</span>
                                    <span class="text-xs font-semibold">Delete</span>
                                </a>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </main>
            <footer class="py-10 text-center border-t border-[#e7f3e7] dark:border-[#1a331a] text-[#4c9a4c] text-sm">
            <p>© {{ Date('Y') }} YouCo'Done. Tous droits réservés.</p>
            </footer>
        </div>
    </body>
</html>