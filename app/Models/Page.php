<?php

namespace App\Models;

use App\Models\Web;
use App\Models\Text;
use App\Models\Gambar;
use App\Models\Comment;
use App\Models\Reviewer;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;
    protected $guarded =['id'];

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

    public function Reviewer()
    {
        return $this->hasMany(Reviewer::class);
    }

    public function Web()
    {
        return $this->belongsTo(Web::class);
    }

    public function Pendaftaran(){
        return $this->hasMany(Pendaftaran::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
