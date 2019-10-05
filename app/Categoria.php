<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $fillable=['id','nombre'];
    public function libros(){
    	return $this->hasMany('App\Libro');}


}
