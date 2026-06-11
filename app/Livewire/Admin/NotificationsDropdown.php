<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class NotificationsDropdown extends Component
{
    public function markAsRead(string $id): void
    {
        $notification = auth()->user()
            ->unreadNotifications()
            ->where('id', $id)
            ->first();

        if ($notification) {
            $notification->markAsRead();
        }
    }

    public function markAllAsRead(): void
    {
        auth()->user()
            ->unreadNotifications
            ->markAsRead();
    }
    public function render()
    {
        return view('livewire.admin.notifications-dropdown', [
            'notifications' => auth()->user()
                ->unreadNotifications()
                ->latest()
                ->take(5)
                ->get(),

            'unreadCount' => auth()->user()
                ->unreadNotifications()
                ->count(),
        ]);
    }
}
