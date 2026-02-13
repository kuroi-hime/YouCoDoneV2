<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ config('app.name', 'YouCoDone') }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#20df20",
                        "primary-dark": "#1bc41b",
                        "background-light": "#f6f8f6",
                        "background-dark": "#112111",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a2e1a",
                        "border-light": "#e2e8f0",
                        "border-dark": "#2a422a",
                    },
                    fontFamily: {
                        "display": ["Work Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Work Sans', sans-serif; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .dark ::-webkit-scrollbar-thumb { background: #2a422a; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-100 min-h-screen flex flex-col font-display transition-colors duration-300">

<header class="sticky top-0 z-50 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-[#e7f3e7] dark:border-[#1d351d]">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-10 h-16 flex items-center justify-between">
        <div class="flex items-center gap-4">
            <span class="material-symbols-outlined text-4xl text-primary">restaurant</span>
            <h2 class="text-xl font-bold tracking-tight">YouCo'Done</h2>
        </div>
        <div class="hidden md:flex items-center gap-8">
            <nav class="flex items-center gap-6">
                <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('home') }}">Explore</a>
                <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Favorites</a>
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
                    <span class="text-sm font-medium">{{ auth()->user()->name }}</span>
                    <a href="{{ route('profile.edit') }}" class="w-10 h-10 rounded-full border-2 border-primary bg-cover bg-center" style='background-image: url("https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}");'></a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-xs text-red-500 ml-2">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</header>

