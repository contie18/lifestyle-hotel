<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;

class RoomType extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'base_price_cents', 'max_capacity_adults', 'max_capacity_children'];

    // Convert raw cents directly to decimal dollars/euros for Blade layout views
    protected function basePrice(): Attribute {
        return Attribute::make(
            get: fn ($value) => $this->base_price_cents / 100,
            set: fn ($value) => ['base_price_cents' => $value * 100]
        );
    }

    public function rooms(): HasMany {
        return $this->hasMany(Rooms::class);
    }
}