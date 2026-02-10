<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>YouCo'Done - Mes Restaurants</title>
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
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#e7f3e7] dark:border-[#1a331a] bg-white dark:bg-[#0d1b0d] px-10 py-3 sticky top-0 z-50">
<div class="flex items-center gap-8">
<div class="flex items-center gap-4 text-[#0d1b0d] dark:text-primary">
<div class="size-6">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M24 45.8096C19.6865 45.8096 15.4698 44.5305 11.8832 42.134C8.29667 39.7376 5.50128 36.3314 3.85056 32.3462C2.19985 28.361 1.76794 23.9758 2.60947 19.7452C3.451 15.5145 5.52816 11.6284 8.57829 8.5783C11.6284 5.52817 15.5145 3.45101 19.7452 2.60948C23.9758 1.76795 28.361 2.19986 32.3462 3.85057C36.3314 5.50129 39.7376 8.29668 42.134 11.8833C44.5305 15.4698 45.8096 19.6865 45.8096 24L24 24L24 45.8096Z" fill="currentColor"></path>
</svg>
</div>
<h2 class="text-[#0d1b0d] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">YouCo'Done</h2>
</div>
</div>
<div class="flex flex-1 justify-end gap-8 items-center">
<nav class="hidden md:flex items-center gap-9">
<a class="text-[#0d1b0d] dark:text-white text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Dashboard</a>
<a class="text-primary text-sm font-bold leading-normal border-b-2 border-primary" href="#">Mes Restaurants</a>
<a class="text-[#0d1b0d] dark:text-white text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Réservations</a>
<a class="text-[#0d1b0d] dark:text-white text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Clients</a>
</nav>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-[#0d1b0d] text-sm font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity">
<span class="truncate">Mon Compte</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary" data-alt="User profile avatar placeholder" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDXt-6ndYLhL0TCeiRDwcx6lRcF-XWprmIwjtwRDbKoFs2fbHTX-HemIzRNwHvZw2FZMwkIaD1so87Y9U5C8H0lx2obqcDXaAMssU025Y0DmlmaP9BjJ6dJzYXGT_D1obbICkq_TlJgcnj8AyFxRVfVYef8LEY-Vdejbynru7qpRyCnl3TKOxKdfD-LA0zcymHRTGY3GcX6XkM_5sfmXLNEbMn7etm-5so0x8vE__BUaRz0r1qiof3JLzGzBn6tB0o1AJ7H37XKPj4f");'></div>
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
<button class="flex min-w-[180px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-xl h-12 px-6 bg-primary text-[#0d1b0d] text-base font-bold leading-normal tracking-[0.015em] shadow-lg shadow-primary/20 hover:scale-[1.02] transition-transform">
<span class="material-symbols-outlined">add_circle</span>
<span class="truncate">Ajouter un restaurant</span>
</button>
</div>
<!-- Search Bar -->
<div class="mb-8">
<label class="flex flex-col min-w-40 h-14 w-full max-w-2xl">
<div class="flex w-full flex-1 items-stretch rounded-xl h-full shadow-sm">
<div class="text-[#4c9a4c] flex border-none bg-white dark:bg-[#1a331a] items-center justify-center pl-4 rounded-l-xl border-r-0">
<span class="material-symbols-outlined">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-r-xl text-[#0d1b0d] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border-none bg-white dark:bg-[#1a331a] h-full placeholder:text-[#4c9a4c]/60 px-4 pl-2 text-base font-normal leading-normal" placeholder="Rechercher un restaurant par nom ou ville..." value=""/>
</div>
</label>
</div>
<!-- Restaurants Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Restaurant Card 1 -->
<div class="flex flex-col bg-white dark:bg-[#0d1b0d] rounded-xl overflow-hidden border border-[#e7f3e7] dark:border-[#1a331a] shadow-sm hover:shadow-md transition-shadow group">
<div class="relative w-full aspect-video bg-cover bg-center" data-alt="Charming French bistro exterior" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCOYfeAQ1nnKfrJWQkwRWFZmN23h6Alvq6ABhjYhcR6Y1uzkZ6puDEIBAamzq4n_89pCu815PyfWkXv-4MSYmiJkOBWG9YRyaprvLDxKJUcOgy7-CyBtsVzni2XuxBiBTHco2ZiGtHC4ruXi4Pt__IQtatl6nlkc2ytrTFpaRXpAanlTg8N1vcWK5kKi2bCAsQbh5YB7GSfCq09az1A6Ql3N90JT9tuXRKe2sH8aawZT_UUwuHFMgTmUgEHasgTudOV3sZDtg4pmp-r");'>
<div class="absolute top-3 right-3 bg-primary text-[#0d1b0d] px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Actif</div>
</div>
<div class="p-5 flex flex-col gap-1">
<h3 class="text-[#0d1b0d] dark:text-white text-xl font-bold leading-tight">Le Petit Bistro</h3>
<div class="flex items-center gap-1 text-[#4c9a4c] dark:text-[#8bc38b] text-sm mb-2">
<span class="material-symbols-outlined text-sm">location_on</span>
<span>12 Rue de Paris, Lyon</span>
</div>
<div class="bg-[#f8fcf8] dark:bg-[#1a331a] p-3 rounded-lg flex items-center gap-3 mb-4">
<span class="material-symbols-outlined text-primary">calendar_today</span>
<p class="text-[#0d1b0d] dark:text-white text-sm font-medium">15 réservations aujourd'hui</p>
</div>
<!-- Actions Bar -->
<div class="flex items-center justify-between border-t border-[#e7f3e7] dark:border-[#1a331a] pt-4 mt-2">
<button class="flex flex-col items-center gap-1 group/btn text-[#4c9a4c] hover:text-primary transition-colors">
<div class="rounded-full bg-[#f0f9f0] dark:bg-[#1a331a] p-2.5 group-hover/btn:bg-primary/20 transition-colors">
<span class="material-symbols-outlined">edit</span>
</div>
<span class="text-xs font-semibold">Modifier</span>
</button>
<button class="flex flex-col items-center gap-1 group/btn text-[#4c9a4c] hover:text-blue-500 transition-colors">
<div class="rounded-full bg-[#f0f9f0] dark:bg-[#1a331a] p-2.5 group-hover/btn:bg-blue-100 dark:group-hover/btn:bg-blue-900/30 transition-colors">
<span class="material-symbols-outlined">analytics</span>
</div>
<span class="text-xs font-semibold">Analytics</span>
</button>
<button class="flex flex-col items-center gap-1 group/btn text-[#4c9a4c] hover:text-red-500 transition-colors">
<div class="rounded-full bg-[#f0f9f0] dark:bg-[#1a331a] p-2.5 group-hover/btn:bg-red-100 dark:group-hover/btn:bg-red-900/30 transition-colors">
<span class="material-symbols-outlined">delete</span>
</div>
<span class="text-xs font-semibold">Supprimer</span>
</button>
</div>
</div>
</div>
<!-- Restaurant Card 2 -->
<div class="flex flex-col bg-white dark:bg-[#0d1b0d] rounded-xl overflow-hidden border border-[#e7f3e7] dark:border-[#1a331a] shadow-sm hover:shadow-md transition-shadow group">
<div class="relative w-full aspect-video bg-cover bg-center" data-alt="Modern upscale restaurant interior" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCL9YFD2hKH9wjVX5hBoJeWASwGOvIt7hTUK_82HEDvKnTumbmCUjdqj3HOBUFJD1XRNll93Q6S0ABt1EsX_tGut4Rf8Bp2zOn7KkE1zGgIdUvpJ3H121vifdOG9V4EvT5KdrIQkvddbDDHy8AOAR53rzViRJ-yK3GrFFUOXMS5nJqfZGalA9vGd4XkMFC-qoZpS4VJyjIRY7Vw3alNt_Rc1cd1eNa4o_0Pp_yvary5En3SOZKcmetYZw_PXWBXIEJXGm9WClgQZ2RG");'>
<div class="absolute top-3 right-3 bg-primary text-[#0d1b0d] px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Actif</div>
</div>
<div class="p-5 flex flex-col gap-1">
<h3 class="text-[#0d1b0d] dark:text-white text-xl font-bold leading-tight">L'Escale Gourmande</h3>
<div class="flex items-center gap-1 text-[#4c9a4c] dark:text-[#8bc38b] text-sm mb-2">
<span class="material-symbols-outlined text-sm">location_on</span>
<span>45 Avenue des Champs, Paris</span>
</div>
<div class="bg-[#f8fcf8] dark:bg-[#1a331a] p-3 rounded-lg flex items-center gap-3 mb-4">
<span class="material-symbols-outlined text-primary">calendar_today</span>
<p class="text-[#0d1b0d] dark:text-white text-sm font-medium">8 réservations aujourd'hui</p>
</div>
<div class="flex items-center justify-between border-t border-[#e7f3e7] dark:border-[#1a331a] pt-4 mt-2">
<button class="flex flex-col items-center gap-1 group/btn text-[#4c9a4c] hover:text-primary transition-colors">
<div class="rounded-full bg-[#f0f9f0] dark:bg-[#1a331a] p-2.5 group-hover/btn:bg-primary/20 transition-colors">
<span class="material-symbols-outlined">edit</span>
</div>
<span class="text-xs font-semibold">Modifier</span>
</button>
<button class="flex flex-col items-center gap-1 group/btn text-[#4c9a4c] hover:text-blue-500 transition-colors">
<div class="rounded-full bg-[#f0f9f0] dark:bg-[#1a331a] p-2.5 group-hover/btn:bg-blue-100 dark:group-hover/btn:bg-blue-900/30 transition-colors">
<span class="material-symbols-outlined">analytics</span>
</div>
<span class="text-xs font-semibold">Analytics</span>
</button>
<button class="flex flex-col items-center gap-1 group/btn text-[#4c9a4c] hover:text-red-500 transition-colors">
<div class="rounded-full bg-[#f0f9f0] dark:bg-[#1a331a] p-2.5 group-hover/btn:bg-red-100 dark:group-hover/btn:bg-red-900/30 transition-colors">
<span class="material-symbols-outlined">delete</span>
</div>
<span class="text-xs font-semibold">Supprimer</span>
</button>
</div>
</div>
</div>
<!-- Restaurant Card 3 -->
<div class="flex flex-col bg-white dark:bg-[#0d1b0d] rounded-xl overflow-hidden border border-[#e7f3e7] dark:border-[#1a331a] shadow-sm hover:shadow-md transition-shadow group">
<div class="relative w-full aspect-video bg-cover bg-center" data-alt="Authentic Italian pizzeria" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB248NJbpNxFIPkOmd0GwnHmoGJwzWmmte90GEGboaaOg_wK2WCjC9jz5zr2xTSDokUmurdAbyU5Kbmh54T2snsrQgg2__HCmqBtDBJqkwhLsCOzrnlmsmmv97EOyaWiQUPdoGG0c6ybThP2DjeY49Zub6AIJvdWFyjEfXCV8eDqztFxj_DZ_8bMaZydA_98PugS0eGpTdg7Y9pkwBhLodiRj8z2SoYs1ucq_I6P-01m3-1e-8KdA8taP0CFJAxzv00QXeYz4fzYD6_");'>
<div class="absolute top-3 right-3 bg-primary text-[#0d1b0d] px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Actif</div>
</div>
<div class="p-5 flex flex-col gap-1">
<h3 class="text-[#0d1b0d] dark:text-white text-xl font-bold leading-tight">Pizzeria Roma</h3>
<div class="flex items-center gap-1 text-[#4c9a4c] dark:text-[#8bc38b] text-sm mb-2">
<span class="material-symbols-outlined text-sm">location_on</span>
<span>8 Place du Marché, Marseille</span>
</div>
<div class="bg-[#f8fcf8] dark:bg-[#1a331a] p-3 rounded-lg flex items-center gap-3 mb-4">
<span class="material-symbols-outlined text-primary">calendar_today</span>
<p class="text-[#0d1b0d] dark:text-white text-sm font-medium">24 réservations aujourd'hui</p>
</div>
<div class="flex items-center justify-between border-t border-[#e7f3e7] dark:border-[#1a331a] pt-4 mt-2">
<button class="flex flex-col items-center gap-1 group/btn text-[#4c9a4c] hover:text-primary transition-colors">
<div class="rounded-full bg-[#f0f9f0] dark:bg-[#1a331a] p-2.5 group-hover/btn:bg-primary/20 transition-colors">
<span class="material-symbols-outlined">edit</span>
</div>
<span class="text-xs font-semibold">Modifier</span>
</button>
<button class="flex flex-col items-center gap-1 group/btn text-[#4c9a4c] hover:text-blue-500 transition-colors">
<div class="rounded-full bg-[#f0f9f0] dark:bg-[#1a331a] p-2.5 group-hover/btn:bg-blue-100 dark:group-hover/btn:bg-blue-900/30 transition-colors">
<span class="material-symbols-outlined">analytics</span>
</div>
<span class="text-xs font-semibold">Analytics</span>
</button>
<button class="flex flex-col items-center gap-1 group/btn text-[#4c9a4c] hover:text-red-500 transition-colors">
<div class="rounded-full bg-[#f0f9f0] dark:bg-[#1a331a] p-2.5 group-hover/btn:bg-red-100 dark:group-hover/btn:bg-red-900/30 transition-colors">
<span class="material-symbols-outlined">delete</span>
</div>
<span class="text-xs font-semibold">Supprimer</span>
</button>
</div>
</div>
</div>
<!-- Add New Restaurant Card (Quick CTA) -->
<div class="flex flex-col items-center justify-center bg-primary/5 dark:bg-primary/5 rounded-xl border-2 border-dashed border-primary/40 p-8 group cursor-pointer hover:bg-primary/10 transition-colors">
<div class="size-16 rounded-full bg-primary/20 flex items-center justify-center text-primary group-hover:scale-110 transition-transform mb-4">
<span class="material-symbols-outlined text-4xl">add</span>
</div>
<h3 class="text-[#0d1b0d] dark:text-white text-lg font-bold">Ajouter un établissement</h3>
<p class="text-[#4c9a4c] text-sm text-center mt-2 px-6">Développez votre réseau et commencez à recevoir des réservations.</p>
</div>
</div>
<!-- Footer / Statistics Summary -->
<div class="mt-16 bg-[#e7f3e7] dark:bg-[#0d1b0d] border border-[#d0e6d0] dark:border-[#1a331a] rounded-2xl p-8 flex flex-col md:flex-row justify-around gap-8 text-center">
<div class="flex flex-col gap-1">
<span class="text-3xl font-black text-primary">3</span>
<span class="text-sm font-semibold uppercase tracking-wider text-[#4c9a4c]">Restaurants</span>
</div>
<div class="hidden md:block w-px bg-[#d0e6d0] dark:bg-[#1a331a]"></div>
<div class="flex flex-col gap-1">
<span class="text-3xl font-black text-primary">47</span>
<span class="text-sm font-semibold uppercase tracking-wider text-[#4c9a4c]">Réservations totales</span>
</div>
<div class="hidden md:block w-px bg-[#d0e6d0] dark:bg-[#1a331a]"></div>
<div class="flex flex-col gap-1">
<span class="text-3xl font-black text-primary">98%</span>
<span class="text-sm font-semibold uppercase tracking-wider text-[#4c9a4c]">Satisfaction client</span>
</div>
</div>
</div>
</main>
<footer class="py-10 text-center border-t border-[#e7f3e7] dark:border-[#1a331a] text-[#4c9a4c] text-sm">
<p>© 2024 YouCo'Done. Tous droits réservés.</p>
</footer>
</div>
</body></html>