<?php

namespace App\Models;

use App\Models\Hotel;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    public function roomImages() {
        return $this->belongsToMany(RoomImages::class);
    }

    public function booking() {
        return $this->hasOne(Booking::class);
    }

    public function hotel() {
        return $this->hasOne(Hotel::class);
    }
}
