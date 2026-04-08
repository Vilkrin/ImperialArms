<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Ship extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'manufacturer',
        'model',
        'class',
        'role',
        'size',
        'crew_required',
        'cargo_capacity',
        'description',
    ];

    /**
     * Register media collection for ship images
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')->singleFile();
    }

    /**
     * Many-to-Many: Users who own this ship
     */
    public function members()
    {
        return $this->belongsToMany(User::class, 'member_ships')
            ->using(MemberShip::class)
            ->withPivot('name')
            ->withTimestamps();
    }

    /**
     * Helper to display full ship name
     */
    public function getDisplayName(): string
    {
        return $this->manufacturer . ' ' . $this->model;
    }
}
