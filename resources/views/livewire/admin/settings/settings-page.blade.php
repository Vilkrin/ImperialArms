<div>
    <flux:tabs wire:model="activeTab">
        <flux:tabs.list>
            <flux:tabs.trigger value="general">General</flux:tabs.trigger>
            <flux:tabs.trigger value="seo">SEO</flux:tabs.trigger>
            <flux:tabs.trigger value="social">Social</flux:tabs.trigger>
        </flux:tabs.list>

        <flux:tabs.panel value="general">
            <livewire:admin.settings.general />
        </flux:tabs.panel>

        <flux:tabs.panel value="seo">
            <livewire:admin.settings.seo />
        </flux:tabs.panel>

        <flux:tabs.panel value="social">
            <livewire:admin.settings.social-links />
        </flux:tabs.panel>
    </flux:tabs>
</div>
