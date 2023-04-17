<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    public function hotels() {
        return $this->belongsToMany(Hotel::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
