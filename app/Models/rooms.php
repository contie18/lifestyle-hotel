<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class rooms extends Model
{
    protected $fillable = ['room_type_id', 'room_number', 'floor_number', 'status'];

    public function roomType(): BelongsTo {
        return $this->belongsTo(RoomType::class);
    }

    public function bookings(): BelongsToMany {
        return $this->belongsToMany(Bookings::class, 'booking_rooms')
                    ->withPivot('price_per_night_cents')
                    ->withTimestamps();
    }
}