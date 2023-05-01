<?php

namespace App\Models;

use App\Models\Hotel;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    public const ID_COLUMN = 'id';
    public const ROOM_NUMBER_COLUMN = 'room_number';
    public const HOTEL_ID_COLUMN = 'hotel_id';
    public const ROOM_TYPE_COLUMN = 'room_type';
    public const PRICE_PER_NIGHT_COLUMN = 'price_per_night';

    protected $fillable = [
        'room_number',
        'hotel_id',
        'room_type',
        'price_per_night',
    ];

    public function getId()
    {
        return $this->getAttribute(self::ID_COLUMN);
    }

    public function getRoomNumber()
    {
        return $this->getAttribute(self::ROOM_NUMBER_COLUMN);
    }

    public function getHotelId()
    {
        return $this->getAttribute(self::HOTEL_ID_COLUMN);
    }

    public function getRoomType()
    {
        return $this->getAttribute(self::ROOM_TYPE_COLUMN);
    }

    public function getPrice()
    {
        return $this->getAttribute(self::PRICE_PER_NIGHT_COLUMN);
    }

    public function roomImages() {
        return $this->belongsToMany(RoomImages::class);
    }

    public function booking() {
        return $this->hasOne(Booking::class);
    }

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
}
