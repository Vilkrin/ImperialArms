<div>
    <div class="bg-slate-900/50 border border-slate-700 rounded-lg backdrop-blur-sm shadow-sm">
        <div class="p-6 border-b border-slate-700">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <h2 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2 text-slate-100">
                    <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    Permissions Management
                </h2>

                <div class="flex items-center gap-2">
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>

                        <input
                            wire:model.live="search"
                            placeholder="Search permissions..."
                            class="flex h-10 w-64 rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm pl-10 placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                        />
                    </div>

                    <flux:button wire:click="createPermission" variant="primary" color="amber" class="cursor-pointer">
                        Add New Permission
                    </flux:button>
                </div>
            </div>
        </div>

        <div class="p-6">
            @if ($showForm)
                <div class="mb-6 p-4 border border-slate-700 rounded-lg bg-slate-800/20 space-y-4">
                    <div class="flex items-center justify-between">
                        <h3 class="font-semibold text-slate-100 flex items-center gap-2">
                            {{ $editingId ? 'Edit Permission' : 'Add New Permission' }}
                        </h3>

                        <button wire:click="cancel" class="p-1 hover:bg-slate-700 rounded transition-colors cursor-pointer">
                            <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
                            </svg>
                        </button>
                    </div>

                    <form wire:submit="save" class="space-y-4">
                        <div>
                            <label class="text-sm font-medium text-slate-200">Permission Name</label>

                            <input
                                wire:model="name"
                                placeholder="Enter permission name, e.g. create.users"
                                class="mt-1 flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"
                            />

                            @error('name')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="text-sm font-medium text-slate-200">Assign to Roles</label>

                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 mt-2 p-3 border border-slate-700 rounded-md bg-slate-900/50">
                                @foreach ($roles as $role)
                                    <label class="flex items-center space-x-2 cursor-pointer">
                                        <input
                                            type="checkbox"
                                            wire:model="selectedRoles"
                                            value="{{ $role->name }}"
                                            class="h-4 w-4 rounded border-slate-700 text-amber-400 focus:ring-amber-400"
                                        >

                                        <span class="text-sm text-slate-300">
                                            {{ str($role->name)->replace(['-', '_'], ' ')->title() }}
                                        </span>
                                    </label>
                                @endforeach
                            </div>

                            @error('selectedRoles')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex gap-2">
                            <flux:button type="submit" variant="primary" color="amber" class="cursor-pointer">
                                {{ $editingId ? 'Update Permission' : 'Create Permission' }}
                            </flux:button>

                            <flux:button type="button" wire:click="cancel" variant="ghost" class="cursor-pointer">
                                Cancel
                            </flux:button>
                        </div>
                    </form>
                </div>
            @endif

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-slate-700">
                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Permission Name</th>
                            <th class="h-12 px-4 text-left align-middle font-medium text-slate-400">Roles Assigned</th>
                            <th class="h-12 px-4 text-right align-middle font-medium text-slate-400">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($permissions as $permission)
                            <tr class="border-b border-slate-700 transition-colors hover:bg-slate-800/50">
                                <td class="p-4 align-middle">
                                    <div>
                                        <div class="font-medium text-slate-100">
                                            {{ str($permission->name)->replace(['.', '-', '_'], ' ')->title() }}
                                        </div>

                                        <div class="text-sm text-slate-400 font-mono">
                                            {{ $permission->name }}
                                        </div>
                                    </div>
                                </td>

                                <td class="p-4 align-middle">
                                    <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold border-slate-700 bg-slate-800 text-slate-300">
                                        {{ $permission->roles_count }}
                                        {{ Str::plural('role', $permission->roles_count) }}
                                    </span>
                                </td>

                                <td class="p-4 align-middle text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            wire:click="editPermission({{ $permission->id }})"
                                            class="inline-flex items-center justify-center h-9 w-9 hover:bg-amber-400/10 hover:text-amber-400 rounded transition-colors cursor-pointer"
                                        >
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>

                                        <button
                                            wire:click="deletePermission({{ $permission->id }})"
                                            wire:confirm="Are you sure you want to delete this permission?"
                                            class="inline-flex items-center justify-center h-9 w-9 hover:bg-red-400/10 hover:text-red-400 rounded transition-colors cursor-pointer"
                                        >
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="p-4 text-center text-slate-400">
                                    No permissions found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                {{ $permissions->links() }}
            </div>
        </div>
    </div>
</div>