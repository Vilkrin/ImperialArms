<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $fillable = [
        'user_id',
        'rank',
        'division',
        'status',
        'leadership_notes',
        'service_record',
        'commendations',
        'disciplinary_actions',
        'enlistment_date',
        'discharge_date',
    ];

    protected $casts = [
        'service_record' => 'array',
        'commendations' => 'array',
        'disciplinary_actions' => 'array',
        'enlistment_date' => 'date',
        'discharge_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
