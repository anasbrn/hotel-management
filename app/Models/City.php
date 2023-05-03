<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public const ID_COLUMN = 'id';
    public const NAME_COLUMN = 'name';
    public const IMAGE_COLUMN = 'image';

    public function getId()
    {
        return $this->getAttribute(self::ID_COLUMN);
    }

    public function getName()
    {
        return $this->getAttribute(self::NAME_COLUMN);
    }

    public function getImage()
    {
        return $this->getAttribute(self::IMAGE_COLUMN);
    }

    public function hotels() {
        return $this->hasMany(Hotel::class);
    }
}
