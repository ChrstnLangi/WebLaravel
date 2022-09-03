<?php

namespace App\Models;

use App\Models\Aboutjudul;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public static function content()
    {
        return self::all();
    }

    public function Aboutjudul()
    {
        return $this->hasMany(Aboutjudul::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
