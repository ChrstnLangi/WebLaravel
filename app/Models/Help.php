<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $fillable =['judul', 'desk', 'img'];
    use HasFactory;

    public static function content()
        {
            return self::all();
        }
}
