<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Activitylog\Models\Activity;

class ActivityLog extends Component
{
    use WithPagination;

    public function render()
    {
        $activities = Activity::query()
            ->with('causer.roles')
            ->where('log_name', 'admin')
            ->latest()
            ->paginate(15);

        return view('livewire.admin.dashboard.activity-log', [
            'activities' => $activities,
        ]);
    }
}
