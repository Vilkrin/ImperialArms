<x-layouts.main :title="__('Account - Security')">

    <div class="max-w-4xl mx-auto p-6">
      <!-- Header -->
      <div class="mb-8">
        <h1 class="text-4xl font-orbitron font-bold text-gradient mb-2">Account Profile</h1>
        <p class="text-slate-300">Manage your Imperial Arms account and pilot credentials</p>
      </div>

      <!-- Tabs -->
      <div class="space-y-6">
        <div class="grid grid-cols-3 gap-2 border border-slate-800 rounded-lg p-1 bg-slate-900/40">
          <a href="{{ route('profile.index') }}" class="rounded-md py-2 text-sm font-medium text-slate-300 hover:bg-slate-800/50 text-center">Profile</a>
          <a href="{{ route('profile.security') }}" class="rounded-md py-2 text-sm font-medium bg-slate-800/70 text-amber-400 text-center">Security</a>
          <a href="{{ route('profile.ships') }}" class="rounded-md py-2 text-sm font-medium text-slate-300 hover:bg-slate-800/50 text-center">Ships</a>
        </div>

        <!-- Security Tab -->
        <section class="tab-pane">
          <div class="bg-slate-900/50 border border-amber-400/20 rounded-lg shadow">
            <div class="p-6 border-b border-slate-800">
              <h2 class="text-xl font-semibold flex items-center gap-2">
                <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.657 0 3-1.567 3-3.5S13.657 4 12 4 9 5.567 9 7.5 10.343 11 12 11z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21v-2a4 4 0 00-4-4H9a4 4 0 00-4 4v2"/></svg>
                Security Settings
              </h2>
              <p class="text-sm text-slate-400">Manage your account security and authentication</p>
            </div>

            <div class="p-6 space-y-6">


              <livewire:profile-security />


            </div>
          </div>
              @persist('toast')
                <flux:toast />
              @endpersist
        </section>

      </div>
    </div>

</x-layouts.main>