<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MemberShip extends Pivot
{
    protected $table = 'member_ships';

    protected $fillable = [
        'user_id',
        'ship_id',
        'name', // optional: user-given ship name
    ];

    public $timestamps = true;

    /**
     * Get the user who owns this ship.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the ship assigned to the user.
     */
    public function ship()
    {
        return $this->belongsTo(Ship::class);
    }

    /**
     * Helper to get the display name of the ship for this user.
     */
    public function getDisplayName(): string
    {
        if ($this->name) {
            return $this->name;
        }

        return $this->ship ? $this->ship->manufacturer . ' ' . $this->ship->model : 'Unknown Ship';
    }
}