<div class="flex-1 flex flex-col lg:flex-row max-w-7xl mx-auto w-full p-6 lg:p-8 gap-8">
    <main class="flex-1 min-w-0">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-2">Add New Restaurant</h1>
            <p class="text-slate-500 dark:text-slate-400">Fill in the details below to publish your establishment on YouCo'Done.</p>
        </div>

        <form action="{{ route('restaut.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-8">
            @csrf
            
            <section class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl shadow-sm border border-border-light dark:border-border-dark">
                <div class="flex items-center gap-3 mb-6 border-b border-border-light dark:border-border-dark pb-4">
                    <span class="material-icons text-primary">storefront</span>
                    <h2 class="text-xl font-semibold">General Information</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @if(isset($restaurant))
                    <input type="hidden" name="id_restaut" value="{{ $restaurant->id_restaut }}">
                    @endif
                    <div>
                        <label class="block text-sm font-medium mb-1">Restaurant Name</label>
                        <input name="nom_restaut" class="w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-background-dark py-2.5" placeholder="e.g. The Golden Bistro" type="text" value="{{ $restaurant ? $restaurant->nom_restaut:'' }}" required/>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Cuisine Type</label>
                        <input name="type_cuisine" class="w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-background-dark py-2.5" placeholder="e.g. Italian, Japanese, etc." type="text" value="{{ $restaurant ? $restaurant->type_cuisine:'' }}" required/>
                    </div>
                    <div class="col-span-2">
                        <label class="block text-sm font-medium mb-1">Full Address</label>
                        <input name="localisation" class="w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-background-dark py-2.5" placeholder="123 Street, City, Country" type="text" value="{{ $restaurant ? $restaurant->localisation:'' }}" required/>
                    </div>
                </div>
            </section>

            <section x-data="{ dishes: [{name: '', price: '', description: ''}] }" class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl shadow-sm border border-border-light dark:border-border-dark">
                <div class="flex items-center justify-between mb-6 border-b border-border-light dark:border-border-dark pb-4">
                    <div class="flex items-center gap-3">
                        <span class="material-icons text-primary">menu_book</span>
                        <h2 class="text-xl font-semibold">Restaurant Menu (Dishes)</h2>
                    </div>
                    <button @click="dishes.push({name: '', price: '', description: ''})" type="button" class="flex items-center gap-2 text-sm font-bold text-primary hover:text-primary-dark">
                        <span class="material-icons text-sm">add_circle</span> Add Dish
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-slate-500 text-sm border-b border-border-light dark:border-border-dark">
                                <th class="pb-3 font-medium">Dish Name</th>
                                <th class="pb-3 font-medium w-32">Price (DH)</th>
                                <th class="pb-3 font-medium">Description</th>
                                <th class="pb-3 w-10"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border-light dark:divide-border-dark">
                            <template x-for="(dish, index) in dishes" :key="index">
                                <tr>
                                    <td class="py-4 pr-4">
                                        <input :name="'dishes['+index+'][name]'" type="text" class="w-full bg-transparent border-none focus:ring-0 text-sm p-0" placeholder="e.g. Margherita Pizza" required>
                                    </td>
                                    <td class="py-4 pr-4">
                                        <input :name="'dishes['+index+'][price]'" type="number" class="w-full bg-transparent border-none focus:ring-0 text-sm p-0" placeholder="0.00" required>
                                    </td>
                                    <td class="py-4 pr-4">
                                        <input :name="'dishes['+index+'][description]'" type="text" class="w-full bg-transparent border-none focus:ring-0 text-sm p-0" placeholder="Ingredients...">
                                    </td>
                                    <td class="py-4 text-right">
                                        <button @click="dishes.splice(index, 1)" type="button" class="text-slate-400 hover:text-red-500" x-show="dishes.length > 1">
                                            <span class="material-icons text-sm">delete</span>
                                        </button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </section>
            <!-- horaires et fermetures -->
            <!-- <section class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl shadow-sm border border-border-light dark:border-border-dark">
    <div class="flex items-center gap-3 mb-6 border-b border-border-light dark:border-border-dark pb-4">
        <span class="material-icons text-primary">schedule</span>
        <h2 class="text-xl font-semibold">Horaires d'ouverture</h2>
    </div>
    
    <div class="space-y-4">
        <div class="hidden md:grid grid-cols-12 gap-4 px-2 text-xs font-bold uppercase text-slate-500">
            <div class="col-span-2">Jour</div>
            <div class="col-span-4 text-center">Premier Service</div>
            <div class="col-span-4 text-center">Deuxième Service</div>
            <div class="col-span-2 text-right">Statut</div>
        </div>

        @php
            $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
        @endphp

        @foreach($jours as $jour)
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center border-b border-slate-100 dark:border-slate-800 pb-4 last:border-0">
            <div class="md:col-span-2">
                <span class="font-medium">{{ $jour }}</span>
            </div>
            
            <div class="md:col-span-4 flex items-center justify-center gap-2 bg-slate-50 dark:bg-background-dark/50 p-2 rounded-lg">
                <input name="horaires[{{ $jour }}][1_start]" type="time" class="bg-transparent border-none focus:ring-0 text-sm p-0 w-16">
                <span class="text-slate-400">-</span>
                <input name="horaires[{{ $jour }}][1_end]" type="time" class="bg-transparent border-none focus:ring-0 text-sm p-0 w-16">
            </div>
            
            <div class="md:col-span-4 flex items-center justify-center gap-2 bg-slate-50 dark:bg-background-dark/50 p-2 rounded-lg">
                <input name="horaires[{{ $jour }}][2_start]" type="time" class="bg-transparent border-none focus:ring-0 text-sm p-0 w-16">
                <span class="text-slate-400">-</span>
                <input name="horaires[{{ $jour }}][2_end]" type="time" class="bg-transparent border-none focus:ring-0 text-sm p-0 w-16">
            </div>

            <div class="md:col-span-2 flex items-center justify-end gap-2">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="horaires[{{ $jour }}][is_closed]" value="1" class="rounded border-slate-300 text-red-500 focus:ring-red-500">
                    <span class="ml-2 text-xs font-medium text-slate-500 uppercase">Fermé</span>
                </label>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl shadow-sm border border-border-light dark:border-border-dark">
    <div class="flex items-center gap-3 mb-6 border-b border-border-light dark:border-border-dark pb-4">
        <span class="material-icons text-primary">event_busy</span>
        <h2 class="text-xl font-semibold">Fermeture Exceptionnelle</h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
            <label class="block text-sm font-medium mb-1 text-slate-600 dark:text-slate-400">Date de début</label>
            <input name="fermeture_debut" type="date" class="w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-background-dark py-2.5 focus:ring-primary focus:border-primary">
        </div>
        <div>
            <label class="block text-sm font-medium mb-1 text-slate-600 dark:text-slate-400">Date de fin</label>
            <input name="fermeture_fin" type="date" class="w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-background-dark py-2.5 focus:ring-primary focus:border-primary">
        </div>
        <div>
            <label class="block text-sm font-medium mb-1 text-slate-600 dark:text-slate-400">Motif de fermeture</label>
            <input name="fermeture_motif" type="text" placeholder="ex: Congés annuels, Travaux..." class="w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-background-dark py-2.5 focus:ring-primary focus:border-primary">
        </div>
    </div>
