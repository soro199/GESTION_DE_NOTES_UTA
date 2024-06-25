<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;
    protected $date=['delete_at'];
    protected $table ='enseignants';
    public $timestamps= true;
    protected $fillable = [
        'specialite',
        'id_user',
        'delete_at'

    ];


    public function enseignantModules(){
        return $this->hasMany(EnseignantModule::class,'id_enseignant_module');
    }
    public function user(){

        return $this->belongsTo(User::class,'id_user');
    }



}
