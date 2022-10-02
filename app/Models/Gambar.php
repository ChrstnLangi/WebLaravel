<?php

namespace App\Models;

use App\Models\Page;
use App\Models\Text;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gambar extends Model
{
    use HasFactory;
    public function Page()
    {
        return $this->belongsTo(Page::class);
    }
    public function Text()
    {
        return $this->hasMany(Text::class);
    }
    public static function content()
    {
        return self::all();
    }
    public function getRouteKeyName()
    {
        return 'page_id';
    }
}
