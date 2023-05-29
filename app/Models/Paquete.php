<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;
    protected $table='PAQUETE';//id auto_increment
    public $timestamps = false;
     protected $fillable = ['nombre', 'descripcion'];

}
