<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActivityBadge extends Component
{
    public string $classes;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $action
    ) {
        $this->classes = match (strtolower($action)) {
            'created' => 'border-green-400/30 bg-green-400/10 text-green-300',
            'updated' => 'border-blue-400/30 bg-blue-400/10 text-blue-300',
            'deleted' => 'border-red-400/30 bg-red-400/10 text-red-300',
            'login' => 'border-purple-400/30 bg-purple-400/10 text-purple-300',
            'banned' => 'border-red-500/30 bg-red-500/10 text-red-200',
            default => 'border-slate-600 bg-slate-700/20 text-slate-300',
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.activity-badge');
    }
}
