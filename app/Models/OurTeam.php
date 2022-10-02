<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Speaker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OurTeam extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function Team()
    {
        return $this->belongsTo(Team::class);
    }
}
