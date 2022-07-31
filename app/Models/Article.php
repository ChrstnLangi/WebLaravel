<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable =['judul', 'desk', 'img1', 'img2'];
    use HasFactory;

    public static function content()
        {
            return self::all();
        }

}
