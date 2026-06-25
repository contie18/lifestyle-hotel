<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class services extends Model
{
    protected $fillable = ['name', 'category', 'description', 'price_cents', 'is_per_person'];

    protected $casts = [
        'is_per_person' => 'boolean',
    ];

    public function serviceBookings(): HasMany {
        return $this->hasMany(service_Bookings::class);
    }
}
