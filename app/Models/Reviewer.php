<?php

namespace App\Models;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reviewer extends Model
{
    use HasFactory;

    public function Page()
    {
        return $this->belongsTo(Page::class);
    }

}