</section> -->
<section class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl shadow-sm border border-border-light dark:border-border-dark">
    <div class="flex items-center justify-between mb-6 border-b border-border-light dark:border-border-dark pb-4">
        <div class="flex items-center gap-3">
            <span class="material-icons text-primary">schedule</span>
            <h2 class="text-xl font-semibold">Horaires d'ouverture</h2>
        </div>
        <button type="button" onclick="addGlobalSlot()" class="flex items-center gap-2 text-sm font-bold text-primary hover:text-primary-dark">
            <span class="material-icons text-sm">add_circle</span> Ajouter un créneau global
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse" id="schedule-table">
            <thead>
                <tr class="text-slate-500 text-[10px] uppercase tracking-wider border-b border-border-light dark:border-border-dark">
                    <th class="pb-3 font-bold w-32">Jour</th>
                    <th class="pb-3 font-bold text-center" id="slots-header-container">
                        <div class="flex justify-center gap-4" id="header-slots">
                            <span class="w-32 text-center">Créneau 1</span>
                        </div>
                    </th>
                    <th class="pb-3 font-bold text-right w-24">Statut</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-border-light dark:divide-border-dark">
                @php $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']; @endphp
                @foreach($jours as $jour)
                <tr data-day="{{ $jour }}">
                    <td class="py-4 font-medium text-sm">{{ $jour }}</td>
                    <td class="py-4 px-2">
                        <div class="flex flex-wrap justify-center gap-2 slot-container">
                            <div class="flex items-center gap-1 bg-slate-50 dark:bg-background-dark/50 p-2 rounded-lg border border-transparent">
                                <input name="horaires[{{ $jour }}][slots][0][start]" type="time" class="bg-transparent border-none focus:ring-0 text-xs p-0 w-14 dark:text-white">
                                <span class="text-slate-400">-</span>
                                <input name="horaires[{{ $jour }}][slots][0][end]" type="time" class="bg-transparent border-none focus:ring-0 text-xs p-0 w-14 dark:text-white">
                            </div>
                        </div>
                    </td>
                    <td class="py-4 text-right">
                        <label class="inline-flex items-center cursor-pointer group">
                            <input type="checkbox" name="horaires[{{ $jour }}][is_closed]" value="1" class="rounded border-slate-300 text-red-500 focus:ring-red-500">
                            <span class="ml-2 text-[10px] font-bold text-slate-400 group-hover:text-red-500 uppercase">Fermé</span>
                        </label>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

<section class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl shadow-sm border border-border-light dark:border-border-dark mt-8">
    <div class="flex items-center justify-between gap-3 mb-6 border-b border-border-light dark:border-border-dark pb-4">
        <div class="flex items-center gap-3">  
            <span class="material-icons text-primary">event_busy</span>
            <h2 class="text-xl font-semibold">Fermeture Exceptionnelle</h2>
        </div>
        <button type="button" onclick="addFermeture()" class="flex items-center gap-2 text-sm font-bold text-primary hover:text-primary-dark">
            <span class="material-icons text-sm">add_circle</span> Ajouter une fermeture
        </button>
    </div>
    <div class="flex flex-col" id="fermetures-containner"></div>
</section>

