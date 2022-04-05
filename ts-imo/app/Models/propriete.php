<?php

namespace App\Models;

use App\Models\quartier;
use App\Models\proprietaite;
use App\Models\typese_propriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class propriete extends Model
{
    use HasFactory;

    protected $fillable=['libelet','description','nombreEtage','nombredepiece','adressse','proprietaite_id','typese_propriete_id','quartier_id '];
    public function proprietaite()
    {
       return $this->belongsTo(proprietaite::class);
    }
    public function typese_propriete()
    {
       return $this->belongsTo(typese_propriete::class);
    }
    public function quartier()
    {
       return $this->belongsTo(quartier::class);
    }
    
}
