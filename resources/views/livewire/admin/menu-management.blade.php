                <div class="space-y-6">
                    <section class="bg-slate-900/50 border border-slate-700 rounded-lg p-4 flex items-start gap-3">
                        <svg class="h-5 w-5 text-amber-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <p class="text-sm text-slate-400">
                            Use the grip icon to indicate order control, edit existing links, and add dropdown sub-links for navbar items.
                            Footer columns and links are managed in the Footer tab.
                        </p>
                    </section>

                    <!-- Tabs -->
                    <section class="space-y-4">
                        <div class="menu-tabs">
                            <flux:tab.group>
                                <flux:tabs variant="segmented" wire:model="tab">
                                    <flux:tab name="main_navbar" class="cursor-pointer"> 
                                    Main Navbar
                                    <span class="ml-1 text-xs text-slate-300">(8)</span>
                                    </flux:tab>
                                    <flux:tab name="footer" class="cursor-pointer">
                                        Footer
                                        <span class="ml-1 text-xs text-slate-300">(3)</span>
                                    </flux:tab>
                                </flux:tabs>

                                <flux:tab.panel name="main_navbar">

                                    <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-4 space-y-4">
                                        <div class="flex items-center justify-between gap-3">
                                            <div>
                                                <h2 class="font-orbitron text-lg text-slate-100">
                                                    Primary Navigation
                                                </h2>

                                                <p class="text-sm text-slate-400">
                                                    Top-level links and their dropdown sub-links.
                                                </p>
                                            </div>

                                            <flux:button
                                                wire:click="addItem"
                                                variant="primary"
                                                color="amber"
                                                icon="plus"
                                                class="cursor-pointer"
                                            >
                                                Add Link
                                            </flux:button>
                                        </div>

                                        <div class="space-y-3">
                                            <div wire:sort="sortItems" class="space-y-3">
                                            @foreach ($this->navbarMenu?->items ?? [] as $item)
                                                <div
                                                    wire:key="navbar-item-{{ $item->id }}"
                                                    wire:sort:item="{{ $item->id }}"
                                                    class="space-y-2"
                                                >
                                                    <div class="flex items-center gap-3 p-3 bg-slate-900/50 border border-slate-700 rounded-lg">
                                                        <div
                                                            wire:sort:handle
                                                            class="text-slate-500 hover:text-amber-400 transition-colors cursor-grab active:cursor-grabbing"
                                                        >
                                                            <svg
                                                                class="h-4 w-4"
                                                                viewBox="0 0 20 20"
                                                                fill="currentColor"
                                                                aria-hidden="true"
                                                            >
                                                                <path d="M7 4.5a1 1 0 11-2 0 1 1 0 012 0ZM7 10a1 1 0 11-2 0 1 1 0 012 0ZM7 15.5a1 1 0 11-2 0 1 1 0 012 0ZM15 4.5a1 1 0 11-2 0 1 1 0 012 0ZM15 10a1 1 0 11-2 0 1 1 0 012 0ZM15 15.5a1 1 0 11-2 0 1 1 0 012 0Z" />
                                                            </svg>
                                                        </div>

                                                        <div class="flex-1 min-w-0">
                                                            <div class="grid grid-cols-[24px_1fr] gap-x-2">

                                                                <div class="row-span-2 flex items-center justify-center">
                                                                    <x-navigation.nav-item :item="$item" />
                                                                </div>

                                                                <div class="flex items-center gap-2">
                                                                    <span class="font-medium truncate">
                                                                        {{ $item->title }}
                                                                    </span>

                                                                    @if ($item->children->count())
                                                                        <span class="inline-flex items-center rounded-full border px-2 py-0.5 text-xs border-slate-700 text-slate-300 bg-slate-800/70">
                                                                            {{ $item->children->count() }}
                                                                        </span>
                                                                    @endif
                                                                </div>

                                                                <div class="text-xs text-slate-400 font-mono truncate">
                                                                    {{ $item->url }}
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="flex items-center gap-1">
                                                            <button
                                                                wire:click="addItem({{ $item->id }})"
                                                                class="p-2 rounded hover:bg-slate-800/60 text-slate-300 text-xs"
                                                            >
                                                                Sub-link
                                                            </button>

                                                            <button
                                                                wire:click="editItem({{ $item->id }})"
                                                                class="p-2 rounded hover:bg-slate-800/60"
                                                            >
                                                                <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                                </svg>
                                                            </button>

                                                            <button
                                                                wire:click="deleteItem({{ $item->id }})"
                                                                wire:confirm="Delete this menu item?"
                                                                class="p-2 rounded hover:bg-red-500/10"
                                                            >
                                                                <svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    @if ($item->children->isNotEmpty())
                                                        <div wire:sort="sortItems" class="ml-6 pl-4 border-l border-slate-700 space-y-2">
                                                            @foreach ($item->children as $link)
                                                                <div
                                                                    wire:key="navbar-child-{{ $link->id }}"
                                                                    wire:sort:item="{{ $link->id }}"
                                                                    class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"
                                                                >
                                                                <div
                                                                    wire:sort:handle
                                                                    class="flex items-center text-slate-500 hover:text-slate-300 cursor-move"
                                                                >
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="h-4 w-4"
                                                                        fill="none"
                                                                        viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M8 6h.01M8 12h.01M8 18h.01M16 6h.01M16 12h.01M16 18h.01" />
                                                                    </svg>
                                                                    </div>

                                                                    <div class="flex-1 min-w-0">
                                                                        <div class="font-medium truncate">
                                                                            {{ $link->title }}
                                                                        </div>

                                                                        <div class="text-xs text-slate-400 font-mono truncate">
                                                                            {{ $link->url }}
                                                                        </div>
                                                                    </div>

                                                                    <div class="flex items-center gap-1">
                                                                        <button
                                                                            wire:click="editItem({{ $link->id }})"
                                                                            class="p-2 rounded hover:bg-slate-800/60"
                                                                        >
                                                                            <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                                            </svg>
                                                                        </button>

                                                                        <button
                                                                            wire:click="deleteItem({{ $link->id }})"
                                                                            wire:confirm="Delete this sub-link?"
                                                                            class="p-2 rounded hover:bg-red-500/10"
                                                                        >
                                                                            <svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                          </div>
                                        </div>
                                    </div>

                                </flux:tab.panel>

                                <flux:tab.panel name="footer">

                                    <div class="space-y-4">
                                        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-4 space-y-4">
                                            <div class="flex items-center justify-between gap-3">
                                                <div>
                                                    <h2 class="font-orbitron text-lg text-slate-100">
                                                        Footer Links
                                                    </h2>

                                                    <p class="text-sm text-slate-400">
                                                        Manage footer columns and their links.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="flex items-end gap-2">
                                                <div class="flex-1">
                                                    <flux:input
                                                        label="New footer column"
                                                        wire:model="newFooterColumn"
                                                        placeholder="e.g. Resources"
                                                    />
                                                </div>

                                                <flux:button
                                                    wire:click="addFooterColumn"
                                                    variant="primary"
                                                    color="amber"
                                                    icon="plus"
                                                >
                                                    Add Column
                                                </flux:button>
                                            </div>
                                        </div>

                                        <div wire:sort="sortItems" class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                                            @foreach ($this->footerMenu?->items ?? [] as $column)
                                                <div
                                                    wire:key="footer-column-{{ $column->id }}"
                                                    wire:sort:item="{{ $column->id }}"
                                                    class="bg-slate-900/50 border border-slate-700 rounded-lg p-4 space-y-3"
                                                >
                                                    <div class="flex items-center gap-2">
                                                        <div
                                                            wire:sort:handle
                                                            class="text-slate-500 hover:text-amber-400 transition-colors cursor-grab active:cursor-grabbing"
                                                        >
                                                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                <path d="M7 4.5a1 1 0 11-2 0 1 1 0 012 0ZM7 10a1 1 0 11-2 0 1 1 0 012 0ZM7 15.5a1 1 0 11-2 0 1 1 0 012 0ZM15 4.5a1 1 0 11-2 0 1 1 0 012 0ZM15 10a1 1 0 11-2 0 1 1 0 012 0ZM15 15.5a1 1 0 11-2 0 1 1 0 012 0Z" />
                                                            </svg>
                                                        </div>

                                                        <div class="flex-1 min-w-0">
                                                            <div class="font-medium text-slate-100 truncate">
                                                                {{ $column->title }}
                                                            </div>

                                                            @if ($column->url)
                                                                <div class="text-xs text-slate-400 font-mono truncate">
                                                                    {{ $column->url }}
                                                                </div>
                                                            @endif
                                                        </div>

                                                        <button
                                                            wire:click="editItem({{ $column->id }})"
                                                            class="p-2 rounded hover:bg-slate-800/60"
                                                        >
                                                            <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                            </svg>
                                                        </button>

                                                        <button
                                                            wire:click="deleteItem({{ $column->id }})"
                                                            wire:confirm="Delete this footer column?"
                                                            class="p-2 rounded hover:bg-red-500/10"
                                                        >
                                                            <svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div wire:sort="sortItems" class="space-y-2">
                                                        @forelse ($column->children as $link)
                                                            <div
                                                                wire:key="footer-link-{{ $link->id }}"
                                                                wire:sort:item="{{ $link->id }}"
                                                                class="flex items-center gap-3 p-3 bg-slate-900/40 border border-slate-700 rounded-lg"
                                                            >
                                                                <div
                                                                    wire:sort:handle
                                                                    class="text-slate-500 hover:text-amber-400 transition-colors cursor-grab active:cursor-grabbing"
                                                                >
                                                                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                        <path d="M7 4.5a1 1 0 11-2 0 1 1 0 012 0ZM7 10a1 1 0 11-2 0 1 1 0 012 0ZM7 15.5a1 1 0 11-2 0 1 1 0 012 0ZM15 4.5a1 1 0 11-2 0 1 1 0 012 0ZM15 10a1 1 0 11-2 0 1 1 0 012 0ZM15 15.5a1 1 0 11-2 0 1 1 0 012 0Z" />
                                                                    </svg>
                                                                </div>

                                                                <div class="flex-1 min-w-0">                                                                    
                                                                    <div class="font-medium truncate">
                                                                        {{ $link->title }}
                                                                    </div>

                                                                    <div class="text-xs text-slate-400 font-mono truncate">
                                                                        {{ $link->url }}
                                                                    </div>
                                                                </div>

                                                                <button
                                                                    wire:click="editItem({{ $link->id }})"
                                                                    class="p-2 rounded hover:bg-slate-800/60"
                                                                >
                                                                    <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                                    </svg>
                                                                </button>

                                                                <button
                                                                    wire:click="deleteItem({{ $link->id }})"
                                                                    wire:confirm="Delete this footer link?"
                                                                    class="p-2 rounded hover:bg-red-500/10"
                                                                >
                                                                    <svg class="h-4 w-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        @empty
                                                            <div class="text-center py-6 text-sm text-slate-400 border border-dashed border-slate-700 rounded-lg">
                                                                No links added.
                                                            </div>
                                                        @endforelse
                                                    </div>

                                                    <flux:button
                                                        wire:click="addItem({{ $column->id }})"
                                                        variant="ghost"
                                                        icon="plus"
                                                        class="w-full"
                                                    >
                                                        Add Link
                                                    </flux:button>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </flux:tab.panel>

                            </flux:tab.group>
                        </div>
                    </section>

                        <!-- Add/Edit modal -->
                        <flux:modal name="menu-item-form" class="md:w-[32rem]">
                            <div class="space-y-6">
                                <div>
                                    <flux:heading class="font-orbitron">
                                        {{ $editingItemId ? 'Edit Link' : 'Add Link' }}
                                    </flux:heading>

                                    <flux:text class="mt-2">
                                        {{ $parentId ? 'Add or edit a sub-link.' : 'Add or edit a top-level menu link.' }}
                                    </flux:text>
                                </div>

                                <flux:input label="Label" wire:model="title" placeholder="e.g. About" />

                                <flux:input label="URL" wire:model="url" placeholder="/path or https://..." />

                                <flux:input
                                    label="Icon"
                                    wire:model="icon"
                                    placeholder="e.g. home, user, ship, briefcase"
                                />

                                <flux:select label="Type" wire:model="type">
                                    <flux:select.option value="custom">Custom</flux:select.option>
                                    <flux:select.option value="route">Route</flux:select.option>
                                    <flux:select.option value="external">External</flux:select.option>
                                </flux:select>

                                <flux:input label="Route Name" wire:model="route_name" placeholder="e.g. fleet.index" />

                                <flux:select label="Target" wire:model="target">
                                    <flux:select.option value="_self">Same Tab</flux:select.option>
                                    <flux:select.option value="_blank">New Tab</flux:select.option>
                                    <flux:select.option value="_parent">Parent Frame</flux:select.option>
                                    <flux:select.option value="_top">Full Window</flux:select.option>
                                </flux:select>

                                <flux:checkbox wire:model="is_active" label="Active" />

                                <div class="flex items-center justify-end gap-3">
                                    <flux:modal.close>
                                        <flux:button variant="ghost">Cancel</flux:button>
                                    </flux:modal.close>

                                    <flux:button wire:click="saveItem" variant="primary" color="amber">
                                        Save
                                    </flux:button>
                                </div>
                            </div>
                        </flux:modal>
                            
                </div>