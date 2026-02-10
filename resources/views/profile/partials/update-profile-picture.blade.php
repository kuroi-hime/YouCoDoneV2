<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Picture') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Update your avatar to personalize your profile.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="flex items-center gap-6">
            <div class="relative group cursor-pointer" onclick="document.getElementById('profile_photo_input').click()">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-24 w-24 border-4 border-[#4c9a4c]/20 shadow-sm" 
                     style='background-image: url("{{ $user->image ? asset("storage/" . $user->image->url) : "https://ui-avatars.com/api/?name=".urlencode($user->name) }}");'>
                </div>
                
                <div class="absolute inset-0 bg-black/40 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <span class="material-symbols-outlined text-white text-sm">photo_camera</span>
                </div>

                <input id="profile_photo_input" name="profile_photo" type="file" class="hidden" accept="image/*" onchange="this.form.submit()" />
            </div>

            <div class="flex flex-col gap-2">
                <x-primary-button type="button" onclick="document.getElementById('profile_photo_input').click()" class="bg-[#4c9a4c] hover:bg-[#3d7a3d]">
                    {{ __('Change Photo') }}
                </x-primary-button>
                <x-input-error :messages="$errors->get('profile_photo')" />
            </div>
        </div>

        @if (session('status') === 'profile-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ __('Photo updated.') }}</p>
        @endif
    </form>
</section>