<?php

namespace App\Models;

use App\Models\OurTeam;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;
    public function OurTeam()
    {
        return $this->hasMany(OurTeam::class);
    }
}
