<?php

namespace App\Models;

use App\Models\OurSpeaker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Speaker extends Model
{
    use HasFactory;

    public function OurSpeaker()
    {
        return $this->hasMany(OurSpeaker::class);
    }
}
