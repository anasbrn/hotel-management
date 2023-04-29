<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public const NAME_COLUMN = 'name';

    public function getName()
    {
        return $this->getAttribute(self::NAME_COLUMN);
    }

    public function hotels() {
        return $this->belongsToMany(Hotel::class);
    }
}
