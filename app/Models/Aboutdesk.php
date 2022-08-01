<?php

namespace App\Models;

use App\Models\Aboutjudul;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aboutdesk extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function Aboutjudul()
    {
        return $this->belongsTo(Aboutjudul::class);
    }
}
