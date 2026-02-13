<!DOCTYPE html>

<html class="scroll-smooth" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ config('app.name', 'YouCoDone') }}</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec13",
                        "primary-content": "#ffffff",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102210",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a2332",
                        "success": "#22c55e",
                        "danger": "#ef4444",
                    },
                    fontFamily: {
                        "display": ["Work Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        /* Custom scrollbar for better aesthetics */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #33553f;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-100 font-display min-h-screen flex flex-col antialiased transition-colors duration-200">
<!-- Top Navigation -->
<nav class="sticky top-0 z-30 bg-surface-light dark:bg-surface-dark border-b border-slate-200 dark:border-slate-800 shadow-sm backdrop-blur-lg bg-opacity-90 dark:bg-opacity-90">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between h-16">
<!-- Logo & Brand -->
<div class="flex items-center gap-8">
<div class="flex-shrink-0 flex items-center gap-2 cursor-pointer">
<div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center text-white font-bold text-lg">Y</div>
<span class="font-bold text-xl tracking-tight text-slate-900 dark:text-white">YouCo'Done</span>
</div>
<!-- Desktop Nav Links -->
<div class="hidden md:flex space-x-1">
<a class="px-3 py-2 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">Tableau de bord</a>
<a class="px-3 py-2 rounded-lg text-sm font-medium text-primary bg-primary/10 dark:bg-primary/20" href="#">Réservations</a>
<a class="px-3 py-2 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">Salles &amp; Tables</a>
</div>
</div>
<!-- Right Actions -->
<div class="flex items-center gap-4">
<button class="p-2 rounded-full text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors relative">
<span class="material-icons-outlined text-xl">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-danger rounded-full ring-2 ring-white dark:ring-surface-dark"></span>
</button>
<div class="flex items-center gap-3 pl-4 border-l border-slate-200 dark:border-slate-700">
<div class="text-right hidden sm:block">
<p class="text-sm font-semibold text-slate-900 dark:text-white">Chez Mario</p>
<p class="text-xs text-slate-500">Gérant</p>
</div>
<img class="h-10 w-10 rounded-full object-cover border-2 border-white dark:border-slate-700 shadow-sm" data-alt="User Avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjKovUMn3KK_U-SgBUGokAes_JWvoWLOlyX07FWVuXiFmQ8Y1SrhydwQnxFfUMeP5XT2cIW5S5DG912bDGcq6w9CS54gQMQWOJpGlbdXhJ3ytewB0zQwkcEcv8TdGezpbvb2UcJXeC1x37sGSYBqi-KsuR9zKKjxXDOVW6YE-L1iSUr3x9AFDCek_VJT6mPhvmFcCqN82kHaRAeuRGNVppqXuSQ_ZWB0GpEDwoeqiDoXiYoiUEjTfhl-voVInHrn7DItPio4sGazif"/>
</div>
</div>
</div>
</div>
</nav>
<!-- Main Content -->
<main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
<!-- Header Section -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
<div>
<h1 class="text-2xl font-bold text-slate-900 dark:text-white">Gestion des Réservations</h1>
<p class="text-slate-500 dark:text-slate-400 mt-1">Gérez vos demandes de réservation et optimisez votre taux d'occupation.</p>
</div>
<div class="flex gap-3">
<button class="inline-flex items-center px-4 py-2 bg-surface-light dark:bg-surface-dark border border-slate-300 dark:border-slate-700 rounded-lg shadow-sm text-sm font-medium text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<span class="material-icons-outlined text-lg mr-2">filter_list</span>
                    Filtres
                </button>
<button class="inline-flex items-center px-4 py-2 bg-primary hover:bg-primary/90 text-white rounded-lg shadow-sm text-sm font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
<span class="material-icons-outlined text-lg mr-2">add</span>
                    Nouvelle réservation
                </button>
</div>
</div>
<!-- Summary Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
<div class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 flex items-center justify-between">
<div>
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">À venir aujourd'hui</p>
<p class="text-2xl font-bold text-slate-900 dark:text-white mt-1">24</p>
</div>
<div class="p-3 bg-primary/10 rounded-lg text-primary">
<span class="material-icons-outlined">calendar_today</span>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 flex items-center justify-between">
<div>
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Demandes en attente</p>
<p class="text-2xl font-bold text-slate-900 dark:text-white mt-1">5</p>
</div>
<div class="p-3 bg-orange-100 text-orange-600 rounded-lg dark:bg-orange-900/30 dark:text-orange-400">
<span class="material-icons-outlined">pending_actions</span>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 flex items-center justify-between">
<div>
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Couverts confirmés</p>
<p class="text-2xl font-bold text-slate-900 dark:text-white mt-1">86</p>
</div>
<div class="p-3 bg-green-100 text-green-600 rounded-lg dark:bg-green-900/30 dark:text-green-400">
<span class="material-icons-outlined">restaurant</span>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 flex items-center justify-between">
<div>
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Taux d'occupation</p>
<p class="text-2xl font-bold text-slate-900 dark:text-white mt-1">78%</p>
</div>
<div class="p-3 bg-blue-100 text-blue-600 rounded-lg dark:bg-blue-900/30 dark:text-blue-400">
<span class="material-icons-outlined">show_chart</span>
</div>
</div>
</div>
<!-- Dashboard Content -->
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
<!-- Tabs Navigation -->
<div class="border-b border-slate-200 dark:border-slate-800">
<nav aria-label="Tabs" class="flex space-x-8 px-6 overflow-x-auto">
<button aria-current="page" class="group relative py-4 px-1 text-sm font-medium text-primary focus:outline-none whitespace-nowrap">
<span>En attente</span>
<span class="ml-2 bg-primary/10 text-primary py-0.5 px-2.5 rounded-full text-xs font-semibold dark:bg-primary/20">5</span>
<span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary rounded-t-full"></span>
</button>
<button class="group relative py-4 px-1 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200 focus:outline-none whitespace-nowrap">
<span>Confirmées</span>
<span class="ml-2 bg-slate-100 text-slate-600 py-0.5 px-2.5 rounded-full text-xs font-semibold dark:bg-slate-800 dark:text-slate-400">12</span>
<span class="absolute bottom-0 left-0 w-full h-0.5 bg-transparent group-hover:bg-slate-300 dark:group-hover:bg-slate-600 rounded-t-full transition-colors"></span>
</button>
<button class="group relative py-4 px-1 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200 focus:outline-none whitespace-nowrap">
<span>Annulées</span>
<span class="ml-2 bg-slate-100 text-slate-600 py-0.5 px-2.5 rounded-full text-xs font-semibold dark:bg-slate-800 dark:text-slate-400">2</span>
<span class="absolute bottom-0 left-0 w-full h-0.5 bg-transparent group-hover:bg-slate-300 dark:group-hover:bg-slate-600 rounded-t-full transition-colors"></span>
</button>
</nav>
</div>
<!-- List View -->
<ul class="divide-y divide-slate-100 dark:divide-slate-800" role="list">
<!-- Item 1 -->
<li class="relative hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150 p-4 sm:p-6 group">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<!-- Customer Info -->
<div class="flex items-start gap-4 flex-1 min-w-0">
<div class="relative">
<img class="h-12 w-12 rounded-full object-cover ring-2 ring-white dark:ring-surface-dark" data-alt="Portrait of a young woman smiling" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNq8wcC5-mIPM0tG_u_sIQn1oxnPlhoI5s9jU_DFAwipJzhPD7G9SdAZUkHLwMhk4C0rfksK93Ll6PUELMrtHcmt0L5v-Si5pyNx87QDxRD64gqhKqdYgL6_I_a19yJRdmV7AjDr92r2qZuevwHwBNTLeyfkJQo_c67Ofwuw9OKMS9bNzv57HqMhuIkJ5sN7YEIbFZxaGWR0Rvxhgb_xQg-SjdcfdkQkl3coAnFkSWwVPeaiiMYnRlG4sz_PDlLJRaXE_y3n5NDjeV"/>
<span class="absolute bottom-0 right-0 block h-3 w-3 rounded-full bg-green-400 ring-2 ring-white dark:ring-surface-dark" title="Client régulier"></span>
</div>
<div class="min-w-0 flex-1">
<div class="flex items-center gap-2 flex-wrap">
<h3 class="text-base font-semibold text-slate-900 dark:text-white truncate">Sophie Martin</h3>
<span class="inline-flex items-center rounded-md bg-purple-50 dark:bg-purple-900/30 px-2 py-1 text-xs font-medium text-purple-700 dark:text-purple-300 ring-1 ring-inset ring-purple-700/10">VIP</span>
</div>
<div class="mt-1 flex items-center gap-4 text-sm text-slate-500 dark:text-slate-400">
<div class="flex items-center gap-1">
<span class="material-icons-outlined text-base">phone</span>
<span>06 12 34 56 78</span>
</div>
<div class="hidden sm:flex items-center gap-1">
<span class="material-icons-outlined text-base">mail</span>
<span class="truncate">sophie.m@email.com</span>
</div>
</div>
<!-- Request Note -->
<div class="mt-2 text-sm bg-yellow-50 dark:bg-yellow-900/20 text-yellow-800 dark:text-yellow-200 px-3 py-1.5 rounded-lg inline-block">
<span class="font-medium mr-1">Note:</span> "Anniversaire, besoin d'une chaise haute."
                                </div>
</div>
</div>
<!-- Booking Details -->
<div class="flex flex-row sm:flex-col items-center sm:items-end gap-2 sm:gap-1 text-right border-t sm:border-none border-slate-100 dark:border-slate-800 pt-3 sm:pt-0">
<div class="flex items-center gap-2 text-slate-900 dark:text-white">
<span class="material-icons-outlined text-primary">event</span>
<span class="font-bold">Aujourd'hui, 19:30</span>
</div>
<div class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
<span class="material-icons-outlined text-sm">group</span>
<span>4 Personnes</span>
</div>
<div class="flex items-center gap-2 text-xs text-slate-400 dark:text-slate-500 mt-1">
<span class="material-icons-outlined text-xs">schedule</span>
<span>Reçu il y a 15 min</span>
</div>
</div>
<!-- Actions -->
<div class="flex items-center gap-3 sm:pl-6 sm:border-l border-slate-100 dark:border-slate-700 w-full sm:w-auto mt-2 sm:mt-0">
<button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-success/10 hover:bg-success text-success hover:text-white rounded-lg transition-all duration-200 font-medium group-hover:shadow-md border border-transparent hover:border-success">
<span class="material-icons-outlined">check</span>
<span class="sm:hidden lg:inline">Accepter</span>
</button>
<button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-danger/10 hover:bg-danger text-danger hover:text-white rounded-lg transition-all duration-200 font-medium group-hover:shadow-md border border-transparent hover:border-danger">
<span class="material-icons-outlined">close</span>
<span class="sm:hidden lg:inline">Annuler</span>
</button>
</div>
</div>
</li>
<!-- Item 2 -->
<li class="relative hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150 p-4 sm:p-6 group">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div class="flex items-start gap-4 flex-1 min-w-0">
<div class="flex-shrink-0 h-12 w-12 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-300 font-bold text-lg ring-2 ring-white dark:ring-surface-dark">
                                TD
                            </div>
<div class="min-w-0 flex-1">
<h3 class="text-base font-semibold text-slate-900 dark:text-white truncate">Thomas Dubois</h3>
<div class="mt-1 flex items-center gap-4 text-sm text-slate-500 dark:text-slate-400">
<div class="flex items-center gap-1">
<span class="material-icons-outlined text-base">phone</span>
<span>06 88 99 00 11</span>
</div>
</div>
</div>
</div>
<div class="flex flex-row sm:flex-col items-center sm:items-end gap-2 sm:gap-1 text-right border-t sm:border-none border-slate-100 dark:border-slate-800 pt-3 sm:pt-0">
<div class="flex items-center gap-2 text-slate-900 dark:text-white">
<span class="material-icons-outlined text-primary">event</span>
<span class="font-bold">Demain, 20:00</span>
</div>
<div class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
<span class="material-icons-outlined text-sm">group</span>
<span>2 Personnes</span>
</div>
<div class="flex items-center gap-2 text-xs text-slate-400 dark:text-slate-500 mt-1">
<span class="material-icons-outlined text-xs">schedule</span>
<span>Reçu il y a 2h</span>
</div>
</div>
<div class="flex items-center gap-3 sm:pl-6 sm:border-l border-slate-100 dark:border-slate-700 w-full sm:w-auto mt-2 sm:mt-0">
<button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-success/10 hover:bg-success text-success hover:text-white rounded-lg transition-all duration-200 font-medium group-hover:shadow-md border border-transparent hover:border-success">
<span class="material-icons-outlined">check</span>
<span class="sm:hidden lg:inline">Accepter</span>
</button>
<button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-danger/10 hover:bg-danger text-danger hover:text-white rounded-lg transition-all duration-200 font-medium group-hover:shadow-md border border-transparent hover:border-danger">
<span class="material-icons-outlined">close</span>
<span class="sm:hidden lg:inline">Annuler</span>
</button>
</div>
</div>
</li>
<!-- Item 3 -->
<li class="relative hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150 p-4 sm:p-6 group">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div class="flex items-start gap-4 flex-1 min-w-0">
<img class="h-12 w-12 rounded-full object-cover ring-2 ring-white dark:ring-surface-dark" data-alt="Portrait of a smiling man" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4DyPUZQcgHzLvWcZlmePV5Vd34IgL0qY6jqurs0uMcUb4aF64pJ9Nh5NjkZtdy4fJaRRgjZisALG0kIlhe90jsDicZm4jJ-9-SlwUadLdyAONy1G5s91XtmcW1Hd7x_EHpgONwi__paLYYtIpO7cyvICnKEIqMDCbYQU2ENNVuz6Da9PFycg3xdQFigQe5I0e0MMzdqlA930_LgGdAnwv5xLqON_M5V_S2YI2Hc8wFi-5FNrXqGYEo-E-HuocsQIbyjZsm_iUgJv2"/>
<div class="min-w-0 flex-1">
<h3 class="text-base font-semibold text-slate-900 dark:text-white truncate">Lucas Bernard</h3>
<div class="mt-1 flex items-center gap-4 text-sm text-slate-500 dark:text-slate-400">
<div class="flex items-center gap-1">
<span class="material-icons-outlined text-base">phone</span>
<span>07 65 43 21 09</span>
</div>
</div>
<div class="mt-2 text-sm bg-primary/5 text-primary-darker dark:text-primary-light px-3 py-1.5 rounded-lg inline-block border border-primary/10">
<span class="font-medium mr-1">Préférence:</span> "Table près de la fenêtre si possible."
                                </div>
</div>
</div>
<div class="flex flex-row sm:flex-col items-center sm:items-end gap-2 sm:gap-1 text-right border-t sm:border-none border-slate-100 dark:border-slate-800 pt-3 sm:pt-0">
<div class="flex items-center gap-2 text-slate-900 dark:text-white">
<span class="material-icons-outlined text-primary">event</span>
<span class="font-bold">16 Oct, 12:30</span>
</div>
<div class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
<span class="material-icons-outlined text-sm">group</span>
<span>6 Personnes</span>
</div>
<div class="flex items-center gap-2 text-xs text-slate-400 dark:text-slate-500 mt-1">
<span class="material-icons-outlined text-xs">schedule</span>
<span>Reçu il y a 4h</span>
</div>
</div>
<div class="flex items-center gap-3 sm:pl-6 sm:border-l border-slate-100 dark:border-slate-700 w-full sm:w-auto mt-2 sm:mt-0">
<button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-success/10 hover:bg-success text-success hover:text-white rounded-lg transition-all duration-200 font-medium group-hover:shadow-md border border-transparent hover:border-success">
<span class="material-icons-outlined">check</span>
<span class="sm:hidden lg:inline">Accepter</span>
</button>
<button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-danger/10 hover:bg-danger text-danger hover:text-white rounded-lg transition-all duration-200 font-medium group-hover:shadow-md border border-transparent hover:border-danger">
<span class="material-icons-outlined">close</span>
<span class="sm:hidden lg:inline">Annuler</span>
</button>
</div>
</div>
</li>
<!-- Item 4 -->
<li class="relative hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150 p-4 sm:p-6 group">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div class="flex items-start gap-4 flex-1 min-w-0">
<div class="flex-shrink-0 h-12 w-12 rounded-full bg-pink-100 dark:bg-pink-900 flex items-center justify-center text-pink-600 dark:text-pink-300 font-bold text-lg ring-2 ring-white dark:ring-surface-dark">
                                EM
                            </div>
<div class="min-w-0 flex-1">
<h3 class="text-base font-semibold text-slate-900 dark:text-white truncate">Emma Moreau</h3>
<div class="mt-1 flex items-center gap-4 text-sm text-slate-500 dark:text-slate-400">
<div class="flex items-center gap-1">
<span class="material-icons-outlined text-base">phone</span>
<span>06 11 22 33 44</span>
</div>
</div>
</div>
</div>
<div class="flex flex-row sm:flex-col items-center sm:items-end gap-2 sm:gap-1 text-right border-t sm:border-none border-slate-100 dark:border-slate-800 pt-3 sm:pt-0">
<div class="flex items-center gap-2 text-slate-900 dark:text-white">
<span class="material-icons-outlined text-primary">event</span>
<span class="font-bold">16 Oct, 21:00</span>
</div>
<div class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
<span class="material-icons-outlined text-sm">group</span>
<span>2 Personnes</span>
</div>
<div class="flex items-center gap-2 text-xs text-slate-400 dark:text-slate-500 mt-1">
<span class="material-icons-outlined text-xs">schedule</span>
<span>Reçu hier</span>
</div>
</div>
<div class="flex items-center gap-3 sm:pl-6 sm:border-l border-slate-100 dark:border-slate-700 w-full sm:w-auto mt-2 sm:mt-0">
<button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-success/10 hover:bg-success text-success hover:text-white rounded-lg transition-all duration-200 font-medium group-hover:shadow-md border border-transparent hover:border-success">
<span class="material-icons-outlined">check</span>
<span class="sm:hidden lg:inline">Accepter</span>
</button>
<button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-danger/10 hover:bg-danger text-danger hover:text-white rounded-lg transition-all duration-200 font-medium group-hover:shadow-md border border-transparent hover:border-danger">
<span class="material-icons-outlined">close</span>
<span class="sm:hidden lg:inline">Annuler</span>
</button>
</div>
</div>
</li>
<!-- Item 5 -->
<li class="relative hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150 p-4 sm:p-6 group">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div class="flex items-start gap-4 flex-1 min-w-0">
<img class="h-12 w-12 rounded-full object-cover ring-2 ring-white dark:ring-surface-dark" data-alt="Portrait of a woman" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABz8wLQ37cqFCoM_gtR7y2n5R9x9LvUsNeF0qQCxPG_Rw7J1s0r605dwi7d6wD7bIyLq5NvXlfTXAOm9Vg8fhhaHhx4uSycuKDsFoh0Ix90RxaRO5PvPukwVuEGL5-Clih-mwBUVIlih9GyPG3AVKFykUXBT3W0Q0-cy4DNNCdCJOuraETnEz4-jFkrJfkKSpcBo4Y26Eqrrvd5syMWhLudiCVYyKbvK7nx4280F0hPwL05OOG8eQrI0FbIOaSJLWqbPKWsQave5j-"/>
<div class="min-w-0 flex-1">
<h3 class="text-base font-semibold text-slate-900 dark:text-white truncate">Julie Petit</h3>
<div class="mt-1 flex items-center gap-4 text-sm text-slate-500 dark:text-slate-400">
<div class="flex items-center gap-1">
<span class="material-icons-outlined text-base">phone</span>
<span>07 99 88 77 66</span>
</div>
</div>
<div class="mt-2 text-sm bg-yellow-50 dark:bg-yellow-900/20 text-yellow-800 dark:text-yellow-200 px-3 py-1.5 rounded-lg inline-block">
<span class="font-medium mr-1">Allergies:</span> "Arachides et Noix"
                                </div>
</div>
</div>
<div class="flex flex-row sm:flex-col items-center sm:items-end gap-2 sm:gap-1 text-right border-t sm:border-none border-slate-100 dark:border-slate-800 pt-3 sm:pt-0">
<div class="flex items-center gap-2 text-slate-900 dark:text-white">
<span class="material-icons-outlined text-primary">event</span>
<span class="font-bold">17 Oct, 19:00</span>
</div>
<div class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
<span class="material-icons-outlined text-sm">group</span>
<span>3 Personnes</span>
</div>
<div class="flex items-center gap-2 text-xs text-slate-400 dark:text-slate-500 mt-1">
<span class="material-icons-outlined text-xs">schedule</span>
<span>Reçu hier</span>
</div>
</div>
<div class="flex items-center gap-3 sm:pl-6 sm:border-l border-slate-100 dark:border-slate-700 w-full sm:w-auto mt-2 sm:mt-0">
<button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-success/10 hover:bg-success text-success hover:text-white rounded-lg transition-all duration-200 font-medium group-hover:shadow-md border border-transparent hover:border-success">
<span class="material-icons-outlined">check</span>
<span class="sm:hidden lg:inline">Accepter</span>
</button>
<button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-danger/10 hover:bg-danger text-danger hover:text-white rounded-lg transition-all duration-200 font-medium group-hover:shadow-md border border-transparent hover:border-danger">
<span class="material-icons-outlined">close</span>
<span class="sm:hidden lg:inline">Annuler</span>
</button>
</div>
</div>
</li>
</ul>
<!-- Footer Pagination -->
<div class="bg-slate-50 dark:bg-slate-800/30 px-6 py-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
<span class="text-sm text-slate-500 dark:text-slate-400">Affichage de <span class="font-medium">1</span> à <span class="font-medium">5</span> sur <span class="font-medium">5</span> résultats</span>
<div class="flex gap-2">
<button class="px-3 py-1 rounded border border-slate-300 dark:border-slate-600 text-slate-500 dark:text-slate-400 bg-white dark:bg-surface-dark cursor-not-allowed opacity-50" disabled="">Précédent</button>
<button class="px-3 py-1 rounded border border-slate-300 dark:border-slate-600 text-slate-500 dark:text-slate-400 bg-white dark:bg-surface-dark cursor-not-allowed opacity-50" disabled="">Suivant</button>
</div>
</div>
</div>
</main>
</body></html>