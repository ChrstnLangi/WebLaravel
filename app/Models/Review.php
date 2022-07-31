<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable =['judul', 'desk', 'img', 'role', 'link'];
    public static function content()
        {
            return self::all();
        }
}
