<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function Illustrator()
    {
        return $this->belongsTo(Illustrator::class);
    }
}
