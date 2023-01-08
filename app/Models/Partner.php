<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $guarded = [];
    private $commissions = [
        1 => 4,
        2 => 4.5,
        3 => 5,
        4 => 6,
        5 => 7
    ];
    private $bookingTier = [1 => 50, 2 => 100, 3 => 200, 4 => 1000];
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
    public function currentCommission(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->commissions[$this->tier]

        );
    }
    public function nextCommission(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->commissions[$this->tier + 1]
        );
    }
    public function tier(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $numOfBookings = $this->bookings->count();
                $tier = 0;
                if ($numOfBookings < 50) {
                    $tier = 1;
                } elseif ($numOfBookings >= 50 && $numOfBookings < 100) {
                    $tier = 2;
                } elseif ($numOfBookings >= 100 && $numOfBookings < 200) {
                    $tier = 3;
                } elseif ($numOfBookings >= 200 && $numOfBookings < 1000) {
                    $tier = 4;
                } elseif ($numOfBookings >= 1000) {
                    $tier = 5;
                }
                return $tier;
            }
        );
    }
    public function bookingsNeededForNextTier(): Attribute
    {
        return Attribute::make(
            get: function ($value) {

                return $this->bookingTier[$this->tier] - $this->bookings->count();
            }
        );
    }
    public function bookingsForNextTier(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                return $this->bookingTier[$this->tier];
            }
        );
    }
    public function yesterdayBookings()
    {
        $yesterday = date("Y-m-d", strtotime('-1 days'));
        return $this->hasMany(Booking::class)->whereDay('created_at', $yesterday);
    }
    public function monthToDateBookings()
    {
        return $this->hasMany(Booking::class)
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year);
    }

    // Extract number from string
    //$int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);

}
