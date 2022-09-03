<?php

namespace App\Models;

use App\Models\Aboutjudul;
use App\Models\Aboutreview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aboutgambar extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function Aboutjudul()
    {
        return $this->belongsTo(Aboutjudul::class);
    }

    public function Aboutreview()
    {
        return $this->belongsTo(Aboutreview::class);
    }

    public static function content()
    {
        return self::all();
    }

}
