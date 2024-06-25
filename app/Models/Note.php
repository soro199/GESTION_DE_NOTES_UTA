<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
  
    protected $date=['delete_at'];
    protected $table ='notes';
    public $timestamps= true;
    protected $fillable = [
        'note',
        'id_type_note',
        'delete_at'






    ];
    public function typeNote(){

        return $this->belongsTo(TypeNote::class,'id_type_note');
    }
}
