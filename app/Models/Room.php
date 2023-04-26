<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    public function RoomImages() {
        return $this->belongsToMany(RoomImages::class);
    }

    public function booking() {
        return $this->hasOne(Booking::class);
    }
}
