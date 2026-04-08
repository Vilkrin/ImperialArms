<x-layouts.main :title="__('Account - Ships')">

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
          <a href="{{ route('profile.security') }}" class="rounded-md py-2 text-sm font-medium text-slate-300 hover:bg-slate-800/50 text-center">Security</a>
          <a href="{{ route('profile.ships') }}" class="rounded-md py-2 text-sm font-medium bg-slate-800/70 text-amber-400 text-center">Ships</a>
        </div>

        <!-- Ships Tab -->
        <section class="tab-pane">
          <div class="bg-slate-900/50 border border-amber-400/20 rounded-lg shadow">
            <div class="p-6 border-b border-slate-800 flex justify-between items-center">
              <div>
                <h2 class="text-xl font-semibold">Ships</h2>
                <p class="text-sm text-slate-400">Your fleet of ships and their status</p>
                <p class="text-sm text-slate-400">This is just a placeholder for the ship management section.</p>
              </div>
              <flux:modal.trigger name="add-ship">
                <flux:button variant="primary" color="amber" class="cursor-pointer">Add Ship</flux:button>
              </flux:modal.trigger>
            </div>


              @if ($errors->any())
                  <div>
                      <div>Something went wrong!</div>

                      <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              @if (session('status') === 'profile-information-updated')
                  <div class="mb-4 font-medium text-sm text-green-600">
                      Profile Info has been updated.
                  </div>
              @endif
            <div class="p-6 space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center p-4 border border-slate-800 rounded-lg">
                  <div class="text-2xl font-bold text-amber-400">15</div>
                  <div class="text-sm text-slate-300">Ships</div>
                </div>
                <div class="text-center p-4 border border-slate-800 rounded-lg">
                  <div class="text-2xl font-bold text-amber-400">12</div>
                  <div class="text-sm text-slate-300">Active Ships</div>
                </div>
                <div class="text-center p-4 border border-slate-800 rounded-lg">
                  <div class="text-2xl font-bold text-amber-400">47</div>
                  <div class="text-sm text-slate-300">Total Flight Hours</div>
                </div>
              </div>

              <div class="space-y-3">
                <h3 class="font-semibold">Ship List</h3>
                <div class="space-y-2">
                    @forelse($memberShips as $memberShip)
                        <p>{{ $memberShip->name }} - {{ $memberShip->pivot->name ?? 'No custom name' }}</p>
                    @empty
                        <p>You have no ships assigned.</p>
                    @endforelse
                  <div class="flex items-center justify-between p-3 bg-slate-800/50 border border-slate-800 rounded-lg">
                    <div> 
                      <div class="font-medium">AEGIS Vulcan</div>
                      <div class="text-sm text-slate-300">Support Ship</div>
                    </div>
                    <span class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-900 text-slate-300">Active</span>
                  </div>
                  <div class="flex items-center justify-between p-3 bg-slate-800/50 border border-slate-800 rounded-lg">
                    <div>
                      <div class="font-medium">RSI Hermes</div>
                      <div class="text-sm text-slate-300">Cargo Ship</div>
                    </div>
                    <span class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-900 text-slate-300">Maintenance</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
</x-layouts.main>

<flux:modal name="add-ship" class="md:w-96">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Add Ship</flux:heading>
            <flux:text class="mt-2">Select the ship to add to your fleet.</flux:text>
        </div>
            <flux:select variant="listbox" searchable placeholder="Choose ship...">
                <flux:select.option>Aegis Vulcan</flux:select.option>
                <flux:select.option>RSI Hermes</flux:select.option>
                <flux:select.option>RSI Apollo</flux:select.option>
                <flux:select.option>Drake Kraken</flux:select.option>
                <flux:select.option>Banu Merchentman</flux:select.option>
                <flux:select.option>Crusader E1</flux:select.option>
                <flux:select.option>Drake Corsair</flux:select.option>
            </flux:select>
        <div class="flex">
            <flux:spacer />
            <flux:button type="submit" variant="primary" class="cursor-pointer">Add Ship</flux:button>
        </div>
    </div>
</flux:modal>