<?php

namespace App\Models;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Web extends Model
{
    use HasFactory;
    public static function content()
    {
        return self::all();
    }

    public function Page()
    {
        return $this->hasMany(Page::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
