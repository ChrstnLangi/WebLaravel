<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hired extends Model
{
    use HasFactory;
    protected $fillable =['name', 'img'];

    public static function content()
        {
            return self::all();
        }
}
