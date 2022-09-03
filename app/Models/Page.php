<?php

namespace App\Models;

use App\Models\Web;
use App\Models\Text;
use App\Models\Gambar;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;

    public static function content()
    {
        return self::all();
    }

    public function Text()
    {
        return $this->hasMany(Text::class);
    }
    public function Gambar()
    {
        return $this->hasMany(Gambar::class);
    }
    public function Comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function Web()
    {
        return $this->belongsTo(Web::class);
    }

}
