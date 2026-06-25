<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class bookings extends Model
{
    protected $fillable = ['guest_id', 'check_in_date', 'check_out_date', 'status', 'payment_status', 'total_amount_cents', 'special_requests'];

    // Ensure date inputs automatically parse into Carbon instances
    protected $casts = [
        'check_in_date' => 'date',
        'check_out_date' => 'date',
    ];

    public function guest(): BelongsTo {
        return $this->belongsTo(guests::class);
    }

    public function rooms(): BelongsToMany {
        return $this->belongsToMany(rooms::class, 'booking_rooms')
                    ->withPivot('price_per_night_cents')
                    ->withTimestamps();
    }

    public function serviceBookings(): HasMany {
        return $this->hasMany(service_Bookings::class);
    }
}
