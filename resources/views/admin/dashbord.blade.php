<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>YouCo'Done Admin Dashboard</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
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
                "display": ["Work Sans", "sans-serif"]
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
        .active-tab {
            background-color: #13ec1320;
            border-left: 4px solid #13ec13;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex">
<!-- Sidebar Navigation -->
<aside class="w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark h-screen sticky top-0 flex flex-col">
<div class="p-6 flex items-center gap-3">
<div class="bg-primary size-10 rounded-lg flex items-center justify-center text-white shadow-lg shadow-primary/20">
<span class="material-symbols-outlined font-bold">restaurant</span>
</div>
<div>
<h1 class="text-lg font-black tracking-tight leading-none">YouCo'Done</h1>
<p class="text-xs text-slate-500 font-medium">Admin Console</p>
</div>
</div>
<nav class="flex-1 px-4 space-y-2 mt-4">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg active-tab text-slate-900 dark:text-white group" href="#">
<span class="material-symbols-outlined text-primary">dashboard</span>
<span class="text-sm font-semibold tracking-tight">Stats Overview</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="#">
<span class="material-symbols-outlined">verified_user</span>
<span class="text-sm font-medium">Moderation</span>
<span class="ml-auto bg-primary text-white text-[10px] px-1.5 py-0.5 rounded-full">12</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="#">
<span class="material-symbols-outlined">security</span>
<span class="text-sm font-medium">Permissions</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">User Management</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2 rounded-lg bg-slate-50 dark:bg-slate-900">
<div class="size-8 rounded-full bg-slate-300 overflow-hidden" data-alt="Admin user profile avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBmwYh8S8gBEeJHRFiwuoPxTSkBlc9KXS9bBrWJfgO399u_fU68Aq9kMQTUWknnlPYjh8hCDnm2DVJh8DXz1G-00AV-Xa8J3wcrymA8W0ZDVYfpsqTyiImIhnbzA7mYLc2jSPBYPLsjXJQ7voSCKxskgJb_T5cX4X8fuZw-MGj1Uk1NiycBXJXXH7IFsA8q0bZ0Q66ppl177oBGPnjfXzce6oxHhwH5cSfHOTfF4apPG70TeMai5LH2iWUEZCHO4OA9NvEOJFj9IoPo');"></div>
<div class="flex-1 overflow-hidden">
<p class="text-xs font-bold truncate">Alex Admin</p>
<p class="text-[10px] text-slate-500 truncate">Super Admin</p>
</div>
<span class="material-symbols-outlined text-slate-400 text-sm">logout</span>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto">
<!-- Header -->
<header class="flex flex-wrap justify-between items-center gap-4 p-8 border-b border-slate-200 dark:border-slate-800 bg-white/50 dark:bg-background-dark/50 backdrop-blur-md sticky top-0 z-10">
<div class="flex flex-col gap-1">
<h2 class="text-3xl font-black tracking-tight dark:text-white">Global Dashboard</h2>
<p class="text-slate-500 text-sm font-medium">Real-time overview of restaurant and user metrics</p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-bold shadow-sm hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined text-sm">download</span>
                    Export Report
                </button>
<button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg text-sm font-bold shadow-lg shadow-primary/20 hover:brightness-110 transition-all">
<span class="material-symbols-outlined text-sm">add</span>
                    New Restaurant
                </button>
</div>
</header>
<div class="p-8 max-w-7xl mx-auto space-y-10">
<!-- Tab 1: Stats Section -->
<section id="stats">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm">
<div class="flex justify-between items-start mb-4">
<p class="text-slate-500 text-sm font-semibold uppercase tracking-wider">Total Users</p>
<span class="p-2 bg-blue-50 text-blue-600 rounded-lg material-symbols-outlined">person</span>
</div>
<div class="flex items-end gap-3">
<p class="text-4xl font-black leading-none">12,450</p>
<p class="text-primary text-sm font-bold flex items-center mb-1">
<span class="material-symbols-outlined text-xs">trending_up</span> +12%
                            </p>
</div>
</div>
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm">
<div class="flex justify-between items-start mb-4">
<p class="text-slate-500 text-sm font-semibold uppercase tracking-wider">Total Bookings</p>
<span class="p-2 bg-orange-50 text-orange-600 rounded-lg material-symbols-outlined">calendar_today</span>
</div>
<div class="flex items-end gap-3">
<p class="text-4xl font-black leading-none">8,920</p>
<p class="text-primary text-sm font-bold flex items-center mb-1">
<span class="material-symbols-outlined text-xs">trending_up</span> +5.2%
                            </p>
</div>
</div>
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm">
<div class="flex justify-between items-start mb-4">
<p class="text-slate-500 text-sm font-semibold uppercase tracking-wider">Active Restaurants</p>
<span class="p-2 bg-green-50 text-green-600 rounded-lg material-symbols-outlined">storefront</span>
</div>
<div class="flex items-end gap-3">
<p class="text-4xl font-black leading-none">432</p>
<p class="text-red-500 text-sm font-bold flex items-center mb-1">
<span class="material-symbols-outlined text-xs">trending_down</span> -2.1%
                            </p>
</div>
</div>
</div>
<!-- Booking Trends Chart Placeholder -->
<div class="mt-8 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-8">
<div class="flex justify-between items-center mb-8">
<div>
<h3 class="text-xl font-bold">Booking Trends</h3>
<p class="text-sm text-slate-500">Weekly platform activity performance</p>
</div>
<div class="flex bg-slate-100 dark:bg-slate-800 p-1 rounded-lg">
<button class="px-4 py-1.5 bg-white dark:bg-slate-700 text-xs font-bold rounded-md shadow-sm">7 Days</button>
<button class="px-4 py-1.5 text-xs font-bold text-slate-500">30 Days</button>
</div>
</div>
<div class="h-64 relative">
<!-- SVG Chart Simulation -->
<svg fill="none" height="100%" preserveaspectratio="none" viewbox="0 0 1000 200" width="100%" xmlns="http://www.w3.org/2000/svg">
<path d="M0 150 C 100 130, 200 160, 300 100 S 500 20, 600 80 S 800 140, 1000 50 V 200 H 0 Z" fill="url(#grad)" opacity="0.1"></path>
<path d="M0 150 C 100 130, 200 160, 300 100 S 500 20, 600 80 S 800 140, 1000 50" stroke="#13ec13" stroke-linecap="round" stroke-width="4"></path>
<defs>
<lineargradient id="grad" x1="0%" x2="0%" y1="0%" y2="100%">
<stop offset="0%" style="stop-color:#13ec13;stop-opacity:1"></stop>
<stop offset="100%" style="stop-color:#13ec13;stop-opacity:0"></stop>
</lineargradient>
</defs>
</svg>
<div class="flex justify-between mt-6 border-t border-slate-100 dark:border-slate-800 pt-4 px-2">
<span class="text-xs font-bold text-slate-400">Mon</span>
<span class="text-xs font-bold text-slate-400">Tue</span>
<span class="text-xs font-bold text-slate-400">Wed</span>
<span class="text-xs font-bold text-slate-400">Thu</span>
<span class="text-xs font-bold text-slate-400">Fri</span>
<span class="text-xs font-bold text-slate-400">Sat</span>
<span class="text-xs font-bold text-slate-400">Sun</span>
</div>
</div>
</div>
</section>
<hr class="border-slate-200 dark:border-slate-800"/>
<!-- Tab 2: Restaurant Approval Queue -->
<section class="space-y-6" id="moderation">
<div class="flex justify-between items-end">
<h2 class="text-2xl font-black">Restaurant Approval Queue</h2>
<span class="text-sm font-bold text-primary px-3 py-1 bg-primary/10 rounded-full">12 Pending Requests</span>
</div>
<div class="grid grid-cols-1 gap-4">
<!-- Approval Card 1 -->
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 flex flex-wrap md:flex-nowrap gap-6 items-center shadow-sm">
<div class="size-20 bg-slate-100 dark:bg-slate-800 rounded-lg bg-cover bg-center shrink-0" data-alt="The Green Bistro restaurant logo" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBnBb1PaUOCSCzld1q9ye1_PAABApqXYmze7zlbAee_SQXdoAr4mSlgwTgT38Tcp35dG42HEpOTg_UUWIfwBuU-uh2XSYLbxOVHpNt0mge7VHjdEwqgUxzLPp2-9bCtvUKOopGkTofdY_RJfLLrfcOaclhR5o0ZdckPqFDGfvXj1WqBZyC0ulUtHwHrrS4bM2ihSg2vZxJ-EzmblLEa-BC6ED_gxdE8WQifjuS2cFPIsrMAxFe0jiymVMY-Ks0WhBEzujdIseODF-7V');"></div>
<div class="flex-1 min-w-[200px]">
<h4 class="text-lg font-bold">The Green Bistro</h4>
<p class="text-sm text-slate-500">Vegan, French Cuisine • Lyon, FR</p>
<div class="mt-2 flex gap-2">
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded uppercase">VAT Verified</span>
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded uppercase">Documents Uploaded</span>
</div>
</div>
<div class="flex gap-3 shrink-0">
<button class="px-4 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 font-bold text-sm rounded-lg transition-colors">View Details</button>
<button class="px-4 py-2 border border-red-200 text-red-600 hover:bg-red-50 font-bold text-sm rounded-lg transition-colors">Reject</button>
<button class="px-4 py-2 bg-primary text-white font-bold text-sm rounded-lg hover:brightness-110 transition-all">Approve</button>
</div>
</div>
<!-- Approval Card 2 -->
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 flex flex-wrap md:flex-nowrap gap-6 items-center shadow-sm">
<div class="size-20 bg-slate-100 dark:bg-slate-800 rounded-lg bg-cover bg-center shrink-0" data-alt="Sushi Zen restaurant logo" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBPn8cwxuXSQSFDdLhxbpcpmtQ4beD9HMGubTJg-fHC-dD15H1ws5rnlQ_apsxYTn5zfueMrOKZdQ2CURPoMbGOLJhZPvXKlriFo8H5BQHZ832x7thn9-uG2OmmYbxpUPI4OR3oXnk65Ki4MXLuL2kbA-bClR1x1TqZTykf3aAil9PGCThzXzr6nf9VGdXc_sGJWflCH4SfEm88G-x76AHdc33NLz6rC0CmRdWs5gKY1jHKP6CPynwSe_VuxzYGcH-Yck61jTGOkn8F');"></div>
<div class="flex-1 min-w-[200px]">
<h4 class="text-lg font-bold">Sushi Zen</h4>
<p class="text-sm text-slate-500">Japanese, Seafood • Vancouver, CA</p>
<div class="mt-2 flex gap-2">
<span class="px-2 py-0.5 bg-yellow-100 text-yellow-700 text-[10px] font-bold rounded uppercase">Identity Pending</span>
</div>
</div>
<div class="flex gap-3 shrink-0">
<button class="px-4 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 font-bold text-sm rounded-lg transition-colors">View Details</button>
<button class="px-4 py-2 border border-red-200 text-red-600 hover:bg-red-50 font-bold text-sm rounded-lg transition-colors">Reject</button>
<button class="px-4 py-2 bg-primary text-white font-bold text-sm rounded-lg hover:brightness-110 transition-all opacity-50 cursor-not-allowed">Approve</button>
</div>
</div>
</div>
</section>
<hr class="border-slate-200 dark:border-slate-800"/>
<!-- Tab 3: Role & Permission Management -->
<section class="space-y-6" id="permissions">
<div class="flex justify-between items-center">
<h2 class="text-2xl font-black">Role &amp; Permission Matrix</h2>
<button class="text-sm font-bold text-primary flex items-center gap-1 hover:underline">
<span class="material-symbols-outlined text-sm">settings</span> Configure Roles
                    </button>
</div>
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl overflow-hidden shadow-sm">
<table class="w-full text-left">
<thead class="bg-slate-50 dark:bg-slate-800/50">
<tr>
<th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">Permission Category</th>
<th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500 text-center">Super Admin</th>
<th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500 text-center">Manager</th>
<th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500 text-center">Staff</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr>
<td class="px-6 py-4 font-bold text-sm">User Moderation</td>
<td class="px-6 py-4 text-center text-primary"><span class="material-symbols-outlined">check_circle</span></td>
<td class="px-6 py-4 text-center text-primary"><span class="material-symbols-outlined">check_circle</span></td>
<td class="px-6 py-4 text-center text-slate-300 dark:text-slate-700"><span class="material-symbols-outlined">block</span></td>
</tr>
<tr>
<td class="px-6 py-4 font-bold text-sm">Financial Access</td>
<td class="px-6 py-4 text-center text-primary"><span class="material-symbols-outlined">check_circle</span></td>
<td class="px-6 py-4 text-center text-slate-300 dark:text-slate-700"><span class="material-symbols-outlined">block</span></td>
<td class="px-6 py-4 text-center text-slate-300 dark:text-slate-700"><span class="material-symbols-outlined">block</span></td>
</tr>
<tr>
<td class="px-6 py-4 font-bold text-sm">Booking Management</td>
<td class="px-6 py-4 text-center text-primary"><span class="material-symbols-outlined">check_circle</span></td>
<td class="px-6 py-4 text-center text-primary"><span class="material-symbols-outlined">check_circle</span></td>
<td class="px-6 py-4 text-center text-primary"><span class="material-symbols-outlined">check_circle</span></td>
</tr>
<tr>
<td class="px-6 py-4 font-bold text-sm">Global System Settings</td>
<td class="px-6 py-4 text-center text-primary"><span class="material-symbols-outlined">check_circle</span></td>
<td class="px-6 py-4 text-center text-slate-300 dark:text-slate-700"><span class="material-symbols-outlined">block</span></td>
<td class="px-6 py-4 text-center text-slate-300 dark:text-slate-700"><span class="material-symbols-outlined">block</span></td>
</tr>
</tbody>
</table>
</div>
</section>
<hr class="border-slate-200 dark:border-slate-800"/>
<!-- Tab 4: User/Client Management List -->
<section class="space-y-6 pb-12" id="users">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<h2 class="text-2xl font-black">User Management</h2>
<div class="relative min-w-[300px]">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-lg text-sm focus:ring-primary focus:border-primary transition-all" placeholder="Search users by name, email or ID..." type="text"/>
</div>
</div>
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl overflow-hidden shadow-sm">
<table class="w-full text-left">
<thead class="bg-slate-50 dark:bg-slate-800/50">
<tr>
<th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">User</th>
<th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">Join Date</th>
<th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">Status</th>
<th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500">Total Spend</th>
<th class="px-6 py-4 text-xs font-black uppercase tracking-wider text-slate-500 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<!-- User 1 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">JD</div>
<div>
<p class="text-sm font-bold">John Doe</p>
<p class="text-[10px] text-slate-500">john.doe@example.com</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Oct 12, 2023</td>
<td class="px-6 py-4">
<span class="px-2 py-0.5 bg-green-100 text-green-700 text-[10px] font-bold rounded-full uppercase">Active</span>
</td>
<td class="px-6 py-4 text-sm font-bold">$1,240.00</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit</span></button>
<button class="text-slate-400 hover:text-red-500 transition-colors p-1 ml-2"><span class="material-symbols-outlined">block</span></button>
</td>
</tr>
<!-- User 2 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center font-bold text-slate-500">MS</div>
<div>
<p class="text-sm font-bold">Maria Smith</p>
<p class="text-[10px] text-slate-500">maria.s@domain.co</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Sep 05, 2023</td>
<td class="px-6 py-4">
<span class="px-2 py-0.5 bg-red-100 text-red-700 text-[10px] font-bold rounded-full uppercase">Banned</span>
</td>
<td class="px-6 py-4 text-sm font-bold">$0.00</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit</span></button>
<button class="text-primary hover:text-green-600 transition-colors p-1 ml-2"><span class="material-symbols-outlined">undo</span></button>
</td>
</tr>
<!-- User 3 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">RK</div>
<div>
<p class="text-sm font-bold">Robert King</p>
<p class="text-[10px] text-slate-500">r.king@agency.net</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Nov 28, 2023</td>
<td class="px-6 py-4">
<span class="px-2 py-0.5 bg-green-100 text-green-700 text-[10px] font-bold rounded-full uppercase">Active</span>
</td>
<td class="px-6 py-4 text-sm font-bold">$450.50</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">edit</span></button>
<button class="text-slate-400 hover:text-red-500 transition-colors p-1 ml-2"><span class="material-symbols-outlined">block</span></button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="flex items-center justify-between">
<p class="text-xs text-slate-500 font-medium">Showing 1 to 10 of 12,450 users</p>
<div class="flex gap-2">
<button class="p-2 border border-slate-200 dark:border-slate-800 rounded-lg text-slate-500 hover:bg-slate-50 transition-colors"><span class="material-symbols-outlined text-sm leading-none">chevron_left</span></button>
<button class="p-2 px-4 border border-slate-200 dark:border-slate-800 rounded-lg bg-primary text-white font-bold text-xs">1</button>
<button class="p-2 px-4 border border-slate-200 dark:border-slate-800 rounded-lg text-slate-600 hover:bg-slate-50 text-xs font-bold">2</button>
<button class="p-2 px-4 border border-slate-200 dark:border-slate-800 rounded-lg text-slate-600 hover:bg-slate-50 text-xs font-bold">3</button>
<button class="p-2 border border-slate-200 dark:border-slate-800 rounded-lg text-slate-500 hover:bg-slate-50 transition-colors"><span class="material-symbols-outlined text-sm leading-none">chevron_right</span></button>
</div>
</div>
</section>
</div>
</main>
</body></html>