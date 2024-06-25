<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
 
    protected $date=['delete_at'];
    protected $table ='roles';
    public $timestamps= true;
    protected $fillable = [
        'libelle_role',
        'delete_at'






    ];
    public function users(){
        return $this->hasMany(User::class,'id_user');
    }
}
