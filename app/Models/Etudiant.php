<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $date=['delete_at'];
    protected $table ='etudiants';
    public $timestamps= true;
    protected $fillable = [
        'specialite',
        'id_user',
        'delete_at'






    ];
    public function user(){

        return $this->belongsTo(User::class,'id_user');
    }
    
}
