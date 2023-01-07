<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function nearbies(){
        return $this->hasMany(Nearby::class);
    }
    public function nearbyRestaurants() {
        return $this->hasMany(Nearby::class)->whereIn('type',['restaurant','cafe']);
    }
    public function nearbyShoppings(){
        return $this->hasMany(Nearby::class)->whereIn('type',['store','market']);
    }
    public function nearbyPlaces(){
        return $this->hasMany(Nearby::class)->where('category','Places of interest');
    }
    public function propertyPath(){
        return $this->hasOne(PropertyPath::class);
    }
    public function rooms(){
        return $this->hasMany(Room::class);
    }
}
