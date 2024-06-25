<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    protected $date=['delete_at'];
    protected $table ='filieres';
    public $timestamps= true;
    protected $fillable = [
        'NomF',
        'delete_at'






    ];
}
