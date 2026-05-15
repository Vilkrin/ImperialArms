<div>
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
                <p class="text-sm text-slate-400">Stat Blocks are placeholder for now, will be updated soon.</p>
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
                          <div class="flex items-center justify-between p-3 bg-slate-800/50 border border-slate-800 rounded-lg">

                              {{-- LEFT SIDE --}}
                              <div class="flex items-center gap-3">

                                  {{-- Ship Image --}}
                                  @if($memberShip->getFirstMediaUrl('images'))
                                      <img 
                                          src="{{ $memberShip->getFirstMediaUrl('images') }}" 
                                          class="h-10 w-10 object-cover rounded"
                                      >
                                  @else
                                      <div class="h-10 w-10 bg-slate-700 rounded flex items-center justify-center text-xs text-slate-400">
                                          N/A
                                      </div>
                                  @endif

                                  {{-- Ship Info --}}
                                  <div>
                                      <div class="font-medium text-slate-100">
                                          {{ $memberShip->manufacturer }} {{ $memberShip->model }}
                                            @if($memberShip->membership->name)
                                                <span class="text-xs text-slate-400">
                                                    ({{ $memberShip->membership->name }})
                                                </span>
                                            @endif
                                      </div>

                                      <div class="text-sm text-slate-300">
                                          {{ $memberShip->role ?? 'No role set' }}
                                      </div>

                                    <div class="text-xs text-slate-500">
                                        SN: {{ $memberShip->membership->serial_number ?? 'N/A' }}
                                    </div>
                                  </div>
                              </div>

                              {{-- RIGHT SIDE --}}
                              <div class="flex items-center gap-2">

                                  {{-- Status Dropdown --}}
                                    <select
                                        wire:change="updateStatus({{ $memberShip->membership->id }}, $event.target.value)"
                                        class="text-xs rounded-md border border-slate-700 bg-slate-900 text-slate-300 px-2 py-1"
                                    >

                                        <option value="active" @selected($memberShip->membership->status === 'active')>
                                            Active
                                        </option>

                                        <option value="maintenance" @selected($memberShip->membership->status === 'maintenance')>
                                            Maintenance
                                        </option>

                                        <option value="destroyed" @selected($memberShip->membership->status === 'destroyed')>
                                            Destroyed
                                        </option>

                                    </select>

                                  {{-- Remove Button --}}

                                    <flux:button
                                        type="button"
                                        variant="danger"
                                        wire:click="removeShip({{ $memberShip->membership->id }})"
                                        wire:confirm="Are you sure you want to remove this ship?"
                                        class="cursor-pointer"
                                    >
                                        Remove
                                    </flux:button>

                              </div>
                          </div>
                      @empty
                          <div class="text-slate-400 text-sm">
                              You have no ships assigned.
                          </div>
                      @endforelse
                  </div>
              </div>
          </div>
        </section>
      </div>
    </div>

    <flux:modal name="add-ship" class="md:w-96">
        <form wire:submit.prevent="addShip">

            <div class="space-y-6">

                <div>
                    <flux:heading size="lg">Add Ship</flux:heading>

                    <flux:text class="mt-2">
                        Select the ship to add to your fleet.
                    </flux:text>
                </div>

                {{-- Ship Select --}}
                <flux:select
                    wire:model="ship_id"
                    variant="listbox"
                    searchable
                    placeholder="Choose ship..."
                >
                    @foreach($ships as $ship)
                        <flux:select.option value="{{ $ship->id }}">
                            {{ $ship->manufacturer }} {{ $ship->model }}
                        </flux:select.option>
                    @endforeach
                </flux:select>

                {{-- Optional Custom Name --}}
                <flux:input
                    wire:model="name"
                    placeholder="Custom ship name (optional)"
                />

                {{-- Optional Serial Number --}}
                <flux:input
                    wire:model="serial_number"
                    placeholder="Custom serial number (optional)"
                />

                <div class="flex">
                    <flux:spacer />

                    <flux:button
                        type="submit"
                        variant="primary"
                        class="cursor-pointer"
                    >
                        Add Ship
                    </flux:button>
                </div>

            </div>
        </form>
    </flux:modal>
</div>
