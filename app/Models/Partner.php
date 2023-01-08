<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function couponCode(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->firstname . $this->id
        );
    }
    // Extract number from string
    //$int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);

}
