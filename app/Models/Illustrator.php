<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illustrator extends Model
{
    public function Characters()
    {
        return $this->hasMany(Character::class);
    }
}
