<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnseignantModule extends Model
{
    use HasFactory;
    protected $date=['delete_at'];
    protected $table ='enseignant_modules';
    public $timestamps= true;
    protected $fillable = [
        'id_enseignant',
        'id_module',
        'delete_at'
    ];

    public function enseignant(){

        return $this->belongsTo(Enseignant::class,'id_enseignant');
    }
    public function module(){

        return $this->belongsTo(Module::class,'id_module');
    }

}
