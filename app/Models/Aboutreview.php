<?php

namespace App\Models;

use App\Models\Aboutgambar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aboutreview extends Model

{
    use HasFactory;
    protected $guarded =['id'];

    public function Aboutgambar()
    {
        return $this->belongsTo(Aboutgambar::class);
    }
}
