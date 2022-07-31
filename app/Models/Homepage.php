<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
    protected $fillable =['judul_hitam', 'judul_putih', 'desk', 'button'];
    public static function content()
        {
            return self::all();
        }
}
