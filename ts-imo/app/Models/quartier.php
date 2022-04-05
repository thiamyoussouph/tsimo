<?php

namespace App\Models;

use App\Models\propriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class quartier extends Model
{
    use HasFactory;
    public function proprietes()
    {
       return $this->hasMany(propriete::class);
      
    }
    
}
