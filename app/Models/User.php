<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
     protected $date=['delete_at'];
     protected $table ='users';
     public $timestamps= true;
    protected $fillable = [
        'name',
        'email',
        'password',
        'prenoms',
        'dateN',
        'tel',
        'id_role',
        'adresse',
        'delete_at'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   

    public function role(){

        return $this->belongsTo(Role::class,'id_role');
    }
    
    public function enseignants(){
        return $this->hasMany(Enseignant::class,'id_enseignant');
    }
    public function parents(){
        return $this->hasMany(Parents::class,'id_parent');
    }
    public function etudiants(){
        return $this->hasMany(Etudiant::class,'id_etudiant');
    }
    public function administrations(){
        return $this->hasMany(Administration::class,'id_administration');
    }
}
