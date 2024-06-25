<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parents extends Model
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
}
