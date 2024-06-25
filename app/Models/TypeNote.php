<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeNote extends Model
{
    use HasFactory;

 
    protected $date=['delete_at'];
    protected $table ='type_notes';
    public $timestamps= true;
    protected $fillable = [
        'libelle_typeNote',
        'delete_at'

    ];

    public function notes(){
        return $this->hasMany(Note::class,'id_note');
    }


}
