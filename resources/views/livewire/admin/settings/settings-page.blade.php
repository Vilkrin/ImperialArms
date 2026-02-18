<div>
    <flux:tab.group>
        <flux:tabs wire:model="tab">
            <flux:tab name="general">General</flux:tab>
            <flux:tab name="seo">SEO</flux:tab>
            <flux:tab name="social">Social</flux:tab>
        </flux:tabs>

        <flux:tab.panel name="general">
            <livewire:admin.settings.general />
        </flux:tab.panel>
        <flux:tab.panel name="seo">
            <livewire:admin.settings.seo />
        </flux:tab.panel>
        <flux:tab.panel name="social">
            <livewire:admin.settings.social-links />
        </flux:tab.panel>
    </flux:tab.group>
</div>
