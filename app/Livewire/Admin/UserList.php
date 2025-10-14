<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $totalUsers;
    public $usersThisMonth;
    public $usersLastMonth;
    public $activeUsers;
    public $admins;
    public $adminPercent;
    public $search = '';
    public $sortField = 'name';
    public $sortDirection = 'asc';
    public $showDeleteModal = false;
    public $userToDelete = null;

    public function mount()
    {
        $this->loadStats();
    }

    public function loadStats()
    {
        $this->totalUsers = User::count();

        $this->usersThisMonth = User::where('created_at', '>=', Carbon::now()->startOfMonth())->count();

        $this->usersLastMonth = User::whereBetween('created_at', [
            Carbon::now()->subMonth()->startOfMonth(),
            Carbon::now()->subMonth()->endOfMonth(),
        ])->count();

        // Example: Active users (adjust to your logic)
        $this->activeUsers = User::where('is_active', true)->count();

        // Example: Count admins (if using Spatie roles)
        $this->admins = User::role('admin')->count();

        $this->adminPercent = $this->totalUsers > 0
            ? round(($this->admins / $this->totalUsers) * 100, 1)
            : 0;
    }

    public function render()
    {
        $users = User::query()
            ->with('roles')
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10)
            ->withQueryString();

        return view('livewire.admin.user-list', ['users' => $users]);
    }
}
