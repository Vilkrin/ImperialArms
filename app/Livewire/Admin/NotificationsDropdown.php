<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Flux\Flux;

class NotificationsDropdown extends Component
{
    public array $selectedNotification = [];

    public function openNotification(string $id): void
    {
        $notification = auth()->user()
            ->notifications()
            ->where('id', $id)
            ->first();

        if (! $notification) {
            return;
        }

        if (is_null($notification->read_at)) {
            $notification->markAsRead();
        }

        $this->selectedNotification = [
            'title' => $notification->data['title'] ?? 'Notification',
            'message' => $notification->data['message'] ?? '',
            'commit_message' => $notification->data['commit_message'] ?? $notification->data['message'] ?? '',
            'commit_url' => $notification->data['commit_url'] ?? null,
            'branch' => $notification->data['branch'] ?? null,
            'author' => $notification->data['author'] ?? null,
            'created_at' => $notification->created_at->diffForHumans(),
        ];

        Flux::modal('notification-details')->show();
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
                ->notifications()
                ->latest()
                ->take(5)
                ->get(),

            'unreadCount' => auth()->user()
                ->unreadNotifications()
                ->count(),
        ]);
    }
}
