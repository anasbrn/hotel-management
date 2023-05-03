<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    public const ID_COLUMN = 'id';
    public const NAME_COLUMN = 'name';
    public const DESCRIPTION_COLUMN = 'description';
    public const ADDRESS_COLUMN = 'address';
    public const NUM_ROOMS_COLUMN = 'num_rooms';
    public const IMAGE_COLUMN = 'image';
    public const CITY_ID_COLUMN = 'city_id';
    public const USER_ID_COLUMN = 'user_id';

    protected $fillable = [
        'name',
        'description',
        'address',
        'num_rooms',
        'city_id',
        'user_id',
    ];

    public function getId()
    {
        return $this->getAttribute(self::ID_COLUMN);
    }

    public function getName()
    {
        return $this->getAttribute(self::NAME_COLUMN);
    }

    public function getDescription()
    {
        return $this->getAttribute(self::DESCRIPTION_COLUMN);
    }

    public function getAddress()
    {
        return $this->getAttribute(self::ADDRESS_COLUMN);
    }

    public function getNumRooms()
    {
        return $this->getAttribute(self::NUM_ROOMS_COLUMN);
    }

    public function getImage()
    {
        return $this->getAttribute(self::IMAGE_COLUMN);
    }

    public function getCity()
    {
        return $this->getAttribute(self::CITY_ID_COLUMN);
    }

    public function getUser()
    {
        return $this->getAttribute(self::USER_ID_COLUMN);
    }

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

    public function rooms() {
        return $this->hasMany(Room::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
