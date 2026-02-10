<x-guest-layout>
    <div class="flex flex-col gap-2 mb-8">
        <h1 class="text-[#0d1b0d] dark:text-[#f8fcf8] text-3xl font-black tracking-tight lg:text-4xl">Create account</h1>
        <p class="text-[#4c9a4c] dark:text-[#a3d4a3]">Join us to get started with YouCo'Done.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div class="flex flex-col gap-1">
            <label for="name" class="text-sm font-medium pb-1">Full Name</label>
            <div class="relative group">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#4c9a4c] text-xl group-focus-within:text-primary">person</span>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus
                    class="w-full pl-12 rounded-xl border-[#cfe7cf] dark:border-[#2e4d2e] bg-white dark:bg-[#1b301b] focus:ring-2 focus:ring-primary/50 focus:border-primary h-14" 
                    placeholder="Enter your full name">
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-1" />
        </div>

        <div class="flex flex-col gap-1">
            <label for="email" class="text-sm font-medium pb-1">Role</label>
            <div class="relative group">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#4c9a4c] text-xl group-focus-within:text-primary">badge</span>
                <select id="role" name="role_id" required
                    class="w-full pl-12 rounded-xl border-[#cfe7cf] dark:border-[#2e4d2e] bg-white dark:bg-[#1b301b] focus:ring-2 focus:ring-primary/50 focus:border-primary h-14">
                    <option value="" disabled selected>Select your role</option>
                    <option value="2" {{ old('role_id') == 2 ? 'selected' : '' }}>Client</option>
                    <option value="3" {{ old('role_id') == 3 ? 'selected' : '' }}>Restaurateur</option>
                </select>
        </div>

        <div class="flex flex-col gap-1">
            <label for="email" class="text-sm font-medium pb-1">Email Address</label>
            <div class="relative group">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#4c9a4c] text-xl group-focus-within:text-primary">mail</span>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required
                    class="w-full pl-12 rounded-xl border-[#cfe7cf] dark:border-[#2e4d2e] bg-white dark:bg-[#1b301b] focus:ring-2 focus:ring-primary/50 focus:border-primary h-14" 
                    placeholder="name@example.com">
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <div class="flex flex-col gap-1">
            <label for="password" class="text-sm font-medium pb-1">Password</label>
            <div class="relative group">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#4c9a4c] text-xl group-focus-within:text-primary">lock</span>
                <input id="password" name="password" type="password" required
                    class="w-full pl-12 rounded-xl border-[#cfe7cf] dark:border-[#2e4d2e] bg-white dark:bg-[#1b301b] focus:ring-2 focus:ring-primary/50 focus:border-primary h-14" 
                    placeholder="••••••••">
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <div class="flex flex-col gap-1">
            <label for="password_confirmation" class="text-sm font-medium pb-1">Confirm Password</label>
            <div class="relative group">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#4c9a4c] text-xl group-focus-within:text-primary">shield_lock</span>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                    class="w-full pl-12 rounded-xl border-[#cfe7cf] dark:border-[#2e4d2e] bg-white dark:bg-[#1b301b] focus:ring-2 focus:ring-primary/50 focus:border-primary h-14" 
                    placeholder="••••••••">
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
        </div>

        <button type="submit" class="flex w-full items-center justify-center rounded-xl h-14 bg-primary text-[#0d1b0d] text-lg font-black hover:shadow-lg hover:shadow-primary/20 transition-all active:scale-[0.98]">
            Create Account
        </button>
    </form>

    <p class="text-center text-[#4c9a4c] text-sm pt-6">
        Already have an account? 
        <a class="text-primary font-bold hover:underline" href="{{ route('login') }}">Log in</a>
    </p>
</x-guest-layout>