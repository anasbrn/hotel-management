<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public const CHECK_IN_COLUMN = 'check_in_date';
    public const CHECK_OUT_COLUMN = 'check_out_date';
    public const USER_ID_COLUMN = 'user_id';
    public const ROOM_ID_COLUMN = 'room_id';

    protected $fillable = [
        'check_in_date',
        'check_out_date',
        'user_id',
        'room_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }

    public function room() {
        return $this->hasOne(Room::class);
    }
}
