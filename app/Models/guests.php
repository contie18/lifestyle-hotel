<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class guests extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'preferences'];

    public function bookings(): HasMany {
        return $this->hasMany(bookings::class);
    }
}