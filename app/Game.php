<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function category()
    {
        return $this->belongsToMany('\App\Category');
    }
}
