<x-app-layout>
    <main class="flex-1 ml-72">
        <div class="max-w-6xl mx-auto px-8 py-10">
            <div class="flex flex-wrap justify-between items-end gap-6 mb-10">
                <div class="flex flex-col gap-2">
                    <h2 class="text-4xl font-black leading-tight tracking-tight dark:text-white">
                        {{ __('My Profile') }}
                    </h2>
                    <p class="text-[#4c9a4c] dark:text-[#8ed28e] text-lg font-normal">Manage your personal information and your favorite restaurants</p>
                </div>
            </div>

            <section class="bg-white dark:bg-[#1a2e1a] rounded-xl p-8 border border-[#cfe7cf] dark:border-[#2a4d2a] mb-8">
                <div class="max-w-3xl">
                    @include('profile.partials.update-profile-picture')
                </div>
            </section>

            <section class="bg-white dark:bg-[#1a2e1a] rounded-xl p-8 border border-[#cfe7cf] dark:border-[#2a4d2a] mb-8">
                <div class="max-w-3xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </section>

            <section class="mb-12 bg-white dark:bg-[#1a2e1a] p-8 rounded-xl border border-[#cfe7cf] dark:border-[#2a4d2a]">
                <h3 class="text-xl font-bold mb-6 flex items-center gap-2 dark:text-white">
                    <span class="material-symbols-outlined text-[#4c9a4c]">lock</span>
                    Update Password
                </h3>
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </section>

            <section class="mb-12">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold flex items-center gap-2 dark:text-white">
                        <span class="material-symbols-outlined text-[#4c9a4c]">favorite</span>
                        Favorite Restaurants
                    </h3>
                    <a class="text-[#4c9a4c] text-sm font-bold hover:underline" href="#">View all</a>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white dark:bg-[#1a2e1a] rounded-xl overflow-hidden border border-[#cfe7cf] dark:border-[#2a4d2a] group">
                        <div class="relative h-48 w-full overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800');"></div>
                            <div class="absolute top-3 right-3 bg-white/90 dark:bg-black/60 backdrop-blur rounded-full p-2 text-red-500">
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">favorite</span>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col gap-2">
                            <div class="flex justify-between items-start">
                                <h4 class="font-bold text-lg dark:text-white">Le Bistro Vert</h4>
                                <div class="flex items-center gap-1 text-yellow-500">
                                    <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
                                    <span class="text-sm font-bold dark:text-white">4.8</span>
                                </div>
                            </div>
                            <p class="text-sm text-[#4c9a4c]">French Cuisine • Paris 11e</p>
                            <button class="mt-2 w-full bg-[#4c9a4c] text-white font-bold py-2 rounded-lg hover:brightness-95 transition-all text-sm">
                                Book a table
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-red-50 dark:bg-red-900/10 p-8 rounded-xl border border-red-200 dark:border-red-900/30">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </section>
        </div>
    </main>
</x-app-layout>