<script>
    let fermetureCount = 0; 
    function addFermeture() { 
        const container = document.getElementById('fermetures-containner'); 
        const div = document.createElement('div'); 
        div.className = "grid grid-cols-1 md:grid-cols-4 gap-6"; 
        div.innerHTML = `<div>
                            <label class="block text-sm font-medium mb-1 text-slate-600 dark:text-slate-400">Date de début</label>
                            <input name="fermetures[${fermetureCount}][debut]" type="date" class="w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-background-dark py-2.5 focus:ring-primary focus:border-primary mb-3">
                         </div>
                         <div>
                            <label class="block text-sm font-medium mb-1 text-slate-600 dark:text-slate-400">Date de fin</label>
                            <input name="fermetures[${fermetureCount}][fin]" type="date" class="w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-background-dark py-2.5 focus:ring-primary focus:border-primary mb-3">
                         </div>
                         <div>
                            <label class="block text-sm font-medium mb-1 text-slate-600 dark:text-slate-400">Motif de fermeture</label>
                            <input name="fermetures[${fermetureCount}][motif]" type="text" placeholder="ex: Congés annuels, Travaux..." class="w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-background-dark py-2.5 focus:ring-primary focus:border-primary">
                         </div>
                         `;
        container.appendChild(div); 
        setTimeout(() => div.classList.remove('animate-pulse'), 500); 
        fermetureCount++; 
    }

    let slotCount = 1;

    function addGlobalSlot() {
        const rows = document.querySelectorAll('#schedule-table tbody tr');
        const headerSlots = document.getElementById('header-slots');
        
        // Ajouter l'en-tête
        const newHeader = document.createElement('span');
        newHeader.className = "w-32 text-center";
        newHeader.innerText = `Créneau ${slotCount + 1}`;
        headerSlots.appendChild(newHeader);

        // Ajouter l'input pour chaque jour
        rows.forEach(row => {
            const day = row.getAttribute('data-day');
            const container = row.querySelector('.slot-container');
            
            const div = document.createElement('div');
            div.className = "flex items-center gap-1 bg-slate-50 dark:bg-background-dark/50 p-2 rounded-lg border border-transparent animate-pulse";
            div.innerHTML = `
                <input name="horaires[${day}][slots][${slotCount}][start]" type="time" class="bg-transparent border-none focus:ring-0 text-xs p-0 w-14 dark:text-white">
                <span class="text-slate-400">-</span>
                <input name="horaires[${day}][slots][${slotCount}][end]" type="time" class="bg-transparent border-none focus:ring-0 text-xs p-0 w-14 dark:text-white">
            `;
            container.appendChild(div);
            setTimeout(() => div.classList.remove('animate-pulse'), 500);
        });

        slotCount++;
    }
</script>

            <!-- gallery -->
            <section class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl shadow-sm border border-border-light dark:border-border-dark">
                <div class="flex items-center gap-3 mb-6 border-b border-border-light dark:border-border-dark pb-4">
                    <span class="material-icons text-primary">collections</span>
                    <h2 class="text-xl font-semibold">Restaurant Photos</h2>
                </div>
                <div class="border-2 border-dashed border-slate-300 dark:border-slate-600 rounded-xl p-8 flex flex-col items-center justify-center bg-slate-50 dark:bg-slate-800/50 hover:bg-slate-100 transition-colors cursor-pointer group h-48">
                    <input type="file" name="images[]" multiple class="hidden" id="file-upload">
                    <label for="file-upload" class="flex flex-col items-center cursor-pointer">
                        <span class="material-icons text-primary text-4xl mb-2">add_a_photo</span>
                        <p class="text-sm font-medium">Click to upload restaurant images</p>
                        <p class="text-xs text-slate-500 mt-1">JPG, PNG, Max 5MB per file</p>
                    </label>
                </div>
            </section>

            <div class="sticky bottom-0 mt-8 bg-surface-light/95 dark:bg-surface-dark/95 border-t border-border-light dark:border-border-dark p-4 -mx-8 px-8 flex items-center justify-between z-40 backdrop-blur-md">
                <div class="flex items-center text-sm text-slate-500">
                    <span class="material-icons text-[16px] mr-1 text-primary">info</span>
                    Draft saved automatically
                </div>
                <div class="flex gap-4">
                    <button type="button" class="px-6 py-2.5 rounded-lg border border-slate-300 font-medium hover:bg-slate-50 transition-colors">Cancel</button>
                    <button type="submit" class="px-6 py-2.5 rounded-lg bg-primary hover:bg-primary-dark text-[#0d1b0d] font-bold shadow-lg shadow-primary/30 transition-all">Publish Restaurant</button>
                </div>
            </div>
        </form>
    </main>
</div>
</body>
</html>