<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //

    public function getMarca()
    {
        return $this->belongsTo('App\Marca', 'idMarca', 'idMarca');
    }

    public function getCategoria()
    {
        return $this->belongsTo('App\Categoria', 'idCategoria', 'idCategoria');
    }






}
