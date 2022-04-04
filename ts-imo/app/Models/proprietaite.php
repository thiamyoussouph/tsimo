<?php

namespace App\Models;

use App\Models\propriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class proprietaite extends Model
{
    use HasFactory;
    protected $fillable=['nom','prenom','adresse','datenaissance','telephone','email'];

    public function proprietes()
    {
       return $this->hasMany(propriete::class);
      
    }
    // public $timestamps=false;
}
