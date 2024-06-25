<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;
    protected $date=['delete_at'];
    protected $table ='parents';
    public $timestamps= true;
    protected $fillable = [
        'id_user',
        'delete_at'






    ];
    public function user(){

        return $this->belongsTo(User::class,'id_user');
    }

    public function etudiants(){
        return $this->hasMany(Etudiant::class,'id_etudiant');
    }
}
