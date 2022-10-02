<?php

namespace App\Models;

use App\Models\Page;
use App\Models\Gambar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Text extends Model
{
    use HasFactory;
    public function Page()
    {
        return $this->belongsTo(Page::class);
    }
    public function Gambar()
    {
        return $this->belongsTo(Gambar::class);
    }
    public static function content()
    {
        return self::all();
    }
}
