<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
     // protected $fillable = ['nombre', 'resumen', 'npagina','edicion','autor','precio'];

     // protected $fillable = ['nombre', 'rol', 'apellido'];

     protected $fillable = ['nombre', 'rol', 'apellido', 'usuario', 'email', 'password'];


     protected $hidden = ['password', 'remember_token'];



}
