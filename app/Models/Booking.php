<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
    public function numberOfDays(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $fromDate = new DateTime($this->from_date);
                $toDate = new DateTime($this->to_date);
                return $fromDate->diff($toDate)->days;
            }
        );
    }
    public function property(){
        return $this->belongsTo(Property::class);
    }
    public function totalAmount():Attribute
    {
        return Attribute::make(
            get: fn($value)=>$this->number_of_days*$this->property->room_price_x_persons
        );
    }
}
