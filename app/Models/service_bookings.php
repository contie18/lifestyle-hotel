<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class service_bookings extends Model
{
    protected $fillable = ['booking_id', 'service_id', 'scheduled_at', 'quantity', 'total_service_price_cents', 'notes'];

    protected $casts = [
        'scheduled_at' => 'datetime',
    ];

    public function booking(): BelongsTo {
        return $this->belongsTo(bookings::class);
    }

    public function service(): BelongsTo {
        return $this->belongsTo(services::class);
    }
}