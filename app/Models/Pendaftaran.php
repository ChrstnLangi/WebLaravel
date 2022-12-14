<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function Page()
    {
        return $this->belongsTo(Page::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
