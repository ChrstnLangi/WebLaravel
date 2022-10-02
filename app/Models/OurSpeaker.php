<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurSpeaker extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function Speaker()
    {
        return $this->belongsTo(Speaker::class);
    }
}
