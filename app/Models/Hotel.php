<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
    

    public function favorite() {
        return $this->belongsTo(Favorites::class);
    }

    public function HotelImages() {
        return $this->belongsToMany(HotelImages::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function rating() {
        return $this->belongsTo(Rating::class);
    }
}
