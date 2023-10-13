<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breeds extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'breed';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','estado','id_especie'];

    public function specie(){
        return $this->belongsTo('App\Models\Species','id');
    }

}