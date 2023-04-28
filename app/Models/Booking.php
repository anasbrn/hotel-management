<?php

namespace App\Models;

use App\Models\Room;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    public const ID_COLUMN = 'id';
    public const CHECK_IN_COLUMN = 'check_in_date';
    public const CHECK_OUT_COLUMN = 'check_out_date';
    public const USER_ID_COLUMN = 'user_id';
    public const ROOM_ID_COLUMN = 'room_id';
    public const HOTEL_ID_COLUMN = 'hotel_id';

    protected $fillable = [
        'check_in_date',
        'check_out_date',
        'user_id',
        'room_id',
        'hotel_id'
    ];

    public function getId()
    {
        return $this->getAttribute(self::ID_COLUMN);
    }

    public function getCheckInDate() 
    {
        return $this->getAttribute(self::CHECK_IN_COLUMN);
    }

    public function getCheckOutDate() 
    {
        return $this->getAttribute(self::CHECK_OUT_COLUMN);
    }

    public function getUserId() 
    {
        return $this->getAttribute(self::USER_ID_COLUMN);
    }

    public function getRoomId() 
    {
        return $this->getAttribute(self::ROOM_ID_COLUMN);
    }

    public function getHotelId() 
    {
        return $this->getAttribute(self::HOTEL_ID_COLUMN);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }

    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
}
