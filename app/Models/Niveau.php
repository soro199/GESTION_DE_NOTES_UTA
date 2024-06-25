<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    protected $date=['delete_at'];
    protected $table ='niveaux';
    public $timestamps= true;
    protected $fillable = [
        'libelle_niveau',
        'delete_at'






    ];
}
