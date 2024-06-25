<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $date=['delete_at'];
    protected $table ='modules';
    public $timestamps= true;
    protected $fillable = [
        'libelleModule',
        'delete_at'






    ];
    public function modules(){
        return $this->hasMany(Module::class,'id_module');
    }
}
