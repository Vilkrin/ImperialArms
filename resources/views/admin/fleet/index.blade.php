<x-layouts.admin :title="__('Fleet Management')">

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

                    @if(session('success'))
                        <div 
                            x-data="{ show: true }" 
                            x-show="show"
                            x-transition
                            class="mb-4 rounded-lg border border-green-500/50 bg-green-500/10 p-4 text-green-400 flex justify-between items-center"
                        >
                            <span>{{ session('success') }}</span>

                            <button 
                                @click="show = false"
                                class="ml-4 text-green-400 hover:text-green-300 transition"
                            >
                                ✕
                            </button>
                        </div>
                    @endif

                    @if(session('error') && !$errors->any())
                        <div 
                            x-data="{ show: true }" 
                            x-show="show"
                            x-transition
                            class="mb-4 rounded-lg border border-red-500/50 bg-red-500/10 p-4 text-red-400 flex justify-between items-center"
                        >
                            <span>{{ session('error') }}</span>

                            <button 
                                @click="show = false"
                                class="ml-4 text-red-400 hover:text-red-300 transition"
                            >
                                ✕
                            </button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div 
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            class="mb-4 rounded-lg border border-red-500/50 bg-red-500/10 p-4 text-red-400"
                        >
                            <div class="flex justify-between items-start">
                                <ul class="list-disc list-inside space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>

                                <button 
                                    @click="show = false"
                                    class="ml-4 text-red-400 hover:text-red-300 transition"
                                >
                                    ✕
                                </button>
                            </div>
                        </div>
                    @endif

                    <!-- Fleet Roster Table -->
                    <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h3 class="text-2xl font-semibold text-slate-100">Fleet Roster</h3>
                                    <p class="text-sm text-slate-400 mt-1">Player submitted ships in your organization</p>
                                </div>
                                <flux:modal.trigger name="add-ship">
                                    <flux:button variant="primary" color="amber">Add Ship</flux:button>
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
                                        <tr class="border-b border-slate-700 transition-colors hover:bg-slate-800/50">
                                            <td class="p-4 align-middle font-medium text-slate-100">Iron Sentinel</td>
                                            <td class="p-4 align-middle text-slate-100">Imperial Arms Fleet</td>
                                            <td class="p-4 align-middle text-slate-100">Aegis Dynamics</td>
                                            <td class="p-4 align-middle text-slate-100">Javelin Destroyer</td>
                                            <td class="p-4 align-middle text-slate-100">Destroyer</td>
                                            <td class="p-4 align-middle">
                                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-green-500/20 text-green-400 border-green-500/50">Active</span>
                                            </td>
                                            <td class="p-4 align-middle">
                                                <div class="flex space-x-2">
                                                    <a href="edit-ship.html" class="inline-flex items-center justify-center h-9 px-3 border border-slate-700 bg-slate-900/50 rounded-md text-sm hover:bg-slate-800/50 transition-colors">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                        </svg>
                                                    </a>
                                                    <button class="inline-flex items-center justify-center h-9 px-3 border border-slate-700 bg-slate-900/50 rounded-md text-sm hover:bg-slate-800/50 transition-colors">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr class="border-b border-slate-700 transition-colors hover:bg-slate-800/50">
                                            <td class="p-4 align-middle font-medium text-slate-100">Star Wanderer</td>
                                            <td class="p-4 align-middle text-slate-100">Marcus Chen</td>
                                            <td class="p-4 align-middle text-slate-100">Roberts Space Industries</td>
                                            <td class="p-4 align-middle text-slate-100">Constellation Andromeda</td>
                                            <td class="p-4 align-middle text-slate-100">Multi-role</td>
                                            <td class="p-4 align-middle">
                                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-blue-500/20 text-blue-400 border-blue-500/50">Deployed</span>
                                            </td>
                                            <td class="p-4 align-middle">
                                                <div class="flex space-x-2">
                                                    <a href="edit-ship.html" class="inline-flex items-center justify-center h-9 px-3 border border-slate-700 bg-slate-900/50 rounded-md text-sm hover:bg-slate-800/50 transition-colors">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                        </svg>
                                                    </a>
                                                    <button class="inline-flex items-center justify-center h-9 px-3 border border-slate-700 bg-slate-900/50 rounded-md text-sm hover:bg-slate-800/50 transition-colors">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr class="transition-colors hover:bg-slate-800/50">
                                            <td class="p-4 align-middle font-medium text-slate-100">Lightning Strike</td>
                                            <td class="p-4 align-middle text-slate-100">Sarah Mitchell</td>
                                            <td class="p-4 align-middle text-slate-100">Anvil Aerospace</td>
                                            <td class="p-4 align-middle text-slate-100">F7C Hornet</td>
                                            <td class="p-4 align-middle text-slate-100">Fighter</td>
                                            <td class="p-4 align-middle">
                                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-yellow-500/20 text-yellow-400 border-yellow-500/50">Maintenance</span>
                                            </td>
                                            <td class="p-4 align-middle">
                                                <div class="flex space-x-2">
                                                    <a href="edit-ship.html" class="inline-flex items-center justify-center h-9 px-3 border border-slate-700 bg-slate-900/50 rounded-md text-sm hover:bg-slate-800/50 transition-colors">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                        </svg>
                                                    </a>
                                                    <button class="inline-flex items-center justify-center h-9 px-3 border border-slate-700 bg-slate-900/50 rounded-md text-sm hover:bg-slate-800/50 transition-colors">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

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
                                                    <form method="POST" action="{{ route('admin.fleet.destroy', $memberShip->id) }}">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit"
                                                            class="inline-flex items-center justify-center h-9 px-3 border border-red-700 bg-red-900/50 rounded-md text-sm hover:bg-red-800/50 transition-colors">
                                                            Remove
                                                        </button>
                                                    </form>
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
                    <form method="POST" action="{{ route('admin.fleet.store') }}">
                        @csrf

                        <div class="space-y-6">
                            <div>
                                <flux:heading size="lg">Add Ship</flux:heading>
                                <flux:text class="mt-2">
                                    Add an Org Member's Ship to the fleet.
                                </flux:text>
                            </div>

                            <flux:select 
                                name="membership_id" 
                                variant="listbox" 
                                searchable 
                                placeholder="Choose Ship..."
                            >
                                @foreach($availableShips as $ship)
                                    <flux:select.option value="{{ $ship->id }}">
                                        {{ $ship->user->name }} — 
                                        {{ $ship->ship->manufacturer }} {{ $ship->ship->model }}
                                    </flux:select.option>
                                @endforeach
                            </flux:select>

                            <div class="flex">
                                <flux:spacer />

                                <flux:button type="submit" variant="primary" class="cursor-pointer">
                                    Add to Fleet
                                </flux:button>
                            </div>
                        </div>
                    </form>
                </flux:modal>

</x-layouts.admin>

