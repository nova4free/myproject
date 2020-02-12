<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function enterprises()
    {
        return $this->belongsToMany(Enterprise::class);
    }



}
