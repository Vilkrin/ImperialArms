<x-layouts.admin :title="__('Roles Management')">

    <flux:tab.group>
        <flux:tabs variant="segmented">
            <flux:tab name="roles" class="cursor-pointer" icon="users">Roles</flux:tab>
            <flux:tab name="permissions" class="cursor-pointer" icon="shield-check">Permissions</flux:tab>
        </flux:tabs>

        <flux:tab.panel name="roles">
            <livewire:admin.roles />
        </flux:tab.panel>

        <flux:tab.panel name="permissions">
            <livewire:admin.permissions />
        </flux:tab.panel>
    </flux:tab.group>

</x-layouts.admin>