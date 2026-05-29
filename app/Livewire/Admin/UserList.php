<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class UserList extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'name';
    public $sortDirection = 'asc';
    public $showDeleteModal = false;
    public $userToDelete = null;

    public function search()
    {
        $this->resetPage();
    }

    #[Computed]
    public function users()
    {
        return User::query()
            ->with('roles')
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%');
                });
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);
    }

    public function render()
    {
        $totalUsers = $this->users->total();
        $admins = User::role('admin')->count();

        return view('livewire.admin.user-list', [
            'totalUsers' => $totalUsers,
            'usersThisMonth' => User::where('created_at', '>=', Carbon::now()->startOfMonth())->count(),
            'usersLastMonth' => User::whereBetween('created_at', [
                Carbon::now()->subMonth()->startOfMonth(),
                Carbon::now()->subMonth()->endOfMonth(),
            ])->count(),
            'activeUsers' => User::where('status', 'active')->count(),
            'admins' => $admins,
            'adminPercent' => $totalUsers > 0
                ? round(($admins / $totalUsers) * 100, 1)
                : 0,
        ]);
    }
}
