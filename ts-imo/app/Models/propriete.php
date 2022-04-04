<?php

namespace App\Models;

use App\Models\proprietaite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class propriete extends Model
{
    use HasFactory;
    public function proprietaite()
    {
       return $this->belongsTo(proprietaite::class);
    }
}
