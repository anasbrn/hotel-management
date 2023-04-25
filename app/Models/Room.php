<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    public function RoomImages() {
        return $this->belongsToMany(RoomImages::class);
    }

    public function Reservation() {
        return $this->hasOne(Reservation::class);
    }
}
