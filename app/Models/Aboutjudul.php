<?php

namespace App\Models;

use App\Models\About;
use App\Models\Aboutdesk;
use App\Models\Aboutgambar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aboutjudul extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function About()
    {
        return $this->belongsTo(About::class);
    }

    public static function content()
    {
        return self::all();
    }

    public function Aboutdesk()
    {
        return $this->hasMany(Aboutdesk::class);
    }

    public function Aboutgambar()
    {
        return $this->hasMany(Aboutgambar::class);
    }


}
