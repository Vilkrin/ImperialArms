<div>

                  <div class="space-y-6">
                    <!-- Fleet Overview Stats -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                                <h3 class="text-sm font-medium text-slate-400">Total Ships</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="text-2xl font-bold text-slate-100">
                                      {{ $memberShips->count() }}
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                                <h3 class="text-sm font-medium text-slate-400">Active</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="text-2xl font-bold text-green-600">
                                  {{ $memberShips->where('status', 'active')->count() }}
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                                <h3 class="text-sm font-medium text-slate-400">Deployed</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="text-2xl font-bold text-blue-600">
                                  {{ $memberShips->where('status', 'deployed')->count() }}
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                            <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                                <h3 class="text-sm font-medium text-slate-400">Maintenance</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="text-2xl font-bold text-yellow-600">
                                  {{ $memberShips->where('status', 'maintenance')->count() }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fleet Roster Table -->
                    <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h3 class="text-2xl font-semibold text-slate-100">Fleet Roster</h3>
                                    <p class="text-sm text-slate-400 mt-1">Player submitted ships in your organization</p>
                                </div>
                                <flux:modal.trigger name="add-ship">
                                    <flux:button variant="primary" color="amber" class="cursor-pointer">Add Ship</flux:button>
                                </flux:modal.trigger>
                            </div>
                            
                            <div class="relative w-full overflow-auto">
                                <table class="w-full caption-bottom text-sm">
                                    <thead class="[&_tr]:border-b">
                                        <tr class="border-b border-slate-700 transition-colors hover:bg-slate-800/50">
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Ship Name</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Owner</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Manufacturer</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Model</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Class</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Status</th>
                                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="[&_tr:last-child]:border-0">
                                    @forelse($memberShips as $memberShip)
                                        <tr class="border-b border-slate-700 transition-colors hover:bg-slate-800/50">

                                            {{-- Ship Name --}}
                                            <td class="p-4 align-middle font-medium text-slate-100">
                                                {{ $memberShip->name ?? $memberShip->ship->model }}
                                            </td>

                                            {{-- Owner --}}
                                            <td class="p-4 align-middle text-slate-100">
                                                {{ $memberShip->user->name }}
                                            </td>

                                            {{-- Manufacturer --}}
                                            <td class="p-4 align-middle text-slate-100">
                                                {{ $memberShip->ship->manufacturer }}
                                            </td>

                                            {{-- Model --}}
                                            <td class="p-4 align-middle text-slate-100">
                                                {{ $memberShip->ship->model }}
                                            </td>

                                            {{-- Class --}}
                                            <td class="p-4 align-middle text-slate-100">
                                                {{ $memberShip->ship->class }}
                                            </td>

                                            {{-- Status --}}
                                            <td class="p-4 align-middle">
                                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold
                                                    @if($memberShip->status === 'active') bg-green-500/20 text-green-400 border-green-500/50
                                                    @elseif($memberShip->status === 'deployed') bg-blue-500/20 text-blue-400 border-blue-500/50
                                                    @elseif($memberShip->status === 'maintenance') bg-yellow-500/20 text-yellow-400 border-yellow-500/50
                                                    @else bg-slate-500/20 text-slate-400 border-slate-500/50
                                                    @endif
                                                ">
                                                    {{ ucfirst($memberShip->status) }}
                                                </span>
                                            </td>

                                            {{-- Actions --}}
                                            <td class="p-4 align-middle">
                                                <div class="flex space-x-2">
                                                    {{-- Remove from Fleet --}}
                                                    
                                                    <button 
                                                        type="button"
                                                        wire:click="removeFromFleet({{ $memberShip->id }})"
                                                        class="inline-flex items-center justify-center h-9 px-3 border border-red-700 bg-red-900/50 rounded-md text-sm hover:bg-red-800/50 transition-colors cursor-pointer"
                                                    >
                                                        Remove
                                                    </button>
                                                    
                                                </div>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="p-4 text-center text-slate-400">
                                                No player ships found.
                                            </td>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>

                <flux:modal name="add-ship" class="md:w-96">
                    <div class="space-y-6">
                        <div>
                            <flux:heading size="lg">Add Ship</flux:heading>
                            <flux:text class="mt-2">
                                Add an Org Member's Ship to the fleet.
                            </flux:text>
                        </div>

                        <flux:select 
                            wire:model="membershipId"
                            variant="listbox" 
                            searchable 
                            placeholder="Choose Ship..."
                        >
                            @foreach($availableShips as $ship)
                                <flux:select.option :value="$ship->id">
                                    {{ $ship->user->name }} — {{ $ship->ship->manufacturer }} {{ $ship->ship->model }}
                                </flux:select.option>
                            @endforeach
                        </flux:select>

                        <div class="flex">
                            <flux:spacer />

                            <flux:button 
                                type="button" 
                                wire:click="addToFleet"
                                variant="primary" 
                                class="cursor-pointer"
                            >
                                Add to Fleet
                            </flux:button>
                        </div>
                    </div>
                </flux:modal>

</div>
