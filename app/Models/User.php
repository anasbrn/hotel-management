<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    public const NAME_COLUMN = 'name';
    public const IMAGE_COLUMN = 'image';
    public const EMAIL_COLUMN = 'email';
    public const PHONE_COLUMN = 'phone';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        // 'image',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getName()
    {
        return $this->getAttribute(self::NAME_COLUMN);
    }

    public function getImage()
    {
        return $this->getAttribute(self::IMAGE_COLUMN);
    }

    public function getEmail()
    {
        return $this->getAttribute(self::EMAIL_COLUMN);
    }

    public function getPhone()
    {
        return $this->getAttribute(self::PHONE_COLUMN);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function hotels() {
        return $this->belongsToMany(Hotel::class);
    }

    public function rating() {
        return $this->belongsTo(Rating::class);
    }

    public function bookings() {
        return $this->belongsToMany(Booking::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }
}
