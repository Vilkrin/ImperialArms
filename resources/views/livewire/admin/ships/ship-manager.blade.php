<div>
    <div class="space-y-6">

        <!-- Ship Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                    <h3 class="text-sm font-medium text-slate-400">Total Models</h3>
                </div>
                <div class="p-6 pt-0">
                    <div class="text-2xl font-bold text-slate-100">{{ $ships->count() }}</div>
                </div>
            </div>

            <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                    <h3 class="text-sm font-medium text-slate-400">Combat Ships</h3>
                </div>
                <div class="p-6 pt-0">
                    <div class="text-2xl font-bold text-red-600">{{ $ships->where('class', 'Combat')->count() }}</div>
                </div>
            </div>

            <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                    <h3 class="text-sm font-medium text-slate-400">Cargo Ships</h3>
                </div>
                <div class="p-6 pt-0">
                    <div class="text-2xl font-bold text-blue-600">{{ $ships->where('role', 'Cargo')->count() }}</div>
                </div>
            </div>

            <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
                <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                    <h3 class="text-sm font-medium text-slate-400">Multi-role</h3>
                </div>
                <div class="p-6 pt-0">
                    <div class="text-2xl font-bold text-green-600">{{ $ships->where('class', 'Multi-role')->count() }}</div>
                </div>
            </div>
        </div>

        <!-- Ships Table -->
        <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h3 class="text-2xl font-semibold text-slate-100">Ship List</h3>
                        <p class="text-sm text-slate-400 mt-1">Browse available Star Citizen ships and their specifications</p>
                    </div>

                    <flux:modal.trigger name="ship-form">
                        <flux:button icon="plus" variant="primary" color="amber" class="cursor-pointer">
                            Add Ship Model
                        </flux:button>
                    </flux:modal.trigger>
                </div>

                <div class="relative w-full overflow-auto">
                    <table class="w-full caption-bottom text-sm">
                        <thead class="[&_tr]:border-b">
                            <tr class="border-b border-slate-700 transition-colors hover:bg-slate-800/50">
                                <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Manufacturer</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Model</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Class</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Role</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Crew</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Cargo (SCU)</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="[&_tr:last-child]:border-0">
                            @forelse($ships as $ship)
                                <tr class="border-b border-slate-700 transition-colors hover:bg-slate-800/50">
                                    <td class="p-4 align-middle font-medium text-slate-100">{{ $ship->manufacturer }}</td>
                                    <td class="p-4 align-middle text-slate-100">{{ $ship->model }}</td>
                                    <td class="p-4 align-middle text-slate-100">{{ $ship->class ?? '—' }}</td>
                                    <td class="p-4 align-middle text-slate-100">{{ $ship->role ?? '—' }}</td>
                                    <td class="p-4 align-middle text-slate-100">{{ $ship->crew_required ?? '—' }}</td>
                                    <td class="p-4 align-middle text-slate-100">{{ $ship->cargo_capacity ?? '—' }}</td>

                                    <td class="p-4 align-middle">
                                        <div class="flex items-center gap-2">
                                            
                                            <flux:modal.trigger name="ship-form">
                                                <button
                                                    type="button"
                                                    wire:click="edit({{ $ship->id }})"
                                                    class="cursor-pointer inline-flex items-center justify-center h-9 w-9 border border-slate-700 bg-slate-900/50 rounded-md hover:bg-slate-800/50 transition-colors"
                                                >
                                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                    </svg>
                                                </button>
                                            </flux:modal.trigger>

                                            <button
                                                type="button"
                                                wire:click="delete({{ $ship->id }})"
                                                wire:confirm="Are you sure you want to delete this ship model?"
                                                class="cursor-pointer inline-flex items-center justify-center h-9 w-9 border border-red-700 bg-red-900/50 rounded-md hover:bg-red-800/50 transition-colors"
                                            >
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="p-4 text-center text-slate-400">
                                        No ship models have been added yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

            @persist('toast')
                <flux:toast />
            @endpersist

<flux:modal name="ship-form" class="md:w-[720px]">
    <form wire:submit.prevent="save" class="space-y-6">
        <div>
            <flux:heading size="lg">
                {{ $editingId ? 'Edit Ship Model' : 'Add Ship Model' }}
            </flux:heading>

            <flux:text class="mt-2">
                Enter the ship model details.
            </flux:text>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <flux:input wire:model="manufacturer" label="Manufacturer" required />
            <flux:input wire:model="model" label="Model" required />

            <flux:select 
                wire:model="class" 
                variant="combobox" 
                :filter="false"
            >
                <x-slot name="input">
                    <flux:select.input 
                        wire:model.live="classSearch" 
                        placeholder="Select or type class..." 
                    />
                </x-slot>

                @foreach($this->classOptions as $item)
                    <flux:select.option :value="$item">
                        {{ $item }}
                    </flux:select.option>
                @endforeach

                <flux:select.option.create wire:click="createClass" min-length="2">
                    Create "<span wire:text="classSearch"></span>"
                </flux:select.option.create>

                <x-slot name="empty">
                    <flux:select.option.empty when-loading="Loading classes...">
                        No classes found.
                    </flux:select.option.empty>
                </x-slot>
            </flux:select>

            <flux:select 
                wire:model="role" 
                variant="combobox" 
                :filter="false"
            >
                <x-slot name="input">
                    <flux:select.input 
                        wire:model.live="roleSearch" 
                        placeholder="Select or type role..." 
                    />
                </x-slot>

                @foreach($this->roleOptions as $item)
                    <flux:select.option :value="$item">
                        {{ $item }}
                    </flux:select.option>
                @endforeach

                <flux:select.option.create wire:click="createRole" min-length="2">
                    Create "<span wire:text="roleSearch"></span>"
                </flux:select.option.create>

                <x-slot name="empty">
                    <flux:select.option.empty when-loading="Loading roles...">
                        No roles found.
                    </flux:select.option.empty>
                </x-slot>
            </flux:select>

            <flux:input wire:model="crew_required" type="number" label="Crew Size" />
            <flux:input wire:model="cargo_capacity" type="number" label="Cargo Capacity (SCU)" />
            <flux:input wire:model="size" label="Size" placeholder="Ship Size" />
        </div>

        <flux:textarea
            wire:model="description"
            label="Description"
            placeholder="Enter a brief description of the ship model, its features, and intended use."
            rows="4"
        />

        <flux:input wire:model="image" type="file" label="Ship Image" />

        <div class="flex justify-end gap-4">
            <flux:modal.close>
                <flux:button type="button" variant="ghost" class="cursor-pointer">
                    Cancel
                </flux:button>
            </flux:modal.close>

            <flux:button type="submit" variant="primary" color="amber" class="cursor-pointer">
                {{ $editingId ? 'Update Ship Model' : 'Add Ship Model' }}
            </flux:button>
        </div>
    </form>
</flux:modal>

    </div>
</div>