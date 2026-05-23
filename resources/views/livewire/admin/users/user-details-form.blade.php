<div>
    <!-- Basic Information -->
    <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
        <div class="p-6 border-b border-slate-700 flex items-center justify-between">
            <h3 class="text-2xl font-semibold text-slate-100">Basic Information</h3>

            <flux:modal.trigger name="ban-user">
                <flux:button class="cursor-pointer">Ban User</flux:button>
            </flux:modal.trigger>
        </div>

        <form wire:submit="save" class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <flux:field>
                    <flux:label>Username</flux:label>
                    <flux:input wire:model="name" />
                    <flux:error name="name" />
                </flux:field>

                <flux:field>
                    <flux:label>Email</flux:label>
                    <flux:input type="email" wire:model="email" />
                    <flux:error name="email" />
                </flux:field>

                <flux:field>
                    <flux:label>Password</flux:label>
                    <flux:input type="password" wire:model="password" />
                    <flux:error name="password" />
                </flux:field>

                <flux:field>
                    <flux:label>Status</flux:label>

                    <flux:select wire:model="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="banned">Banned</option>
                    </flux:select>

                    <flux:error name="status" />
                </flux:field>
            </div>

            <div class="pt-6">
                <flux:button type="submit" variant="primary" class="amber cursor-pointer">
                    Save Changes
                </flux:button>
            </div>
        </form>
    </div>

    <flux:modal name="ban-user" class="md:w-96">
        <form wire:submit.prevent="banUser" class="space-y-6">
            <div>
                <flux:heading size="lg">Ban User</flux:heading>
                <flux:text class="mt-2">Are you sure you want to ban this user?</flux:text>
            </div>

            <flux:input
                label="Reason"
                placeholder="Enter reason for ban"
                wire:model="ban_reason"
            />

            <flux:input
                label="Banned Until"
                type="date"
                wire:model="banned_until"
            />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" class="cursor-pointer">
                    Save changes
                </flux:button>
            </div>
        </form>
    </flux:modal>
</div>