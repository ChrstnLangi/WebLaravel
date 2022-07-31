<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $fillable =['judul', 'desk', 'img', 'note'];
    public static function content()
        {
            return self::all();
        }
}
