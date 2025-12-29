<x-layouts.main :title="__('Home')">

    <div class="max-w-4xl mx-auto p-6">
      <!-- Header -->
      <div class="mb-8">
        <h1 class="text-4xl font-orbitron font-bold text-gradient mb-2">Account Profile</h1>
        <p class="text-slate-300">Manage your Imperial Arms account and pilot credentials</p>
      </div>

      <!-- Tabs -->
      <div class="space-y-6">

        <flux:tab.group>
            <flux:tabs variant="segmented" class="w-full flex gap-2! border! border-slate-800! rounded-lg bg-slate-900/40!"
                wire:model="tab">
                <flux:tab name="profile" class="flex-1 text-center text-slate-300 hover:bg-slate-800/50">Profile</flux:tab>
                <flux:tab name="security" class="flex-1 text-center text-slate-300 hover:bg-slate-800/50">Security</flux:tab>
                <flux:tab name="myships" class="flex-1 text-center text-slate-300 hover:bg-slate-800/50">My Ships</flux:tab>
            </flux:tabs>

            <flux:tab.panel name="profile">

                <div class="bg-slate-900/50 border border-amber-400/20 rounded-lg shadow-sm">
                  <div class="flex flex-col space-y-1.5 p-6">
                    <h2 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2 text-slate-100">
                      <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z"/></svg>
                      Personal Information
                    </h2>
                    <p class="text-sm text-slate-400">Your pilot credentials and contact information</p>
                  </div>

                      <div>

                          @if (session()->has('message'))

                              <div class="alert alert-success">

                                  {{ session('message') }}

                              </div>

                          @endif

                      </div>

                  <div class="p-6 pt-0 space-y-6">
                    <div class="flex justify-center mb-6">

                      <livewire:avatar-uploader />

                    </div>

                      <livewire:profile-main />
            
                  </div>                 
                </div>

            </flux:tab.panel>
            <flux:tab.panel name="security">
             
                <div class="bg-slate-900/50 border border-amber-400/20 rounded-lg shadow">
                  <div class="p-6 border-b border-slate-800">
                    <h2 class="text-xl font-semibold flex items-center gap-2">
                      <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.657 0 3-1.567 3-3.5S13.657 4 12 4 9 5.567 9 7.5 10.343 11 12 11z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21v-2a4 4 0 00-4-4H9a4 4 0 00-4 4v2"/></svg>
                      Security Settings
                    </h2>
                    <p class="text-sm text-slate-400">Manage your account security and authentication</p>
                  </div>
                      <div>

                          @if (session()->has('message'))

                              <div class="alert alert-success">

                                  {{ session('message') }}

                              </div>

                          @endif

                      </div>
                  <div class="p-6 space-y-6">
                  <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    
                    <div>
                      <label class="text-sm font-medium text-slate-200">Change Password</label>
                      <div class="mt-2 space-y-3">
                        <input type="password" placeholder="Current password" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                        <input type="password" placeholder="New password" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                        
                        <input type="password" placeholder="Confirm new password" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                          @error('confirm_password')
                              <span role="alert" class="text-danger">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                        <button class="inline-flex items-center justify-center h-9 px-4 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300">Update Password</button>
                      </div>

                    </div>

                    <div class="pt-4 border-t border-slate-800">
                      <label class="text-sm font-medium text-slate-200">Two-Factor Authentication</label>
                      <div class="mt-2 flex items-center justify-between">
                        <p class="text-sm text-slate-300">Coming Soon - Not implemented yet.</p>
   
                      </div>
                      <div class="mt-2 flex items-center justify-between">
                        <p class="text-sm text-slate-300">Add an extra layer of security to your account</p>
                        <button class="inline-flex items-center justify-center h-9 px-4 border border-slate-700 bg-slate-900/50 rounded-md text-sm text-slate-300 hover:bg-slate-800/50">Enable 2FA</button>
                      </div>
                    </div>

                  </form>

                  </div>
                </div>
              
            </flux:tab.panel>
            <flux:tab.panel name="myships">

                <div class="bg-slate-900/50 border border-amber-400/20 rounded-lg shadow">
                  <div class="p-6 border-b border-slate-800">
                    <h2 class="text-xl font-semibold">Your Ships</h2>
                    <p class="text-sm text-slate-400">Coming soon </p>
                  </div>

                  <div class="p-6 space-y-6">
                    
                  </div>

                    <div class="space-y-3">

                    </div>
                  </div>
                </div>

            </flux:tab.panel>
        </flux:tab.group>

      </div>
    </div>

</x-layouts.main>