<x-layouts.main :title="__('Account - Profile')">

    <div class="max-w-4xl mx-auto p-6">
      <!-- Header -->
      <div class="mb-8">
        <h1 class="text-4xl font-orbitron font-bold text-gradient mb-2">Account Profile</h1>
        <p class="text-slate-300">Manage your Imperial Arms account and pilot credentials</p>
      </div>

      <!-- Tabs -->
      <div class="space-y-6">

        <div class="grid grid-cols-3 gap-2 border border-slate-800 rounded-lg p-1 bg-slate-900/40">
          <a href="{{ route('profile.index') }}" class="rounded-md py-2 text-sm font-medium bg-slate-800/70 text-amber-400 text-center">Profile</a>
          <a href="{{ route('profile.security') }}" class="rounded-md py-2 text-sm font-medium text-slate-300 hover:bg-slate-800/50 text-center">Security</a>
          <a href="{{ route('profile.ships') }}" class="rounded-md py-2 text-sm font-medium text-slate-300 hover:bg-slate-800/50 text-center">Ships</a>
        </div>

        <!-- Profile Tab -->
        <section id="tab-profile" class="tab-pane block">
          <div class="bg-slate-900/50 border border-slate-800 rounded-lg shadow-sm">
            <div class="flex flex-col space-y-1.5 p-6 border-b border-slate-800">
              <h2 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2 text-slate-100">
                <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z"/></svg>
                Personal Information
              </h2>
              <p class="text-sm text-slate-400">Your pilot credentials and contact information</p>
            </div>

            <div class="p-6  space-y-6">
              <div class="flex justify-center mb-6">
                <livewire:avatar-uploader />
              </div>
              <div>
                <livewire:profile-main />
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>

</x-layouts.main>