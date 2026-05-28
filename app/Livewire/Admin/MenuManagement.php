<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Menu;
use App\Models\MenuItem;
use Flux\Flux;

class MenuManagement extends Component
{
    public string $tab = 'main_navbar';

    public string $newFooterColumn = '';

    public ?int $editingItemId = null;
    public ?int $parentId = null;

    public string $title = '';
    public ?string $url = null;
    public ?string $icon = null;

    public string $type = 'custom';
    public ?string $route_name = null;

    public string $target = '_self';

    public bool $is_active = true;

    public function addItem(?int $parentId = null): void
    {
        $this->resetForm();

        $this->parentId = $parentId;

        Flux::modal('menu-item-form')->show();
    }

    public function editItem(int $itemId): void
    {
        $item = MenuItem::findOrFail($itemId);

        $this->editingItemId = $item->id;
        $this->parentId = $item->parent_id;

        $this->title = $item->title;
        $this->url = $item->url;
        $this->icon = $item->icon;
        $this->type = $item->type;
        $this->route_name = $item->route_name;

        $this->target = $item->target;

        $this->is_active = (bool) $item->is_active;

        Flux::modal('menu-item-form')->show();
    }

    public function saveItem(): void
    {
        $data = $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'url' => ['nullable', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:50'],
            'icon' => ['nullable', 'string', 'max:255'],
            'route_name' => ['nullable', 'string', 'max:255'],
            'target' => ['required', 'string'],
            'is_active' => ['boolean'],
        ]);

        $menu = Menu::where('location', $this->tab)->firstOrFail();

        $data['menu_id'] = $menu->id;
        $data['parent_id'] = $this->parentId;

        if (! $this->editingItemId) {
            $data['sort_order'] = MenuItem::where('menu_id', $menu->id)
                ->where('parent_id', $this->parentId)
                ->max('sort_order') + 1;
        }

        MenuItem::updateOrCreate(
            ['id' => $this->editingItemId],
            $data
        );

        $this->resetForm();

        Flux::modal('menu-item-form')->close();

        Flux::toast(
            heading: 'Menu updated',
            text: 'Menu item saved successfully.',
            variant: 'success',
        );
    }

    public function deleteItem(int $itemId): void
    {
        MenuItem::findOrFail($itemId)->delete();

        Flux::toast(
            heading: 'Menu item deleted',
            text: 'The menu item was removed successfully.',
            variant: 'success',
        );
    }

    public function resetForm(): void
    {
        $this->reset([
            'editingItemId',
            'parentId',
            'title',
            'url',
            'icon',
            'route_name',
        ]);

        $this->type = 'custom';
        $this->target = '_self';
        $this->is_active = true;
    }

    public function getNavbarMenuProperty()
    {
        return Menu::where('location', 'main_navbar')
            ->with('items.children')
            ->first();
    }

    public function sortItems($itemId, $position): void
    {
        $item = MenuItem::findOrFail($itemId);

        $siblings = MenuItem::where('menu_id', $item->menu_id)
            ->where('parent_id', $item->parent_id)
            ->orderBy('sort_order')
            ->get()
            ->reject(fn($sibling) => $sibling->id === $item->id)
            ->values();

        $siblings->splice($position, 0, [$item]);

        foreach ($siblings as $index => $sibling) {
            $sibling->update([
                'sort_order' => $index + 1,
            ]);
        }

        Flux::toast(
            heading: 'Menu order updated',
            text: 'The menu order was saved successfully.',
            variant: 'success',
        );
    }

    public function addFooterColumn(): void
    {
        $this->validate([
            'newFooterColumn' => ['required', 'string', 'max:255'],
        ]);

        $menu = Menu::where('location', 'footer')->firstOrFail();

        MenuItem::create([
            'menu_id' => $menu->id,
            'parent_id' => null,
            'title' => $this->newFooterColumn,
            'url' => null,
            'type' => 'column',
            'route_name' => null,
            'target' => '_self',
            'sort_order' => MenuItem::where('menu_id', $menu->id)
                ->whereNull('parent_id')
                ->max('sort_order') + 1,
            'is_active' => true,
        ]);

        $this->reset('newFooterColumn');

        Flux::toast(
            heading: 'Footer column added',
            text: 'The footer column was created successfully.',
            variant: 'success',
        );
    }

    public function addFooterLink(int $columnId): void
    {
        $this->resetForm();

        $this->tab = 'footer';
        $this->type = 'custom';
        $this->parentId = $columnId;

        Flux::modal('menu-item-form')->show();
    }

    public function getFooterMenuProperty()
    {
        return Menu::where('location', 'footer')
            ->with('items.children')
            ->first();
    }

    public function render()
    {
        return view('livewire.admin.menu-management');
    }
}
