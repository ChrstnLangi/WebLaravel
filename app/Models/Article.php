<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    protected $guarded =['id'];
    use HasFactory, Sluggable;

    public static function content()
        {
            return self::all();
        }

        public function category() {
            return $this->belongsTo(Category::class);
        }

        public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
