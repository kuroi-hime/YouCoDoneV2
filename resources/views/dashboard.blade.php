<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Work Sans', sans-serif;
        }
    </style>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 transition-colors duration-200">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar -->
<aside class="w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark flex flex-col shrink-0">
<div class="p-6">
<div class="flex items-center gap-3">
<div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined font-bold">restaurant</span>
</div>
<div class="flex flex-col">
<h1 class="text-slate-900 dark:text-white text-lg font-bold leading-tight">YouCo'Done</h1>
<p class="text-primary text-xs font-semibold uppercase tracking-wider">Management</p>
</div>
</div>
</div>
<nav class="flex-1 px-4 space-y-1 overflow-y-auto">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary group" href="#">
<span class="material-symbols-outlined fill-1">dashboard</span>
<p class="text-sm font-semibold">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">calendar_month</span>
<p class="text-sm font-medium">Bookings</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">menu_book</span>
<p class="text-sm font-medium">Menu Management</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<p class="text-sm font-medium">Staff</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">grade</span>
<p class="text-sm font-medium">Reviews</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<p class="text-sm font-medium">Settings</p>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<button class="flex w-full items-center gap-3 px-3 py-2.5 rounded-lg text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors">
<span class="material-symbols-outlined">logout</span>
<p class="text-sm font-medium">Logout</p>
</button>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col overflow-y-auto bg-background-light dark:bg-background-dark">
<!-- Header -->
<header class="h-16 border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md sticky top-0 z-10 px-8 flex items-center justify-between">
<div class="flex items-center gap-8 flex-1">
<h2 class="text-slate-900 dark:text-white text-xl font-bold tracking-tight">Dashboard Overview</h2>
<div class="max-w-md w-full relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="w-full bg-slate-100 dark:bg-slate-800 border-none rounded-lg py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary/50 text-slate-900 dark:text-white placeholder:text-slate-400" placeholder="Search analytics, bookings..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-800"></span>
</button>
<button class="flex items-center gap-3 pl-2 pr-1 py-1 rounded-full border border-slate-200 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<span class="text-sm font-medium text-slate-700 dark:text-slate-200">Alex Chef</span>
<div class="w-8 h-8 rounded-full bg-slate-300 dark:bg-slate-700 bg-cover bg-center" data-alt="User profile avatar of the restaurant manager" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAp9m-M9L-l_QveyAUHd5PlAkJ-N_q_BuQTGUNCZVhGj8Zdv_n3vil0bGgKPrn63ZtLXb_Tg05FCmjY87svrjuB0_RXXnwgXbDoH_EaVRPedWwsLOptW-CmCJz48qERprz-aIqF_C2XGdlTqluL3pDirvMd24dqmg3S2A5BTm8i63EW3OOX_CAhglVMA58q2NkcIjMg8SMoZvKlGqYHgpmvavcztwm9y5xgqDVfYZYfxIP9_6jgh3ZDGFS2RXw9JCQWFm08RoiP6bSr')"></div>
</button>
</div>
</header>
<!-- Dashboard Content -->
<div class="p-8 space-y-8">
<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Bookings</p>
<span class="bg-primary/10 text-primary text-xs font-bold px-2 py-1 rounded">+12%</span>
</div>
<p class="text-3xl font-bold text-slate-900 dark:text-white">128</p>
<p class="text-xs text-slate-400 mt-2">vs last week</p>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Estimated Revenue</p>
<span class="bg-primary/10 text-primary text-xs font-bold px-2 py-1 rounded">+5%</span>
</div>
<p class="text-3xl font-bold text-slate-900 dark:text-white">€4,250</p>
<p class="text-xs text-slate-400 mt-2">Projection for tonight</p>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Occupancy Rate</p>
<span class="bg-primary/10 text-primary text-xs font-bold px-2 py-1 rounded">+8%</span>
</div>
<p class="text-3xl font-bold text-slate-900 dark:text-white">82%</p>
<p class="text-xs text-slate-400 mt-2">Peak hour (19:00 - 21:00)</p>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Average Rating</p>
<span class="bg-primary/10 text-primary text-xs font-bold px-2 py-1 rounded">+0.2%</span>
</div>
<div class="flex items-center gap-2">
<p class="text-3xl font-bold text-slate-900 dark:text-white">4.8</p>
<span class="material-symbols-outlined text-yellow-400 fill-1">star</span>
</div>
<p class="text-xs text-slate-400 mt-2">Based on 2.4k reviews</p>
</div>
</div>
<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
<!-- Line Chart: Booking Trends -->
<div class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex flex-col gap-1 mb-6">
<h3 class="text-slate-900 dark:text-white text-lg font-bold">Booking Trends</h3>
<p class="text-slate-500 dark:text-slate-400 text-sm">Customer activity over the last 30 days</p>
</div>
<div class="h-[220px] w-full flex flex-col justify-end">
<svg class="w-full h-full" fill="none" preserveaspectratio="none" viewbox="0 0 478 150">
<path d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V149H326.769H0V109Z" fill="url(#gradient-primary)"></path>
<path d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25" stroke="#13ec13" stroke-linecap="round" stroke-width="3"></path>
<defs>
<lineargradient gradientunits="userSpaceOnUse" id="gradient-primary" x1="236" x2="236" y1="1" y2="149">
<stop stop-color="#13ec13" stop-opacity="0.2"></stop>
<stop offset="1" stop-color="#13ec13" stop-opacity="0"></stop>
</lineargradient>
</defs>
</svg>
<div class="flex justify-between mt-4 px-2">
<span class="text-xs font-bold text-slate-400 uppercase">Week 1</span>
<span class="text-xs font-bold text-slate-400 uppercase">Week 2</span>
<span class="text-xs font-bold text-slate-400 uppercase">Week 3</span>
<span class="text-xs font-bold text-slate-400 uppercase">Week 4</span>
</div>
</div>
</div>
<!-- Bar Chart: Daily Revenue -->
<div class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex flex-col gap-1 mb-6">
<h3 class="text-slate-900 dark:text-white text-lg font-bold">Daily Revenue Estimation</h3>
<p class="text-slate-500 dark:text-slate-400 text-sm">Projected vs Actual this week</p>
</div>
<div class="h-[220px] flex items-end justify-between gap-4 px-2">
<div class="flex-1 flex flex-col items-center gap-2 group">
<div class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg relative overflow-hidden h-[160px]">
<div class="absolute bottom-0 w-full bg-primary/40 rounded-t-lg transition-all duration-300" style="height: 60%"></div>
<div class="absolute bottom-0 w-full bg-primary rounded-t-lg transition-all duration-300" style="height: 45%"></div>
</div>
<span class="text-xs font-bold text-slate-400 uppercase">Mon</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2 group">
<div class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg relative overflow-hidden h-[160px]">
<div class="absolute bottom-0 w-full bg-primary/40 rounded-t-lg transition-all duration-300" style="height: 80%"></div>
<div class="absolute bottom-0 w-full bg-primary rounded-t-lg transition-all duration-300" style="height: 70%"></div>
</div>
<span class="text-xs font-bold text-slate-400 uppercase">Tue</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2 group">
<div class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg relative overflow-hidden h-[160px]">
<div class="absolute bottom-0 w-full bg-primary/40 rounded-t-lg transition-all duration-300" style="height: 40%"></div>
<div class="absolute bottom-0 w-full bg-primary rounded-t-lg transition-all duration-300" style="height: 35%"></div>
</div>
<span class="text-xs font-bold text-slate-400 uppercase">Wed</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2 group">
<div class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg relative overflow-hidden h-[160px]">
<div class="absolute bottom-0 w-full bg-primary/40 rounded-t-lg transition-all duration-300" style="height: 95%"></div>
<div class="absolute bottom-0 w-full bg-primary rounded-t-lg transition-all duration-300" style="height: 90%"></div>
</div>
<span class="text-xs font-bold text-slate-400 uppercase">Thu</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2 group">
<div class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg relative overflow-hidden h-[160px]">
<div class="absolute bottom-0 w-full bg-primary/40 rounded-t-lg transition-all duration-300" style="height: 100%"></div>
<div class="absolute bottom-0 w-full bg-primary rounded-t-lg transition-all duration-300" style="height: 85%"></div>
</div>
<span class="text-xs font-bold text-slate-400 uppercase">Fri</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2 group">
<div class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg relative overflow-hidden h-[160px]">
<div class="absolute bottom-0 w-full bg-primary/40 rounded-t-lg transition-all duration-300" style="height: 70%"></div>
<div class="absolute bottom-0 w-full bg-primary rounded-t-lg transition-all duration-300" style="height: 65%"></div>
</div>
<span class="text-xs font-bold text-slate-400 uppercase">Sat</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2 group">
<div class="w-full bg-slate-100 dark:bg-slate-800 rounded-t-lg relative overflow-hidden h-[160px]">
<div class="absolute bottom-0 w-full bg-primary/40 rounded-t-lg transition-all duration-300" style="height: 50%"></div>
<div class="absolute bottom-0 w-full bg-primary rounded-t-lg transition-all duration-300" style="height: 40%"></div>
</div>
<span class="text-xs font-bold text-slate-400 uppercase">Sun</span>
</div>
</div>
</div>
</div>
<!-- Recent Reviews & Activity Section -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="px-8 py-5 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between">
<h3 class="text-slate-900 dark:text-white text-lg font-bold">Recent Reviews</h3>
<button class="text-primary text-sm font-bold hover:underline">View all</button>
</div>
<div class="divide-y divide-slate-100 dark:divide-slate-800">
<!-- Review Item -->
<div class="px-8 py-6 flex gap-4">
<div class="w-12 h-12 rounded-full bg-slate-200 bg-cover bg-center shrink-0" data-alt="Customer avatar for Maria Lopez review" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA0wGZc9S54DL2RiqG3Tb4tWZrHzEGviiB5hM51acjEfTmLZw8imHY17pEXAp6xg-hqNN_j7yzVb1cCyMILbnIW-u3Vuo6SEz57VAMlUkU-X833kOcroY0NWGHWebQFUhTLJu1N7wj_bOyqWNyT2wNthSUv6pwgbVeQYhPgCUUfpHDcUUcP1WZQSZGmcbGYCMLkAGEJIQjMhRjsLv3NfAY1HXC17WCEQsCEpWKQjgSh5spSE--LbkNzX4opmR8uZG0nerWA7OtA8U29')"></div>
<div class="flex-1">
<div class="flex items-center justify-between mb-1">
<h4 class="text-slate-900 dark:text-white font-bold text-base">Maria Lopez</h4>
<span class="text-xs text-slate-400">2 hours ago</span>
</div>
<div class="flex gap-1 mb-2">
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
</div>
<p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-3">
                                "The atmosphere was incredible and the food surpassed all my expectations. The steak was cooked to perfection. Definitely coming back for our anniversary!"
                            </p>
<div class="flex gap-3">
<button class="text-xs font-bold bg-slate-100 dark:bg-slate-800 px-3 py-1.5 rounded-lg hover:bg-primary hover:text-white transition-all">Reply</button>
<button class="text-xs font-bold text-slate-400 hover:text-slate-600 transition-all">Report</button>
</div>
</div>
</div>
<!-- Review Item -->
<div class="px-8 py-6 flex gap-4">
<div class="w-12 h-12 rounded-full bg-slate-200 bg-cover bg-center shrink-0" data-alt="Customer avatar for David Chen review" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAjLKf7tC8-JpkZFjFqgRFRH8Izg11A1X3q7Np285ilGVGz38ad1SkCD88unalLZJXJWne1ocFn2EbKixdxUeGo12E8w4e4bB_3Fcji-aqSUL6ke9IIdpo3h5f_82XVrX49znaNvHE7WKnO7QbuSS-IxXYHunoXss12x9BdJ-uiTfllpGj2krI0QSWEsawuuz2Kx2If7BE90yIyxx-Y-ljnWFuBTdWpF-1QZ5dzLd533RYn0_n7sCYS-oF3aznOevwjU-7noige50Z4')"></div>
<div class="flex-1">
<div class="flex items-center justify-between mb-1">
<h4 class="text-slate-900 dark:text-white font-bold text-base">David Chen</h4>
<span class="text-xs text-slate-400">5 hours ago</span>
</div>
<div class="flex gap-1 mb-2">
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
<span class="material-symbols-outlined text-slate-300 dark:text-slate-700 text-sm">star</span>
</div>
<p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-3">
                                "Great service, slightly long wait for the main course but the quality made up for it. The staff was very attentive throughout the evening."
                            </p>
<div class="flex gap-3">
<button class="text-xs font-bold bg-slate-100 dark:bg-slate-800 px-3 py-1.5 rounded-lg hover:bg-primary hover:text-white transition-all">Reply</button>
<button class="text-xs font-bold text-slate-400 hover:text-slate-600 transition-all">Report</button>
</div>
</div>
</div>
<!-- Review Item -->
<div class="px-8 py-6 flex gap-4">
<div class="w-12 h-12 rounded-full bg-slate-200 bg-cover bg-center shrink-0" data-alt="Customer avatar for Sarah Johnson review" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCTyg_p_hrFgy1dpjb7BIyDlraJJVWuKdz1reNBGpn0fDfMqbuEmNMq33YjA71EmWG3UU7AY99yf9K4GJxQ1LTFfaLc2vCgqP2kKTcocetTtRa7CKERhwgVXR4xEJzWEWMevj7UKy0ZPun5dsjo2tPZnX-TfkQ28Ya6vpAFQ3tcaGsN1eSzvAKw4V7pvktRAoo4a-99QOYKaDJcqtSrI0qMCPdLfQjidM9Co4rnEwgykdl8rkmo3Q5bMqW_txNSHUYMjcXkNtID9Yec')"></div>
<div class="flex-1">
<div class="flex items-center justify-between mb-1">
<h4 class="text-slate-900 dark:text-white font-bold text-base">Sarah Johnson</h4>
<span class="text-xs text-slate-400">Yesterday</span>
</div>
<div class="flex gap-1 mb-2">
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
<span class="material-symbols-outlined text-yellow-400 text-sm fill-1">star</span>
</div>
<p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-3">
                                "Best vegan options in the city. The roasted cauliflower dish is a masterpiece. Highly recommended for plant-based foodies!"
                            </p>
<div class="flex gap-3">
<button class="text-xs font-bold bg-slate-100 dark:bg-slate-800 px-3 py-1.5 rounded-lg hover:bg-primary hover:text-white transition-all">Reply</button>
<button class="text-xs font-bold text-slate-400 hover:text-slate-600 transition-all">Report</button>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>
</x-app-layout>
